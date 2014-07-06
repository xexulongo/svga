<?php

class PermisosCommand extends CConsoleCommand
{
    public function actionCarrega() {
    	// Els rols de membre i usuari han s'ha de carregar per default
		
    	//Funció encarregada de carregar els permisos de l'aplicació (rols i bizrules)
    	$auth = Yii::app()->authManager;

		//Aquest rol només el tindran les seccions de web i junta
		$role = $auth->createRole('admin');

		$bizRule = "return Yii::app()->user->checkSeccio('web');";
		$role = $auth->createRole('web', 'secció web', $bizRule);
		$role->addChild('admin');
		
		$bizRule = "return Yii::app()->user->checkSeccio('junta');";
		$role = $auth->createRole('junta', 'secció junta', $bizRule);
		$role->addChild('admin');
		
		//rol de membres
		$bizRule = "return (Yii::app()->user->getState('login_type') == 'membre');";
		$role = $auth->createRole('membre', 'Usuari membre', $bizRule);
		$role->addChild('web');
		$role->addChild('junta');

		//Guardem tots els canvis (per defecte a protected/data/auth.php)
		$auth->save();
		
	}
    
}