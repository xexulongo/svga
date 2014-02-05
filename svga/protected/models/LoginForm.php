<?php

class LoginForm extends CFormModel {
	
	public $email;
	public $password;
	
	public function rules() {
		
		return array(
			array('email', 'required'),
			array('password', 'required')
		);
		
	}
	
	public function attributeLabels() {
		return array(
			'email' => Yii::t('engrescat', 'Email'),
			'password' => Yii::t('engrescat', 'Contrasenya'),
		);
	}
	
}
