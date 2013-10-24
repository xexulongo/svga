<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form span4 offset4" style="padding-bottom:45px;",>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'register-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
	'htmlOptions'=>array(
	        'class'=>'log-page',
    ),
)); ?>

	<h1>Create Users</h1>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->labelEx($model,'username'); ?>
		<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span><?php echo $form->textField($model,'username'); ?></div>
		<?php echo $form->error($model,'username',array("class"=>"alert alert-error")); ?>


		<?php echo $form->labelEx($model,'password'); ?>
		<div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><?php echo $form->passwordField($model,'password'); ?></div>
		<?php echo $form->error($model,'password', array("class"=>"alert alert-error")); ?>
		
		<?php echo $form->labelEx($model,'repeat_password'); ?>
		<div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span> <?php echo $form->passwordField($model,'repeat_password',array('maxlength'=>40)); ?></div>
		<?php echo $form->error($model,'password', array("class"=>"alert alert-error")); ?>


		<?php echo $form->labelEx($model,'email'); ?>
		<div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><?php echo $form->textField($model,'email'); ?></div>
		<?php echo $form->error($model,'email', array("class"=>"alert alert-error")); ?>

	
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'avatar'); ?>
	

	
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
		<?php echo $form->error($model,'birthday'); ?>
	

	<!--<?php echo $form->labelEx($model,'last_login'); ?>
		<?php echo $form->textField($model,'last_login'); ?>
		<?php echo $form->error($model,'last_login'); ?>
	
	
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?> -->
	

	<!--<div class="row buttons">-->
		<!-- <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?> -->
		<br/>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array("class"=>"btn btn-info")); ?>
	<!--</div>-->

<?php $this->endWidget(); ?>

</div><!-- form -->
<div style="float:both;"></div>
