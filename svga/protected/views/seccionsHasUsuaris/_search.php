<?php
/* @var $this SeccionsHasUsuarisController */
/* @var $model SeccionsHasUsuaris */
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
		<?php echo $form->label($model,'Seccions_id'); ?>
		<?php echo $form->textField($model,'Seccions_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuaris_id'); ?>
		<?php echo $form->textField($model,'Usuaris_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'confirmed'); ?>
		<?php echo $form->textField($model,'confirmed'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->