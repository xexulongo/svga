
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
		<?php echo CHtml::submitButton(Yii::t('SVGA', 'Inicia sessió'), array("class"=>"btn btn-primary pull-left"));?>
        <h5><?= CHtml::link(Yii::t('SVGA', "No recordes la contrasenya?"), $this->createUrl('user/forgot'),array('class'=>'pull-right span3')); ?></h5>
		<?php $this->endWidget(); ?>