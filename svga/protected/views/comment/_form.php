<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/tinymce/tinymce.min.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.slug.js');?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'comment-form',
    'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Todos los campos marcados con <span class="required">*</span> son necesarios.</p>

	<?php echo $form->errorSummary($model); ?>

	
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	

<!-- 	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div> -->

	<br />
<!-- 		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'author'); ?> -->
	

<!-- 
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?> -->


<!-- 	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_id'); ?>
		<?php echo $form->textField($model,'post_id'); ?>
		<?php echo $form->error($model,'post_id'); ?>
	</div> -->


		<br /><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

	<script>
	
	$(document).ready(function() {
		
		$('#News_title_ca').slug({'slug': 'News_slug'});
		
		tinymce.init({
			selector: "textarea",
			plugins: "textcolor pagebreak table link image emoticons preview",
			pagebreak_separator: "<!-- mes -->",
			menubar: 'edit insert format',
			toolbar: 'undo redo | styleselect forecolor backcolor| bold italic | link image  | pagebreak table hr | emoticons preview',
		});
		
	});
	
	</script>

<?php $this->endWidget(); ?>

</div><!-- form -->