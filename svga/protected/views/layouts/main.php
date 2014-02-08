<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
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

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
    	
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(               
                array('label'=>'Inicio', 'url'=> $this->createUrl('post/index')),
				array('label'=>'Usuarios', 'url'=> $this->createUrl('users/index')),
				array('label'=>'Equipos', 'url'=> $this->createUrl('teams/index')),
				array('label'=>'Torneos', 'url'=> $this->createUrl('torneos/index')),
                array('label'=>'Login', 'url'=> $this->createUrl('users/login'), 'visible'=> Yii::app()->user->isGuest),
                array('label'=>'Registrate', 'url'=> $this->createUrl('users/create'), 'visible'=> Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('users/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
        ),        
    ),

)); ?>

<div class="container" id="page">
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink' => Chtml::link(Yii::t('SVGA', 'Inicio'), $this->createUrl('post/index'))
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'=>true, 
        'fade'=>true, 
        'closeText'=>'&times;', 
	)); ?>

	<?php echo $content; ?>

	<div class="footer">
		Copyright &copy; <?php echo date('Y'); ?> by SVGA.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
