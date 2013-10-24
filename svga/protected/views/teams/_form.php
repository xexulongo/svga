<?php
/* @var $this TeamsController */
/* @var $model Teams */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teams-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son imprescindibles.</p>
<!--

	<?php echo $form->errorSummary($model); ?>
-->

		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name',array("class"=>"alert alert-error")); ?>

		<?php echo $form->labelEx($model,'profile'); ?>
		<?php echo $form->textField($model,'profile',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'profile',array("class"=>"alert alert-error")); ?>


<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array("class"=>"btn btn-info")); ?>

<?php $this->endWidget(); ?><hr>

</div><!-- form -->
