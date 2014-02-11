<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array(
        'class'=>'log-page nomargin2 text-center',
        'style'=>'padding-bottom:10px;',

    ),
)); ?>

	<h1>Crear Usuari</h1>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->labelEx($model,'username'); ?>
		<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span><?php echo $form->textField($model,'username'); ?></div>
		<?php echo $form->error($model,'username',array("class"=>"alert alert-error")); ?>


		<?php echo $form->labelEx($model,'password'); ?>
		<div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><?php echo $form->passwordField($model,'password'); ?></div>
		<?php echo $form->error($model,'password', array("class"=>"alert alert-error")); ?>
		
		<?php echo $form->labelEx($model,'repeat_password'); ?>
		<div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span> <?php echo $form->passwordField($model,'repeat_password',array('maxlength'=>40)); ?></div>
		<?php echo $form->error($model,'repeat_password', array("class"=>"alert alert-error")); ?>


		<?php echo $form->labelEx($model,'email'); ?>
		<div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><?php echo $form->textField($model,'email'); ?></div>
		<?php echo $form->error($model,'email', array("class"=>"alert alert-error")); ?>

	
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'avatar'); ?>
	

	
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->error($model,'birthday'); ?>
	
<?php    
    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $model,
    'attribute'=>'birthday',
    // additional javascript options for the date picker plugin
    'options'=>array(
        'showAnim'=>'fold',
                'changeYear' => 'true',
                'dateFormat' => 'dd/mm/yy',
                'monthNames' => array('Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre'),
                'monthNamesShort' => array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"),
                'dayNames' => array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"),
                'dayNamesMin' => array('Do','Lu','Ma','Mi','Ju','Vi','Sa'),
                'defaultDate' => '-18y',
                'yearRange' => '1930:2008',
                'changeMonth' => 'true',
                'language'=> 'es',
                //'language'=> Yii::app()->getLanguage(),
    ),
    'htmlOptions'=>array(
        'style'=>'height:20px;'
    ),
)); 
?>

	<br/>
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array("class"=>"btn btn-info")); ?>

<?php $this->endWidget(); ?>
