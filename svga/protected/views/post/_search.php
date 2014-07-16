<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group col-md-10">
		<div class="col-lg-2"><?php echo $form->label($model,'id'); ?></div>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="form-group col-md-10">
		<div class="col-lg-2"><?php echo $form->label($model,'title'); ?></div>
		<?php echo $form->textField($model,'title',array('maxlength'=>128)); ?>
	</div>

	<div class="form-group col-md-10">
		<div class="col-lg-2"><?php echo $form->label($model,'content'); ?></div>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="form-group col-md-10">
		<div class="col-lg-2"><?php echo $form->label($model,'tags'); ?></div>
		<?php echo $form->textArea($model,'tags',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="form-group col-md-10">
		<div class="col-lg-2"><?php echo $form->label($model,'status'); ?></div>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="form-group col-md-10">
		<div class="col-lg-2"><?php echo $form->label($model,'create_time'); ?></div>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="form-group col-md-10">
		<div class="col-lg-2"><?php echo $form->label($model,'update_time'); ?></div>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="form-group col-md-10">
		<div class="col-lg-2"><?php echo $form->label($model,'author_id'); ?></div>
		<?php echo $form->textField($model,'author_id'); ?>
	</div>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->