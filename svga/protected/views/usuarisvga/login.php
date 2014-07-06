<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="row">
	<div class="form span5 offset3">
    <?= $this->renderPartial('_loginformsvga', array('model'=>Usuarisvga::model()), true); ?>
    </div>
	<div class="span3">
		<h2>Aún no estas registrado?</h2><p>Quieres disfrutar de todas las funcionalidades esta web? <strong>Registrarte</strong> no te llevará más de un minuto</p><?php echo CHtml::link('Registrate', $this->createAbsoluteUrl('usuarisvga/create'), array('class'=>'btn btn-success')); ?>
	</div>
</div>