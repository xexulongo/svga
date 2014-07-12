<?php

Yii::import('zii.widgets.CPortlet');

class UserMenu extends CPortlet
{
	protected function renderContent()
	{
		$this->render('adminMenu');
	}
}