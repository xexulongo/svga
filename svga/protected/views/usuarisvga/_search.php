<?php
/* @var $this UsuarisvgaController */
/* @var $model Usuarisvga */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="col-lg-12">
		<div class="col-lg-2"<?php echo $form->label($model,'id'); ?></div>
		<div class="col-lg-10"><?php echo $form->textField($model,'id'); ?></div>
	</div>

	<div class="col-lg-12">
		<div class="col-lg-2"<?php echo $form->label($model,'activated'); ?></div>
		<div class="col-lg-10"><?php echo $form->textField($model,'activated'); ?></div>
	</div>

	<div class="col-lg-12">
		<div class="col-lg-2"<?php echo $form->label($model,'name'); ?></div>
		<div class="col-lg-10"><?php echo $form->textField($model,'name',array('maxlength'=>45)); ?></div>
	</div>

	<div class="col-lg-12">
		<div class="col-lg-2"<?php echo $form->label($model,'username'); ?></div>
		<div class="col-lg-10"><?php echo $form->textField($model,'username',array('maxlength'=>45)); ?></div>
	</div>

	<div class="col-lg-12">
		<div class="col-lg-2"<?php echo $form->label($model,'email'); ?></div>
		<div class="col-lg-10"><?php echo $form->textField($model,'email',array('maxlength'=>45)); ?></div>
	</div>

	<div class="col-lg-12">
		<div class="col-lg-2"<?php echo $form->label($model,'created'); ?></div>
		<div class="col-lg-10"><?php echo $form->textField($model,'created',array('maxlength'=>45)); ?></div>
	</div>

	<div class="col-lg-12">
		<div class="col-lg-2"<?php echo $form->label($model,'last_login'); ?></div>
		<div class="col-lg-10"><?php echo $form->textField($model,'last_login',array('maxlength'=>45)); ?></div>
	</div>

	<div class="col-lg-12 buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary btn-large')); ?>
	</div>
	<div class="clearfix"></div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->