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
		<div class="tab-v1">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><?= Yii::t('engrescat', 'Usuari i contrasenya')?></a></li>
                <li><a href="#svga" data-toggle="tab"><?= Yii::t('engrescat', 'Membres SVGA')?></a></li>
            </ul>                
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <?= $this->renderPartial('_loginform', array('formModel' => $formModel), true);?>
                </div>
                <div class="tab-pane" id="svga">
                	<?= $this->renderPartial('_loginformsvga', array('model'=>Usuarisvga::model()), true); ?>
                </div>
            </div>
    	</div>
    </div>
	<div class="span3">
		<h2>Aún no estas registrado?</h2><p>Quieres disfrutar de todas las funcionalidades esta web? <strong>Registrarte</strong> no te llevará más de un minuto</p><?php echo CHtml::link('Registrate', $this->createAbsoluteUrl('users/create'), array('class'=>'btn btn-success')); ?>
	</div>
</div>