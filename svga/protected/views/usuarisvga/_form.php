<?php
/* @var $this UsuarisvgaController */
/* @var $model Usuarisvga */
/* @var $form CActiveForm */
?>

<div class="form text-center">
	<div class="head-form text-center"><h2>Nou membre SVGA</h2></div>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarisvga-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Els camps <span class="required">*</span> són necessaris.</p>

		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name', array('class'=>'alert alert-danger')); ?>


		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username', array('class'=>'alert alert-danger')); ?>

		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password', array('class'=>'alert alert-danger')); ?>

		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email', array('class'=>'alert alert-danger')); ?>

		<br/><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->