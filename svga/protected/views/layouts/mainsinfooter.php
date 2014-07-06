<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ca_ES" lang="ca_ES">
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/custom.css" />

</head>

<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            
            <ul id="yw1" class="nav">
                <li>
                    <a style="padding:0;" href="/svga/index.php" class="pull-left">
                        <img src="/svga/images/logo.jpg" alt="">
                    </a>
                </li>
                <li><a href="<?= Yii::app()->createUrl('post/index')?>">Inicio</a></li>
                <li><?= CHtml::link(Yii::t('HST2', 'Sobre nosotros'), $this->createUrl('site/about'));?></li>
                <li><?= CHtml::link(Yii::t('HST2', 'Contacte'), $this->createUrl('site/contact'))?></li>
            </ul>
            <ul class="pull-right nav" id="yw2">
                <?php if(!Yii::app()->user->isGuest) : ?>
                    <li><a href="<?= Yii::app()->createUrl('usuarisvga/logout')?>">
                    <i class="icon-user"></i> Logout (<?=Yii::app()->user->name ?> )</a></li>
                <?php else : ?>
                    <li><a href="<?= Yii::app()->createUrl('usuarisvga/login')?>"> <i class="icon-user"></i> Login</a></li>
                    <li><a href="/svga/index.php/usuarisvga/login">Registrate</a></li>
                <?php endif; ?>
                <li><a style="  padding: 10px 1px 10px !important;" href="#"><i class="cicon-fb"></i> </a></li>
                <li><a style="padding: 10px 1px 10px !important;" href="#"><i class="cicon-twitter"></i> </a></li>
            </ul>
        </div>
    </div>
</div>



<div class="container" id="page">
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink' => Chtml::link(Yii::t('HST2', 'Inicio'), $this->createUrl('post/index'))
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'=>true, 
        'fade'=>true, 
        'closeText'=>'&times;', 
	)); ?>

	<?php echo $content; ?>
