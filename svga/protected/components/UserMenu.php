<?php

Yii::import('zii.widgets.CPortlet');

class UserMenu extends CPortlet
{
	public function init()
	{
		$loguear='Bienvenid@: ';
		$nombre=Yii::app()->user->name;
		$loguear = $loguear . $nombre;
		$this->title='<b>' . CHtml::encode($loguear) . '</b>';
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('adminMenu');
	}
}