<?php
/* @var $this TorneoshasteamsController */
/* @var $model Torneoshasteams */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Torneos_id'); ?>
		<?php echo $form->textField($model,'Torneos_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Teams_id'); ?>
		<?php echo $form->textField($model,'Teams_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Paid'); ?>
		<?php echo $form->textField($model,'Paid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->