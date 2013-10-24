<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="row">
		<div class="form span4 offset4" style="margin-bottom:25px;">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		    'htmlOptions'=>array(
		        'class'=>'log-page',
		        'style'=>'padding-bottom:10px;',
		    )
		)); ?>
			<h1>Login</h1>
			<p class="note">Los campos marcados con <span class="required">*</span> son necesarios.</p>
				<?php echo $form->labelEx($model,'username'); ?>
				<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span><?php echo $form->textField($model,'username'); ?></div>
				<?php echo $form->error($model,'username',array("class"=>"alert alert-error")); ?>

				<?php echo $form->labelEx($model,'password'); ?>
				<div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><?php echo $form->passwordField($model,'password'); ?></div>
				<?php echo $form->error($model,'password',array("class"=>"alert alert-error")); ?>
				<p class="hint">
					<b>Hint:</b> You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
				</p>

				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->label($model,'rememberMe'); ?>
				<?php echo $form->error($model,'rememberMe'); ?>

				<?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary text-center')); ?>

		<?php $this->endWidget(); ?></div><!-- form -->
	<div class="span3 log-page"><h2>Aun no estas registrado?</h2><br /><p>Quieres disfrutar de todas las funcionalidades esta web? <strong>Registrarte</strong> no te llevará más de un minuto</p><?php echo CHtml::link('Registrate', $this->createAbsoluteUrl('users/create'), array('class'=>'btn btn-success')); ?></div></div>