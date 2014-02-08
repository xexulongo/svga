<?php

class PermisosCommand extends CConsoleCommand
{
    public function actionCarrega() {
    	// Els rols de membre i usuari han s'ha de carregar per default
		
    	//Funció encarregada de carregar els permisos de l'aplicació (rols i bizrules)
    	$auth = Yii::app()->authManager;
		
		//Teams
		$auth->createOperation('createTeam');
		$auth->createOperation('editTeam');
		$auth->createOperation('deleteTeam');

		$bizRule = '$auth = UsersHaveTeam::model()->find(\'user_id = :user_id AND team_id = :team_id AND type = :type\', array(\':user_id\' => Yii::app()->user->getID(), \':team_id\' => $params[\'team\']->id, \'type\' => UsersHaveTeam::ADMIN));
		return !empty($auth);';
		
		$task = $auth->createTask('TeamAdmin', 'Admin del Team', $bizRule, array('team'));
		$task->addChild('editTeam');

		//Aquest rol només el tindran les seccions de web, engrescat i junta
		$role = $auth->createRole('admin');
		$role->addChild('createTeam');
		$role->addChild('editTeam');
		$role->addChild('deleteTeam');
		
		
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
		
		//rol d'usuaris registrats
		$bizRule = 'return !Yii::app()->user->isGuest;'; //els usuaris registrats tenen aquest rol
		$role = $auth->createRole('registrat', 'usuari registrat', $bizRule);
		$role->addChild('createTeam');
		$role->addChild('TeamAdmin');
		
		//Guardem tots els canvis (per defecte a protected/data/auth.php)
		$auth->save();
		
	}
    
}