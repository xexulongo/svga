<div class="form text-center nomargin">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
	<div class="head-form text-center minim"><h3>Membre SVGA</h3></div>
		<div class="nomargin"><?php echo $form->labelEx($model,'username'); ?>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span><?php echo $form->textField($model,'username'); ?></div>
			<?php echo $form->error($model,'username',array("class"=>"alert alert-error")); ?>

			<?php echo $form->labelEx($model,'password'); ?>
			<div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><?php echo $form->passwordField($model,'password'); ?></div>
			<?php echo $form->error($model,'password',array("class"=>"alert alert-error")); ?>
			<br/><br/>
		<?php echo CHtml::submitButton(Yii::t('SVGA', 'Inicia sessió'), array("class"=>"btn btn-primary"));?> 	
	</div>

	<?php $this->endWidget(); ?>
</div>