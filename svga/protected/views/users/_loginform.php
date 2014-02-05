
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'type'=>'horizontal',
	'enableClientValidation' => true
));
CHtml::$afterRequiredLabel = '';
 ?>
 
<fieldset style="margin-top: 20px">
	<?php echo $form->textFieldRow($formModel, 'email'); ?>
	<?php echo $form->passwordFieldRow($formModel, 'password'); ?>
</fieldset>
<div class="form-group">
    <div class="col-md-offset-2 col-md-2 margin-bottom-10">
		<?php echo CHtml::submitButton(Yii::t('SVGA', 'Inicia sessió'), array("class"=>"btn-u"));?> 	</div>
	<div class="col-md-offset-2 col-md-6">
        <h5><?= CHtml::link(Yii::t('SVGA', "No recordes la contrasenya?"), $this->createUrl('user/forgot')); ?></h5>
    </div>
</div>
 
		<?php $this->endWidget(); ?>