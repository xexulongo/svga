<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Login</h2>

<div id="fieldset">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>

		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>

		<br/>

		<div class="pull-left"><?php echo $form->checkBox($model,'rememberMe'); ?></div>
		<div class="pull-left" id="margin-left"><?php echo $form->label($model,'rememberMe'); ?></div>
		<div class="pull-left"><?php echo $form->error($model,'rememberMe'); ?></div>
		<div class="clear"></div>

		<p><?php echo CHtml::submitButton('Login',array('class'=>'submitbut')); ?></p>

<?php $this->endWidget(); ?>
</div> <!-- end login -->
</div><!-- form -->
