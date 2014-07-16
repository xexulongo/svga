<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>
<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4">
    <?= $this->renderPartial('_loginformsvga', array('model'=>Usuarisvga::model()), true); ?>
    </div>
</div>
<div class="clearfix"></div>