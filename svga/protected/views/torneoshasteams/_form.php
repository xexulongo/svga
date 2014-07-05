<?php
/* @var $this TorneoshasteamsController */
/* @var $model Torneoshasteams */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'torneoshasteams-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>


		<?php echo $form->labelEx($model,'Torneos_id'); ?>
		<?php echo $form->dropDownList($model,'Torneos_id', CHtml::ListData(Torneos::model()->findAll(), "id", "name"),
			array('empty'=> 'SELECCIONA UN TORNEO')); ?>
		<?php echo $form->error($model,'Torneos_id', array("class"=>"alert alert-error")); ?>

		<?php echo $form->labelEx($model,'Teams_id'); ?>
		<?php echo $form->dropDownList($model,'Teams_id', CHtml::ListData(Teams::model()->findAll(), "id", "name"),
			array('empty'=> 'SELECCIONA UN EQUIPO')); ?>
		<?php echo $form->error($model,'Teams_id', array("class"=>"alert alert-error")); ?>
		
		<?php echo $form->labelEx($model,'Paid'); ?>
		<?php echo $form->checkbox($model,'Paid'); ?>
		<?php echo $form->error($model,'Paid', array("class"=>"alert alert-error")); ?>

		<br/><br/><?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array("class"=>"btn btn-info")); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
