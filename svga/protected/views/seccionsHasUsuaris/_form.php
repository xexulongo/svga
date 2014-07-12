<?php
/* @var $this SeccionsHasUsuarisController */
/* @var $model SeccionsHasUsuaris */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seccions-has-usuaris-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Seccions_id'); ?>
		<?php echo $form->textField($model,'Seccions_id'); ?>
		<?php echo $form->error($model,'Seccions_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuaris_id'); ?>
		<?php echo $form->textField($model,'Usuaris_id'); ?>
		<?php echo $form->error($model,'Usuaris_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'confirmed'); ?>
		<?php echo $form->textField($model,'confirmed'); ?>
		<?php echo $form->error($model,'confirmed'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->