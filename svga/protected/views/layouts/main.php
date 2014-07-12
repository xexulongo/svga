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
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/custom.css" />
</head>

<body><?php
$this->widget(
    'booster.widgets.TbNavbar',
    array(
        'type' => null, // null or 'inverse'
        'brand' => 'HST2',
        'brandUrl' => Yii::app()->baseUrl,
        'collapse' => true, // requires bootstrap-responsive.css
        'fixed' => false,
        'fluid' => true,
        'items' => array(
            array(
                'class' => 'booster.widgets.TbMenu',
                'type' => 'navbar',
                'items' => array(
                    array('label' => 'Inicio', 'url' => $this->createUrl('post/index'),  'active'=>EUtils::returnActive('post', 'index')),
                    array('label' => 'Sobre Nosotros', 'url' => $this->createUrl('site/about'), 'active'=>EUtils::returnActive('site', 'about')),
                    /*array(
                        'label' => 'Dropdown',
                        'url' => '#',
                        'items' => array(
                            array('label' => 'Action', 'url' => '#'),
                            array('label' => 'Another action', 'url' => '#'),
                            array(
                                'label' => 'Something else here',
                                'url' => '#'
                            ),
                            '---',
                            array('label' => 'NAV HEADER'),
                            array('label' => 'Separated link', 'url' => '#'),
                            array(
                                'label' => 'One more separated link',
                                'url' => '#'
                            ),
                        )
                    ),*/
                ),
            ),
            //'<form class="navbar-form navbar-left" action=""><div class="form-group"><input type="text" class="form-control" placeholder="Search"></div></form>',
            array(
                'class' => 'booster.widgets.TbMenu',
                'type' => 'navbar',
                'htmlOptions' => array('class' => 'pull-right'),
                'items' => array(
                    array('label' => 'Login', 'url' => $this->createUrl('usuarisvga/login'),  'active'=>EUtils::returnActive('usuarisvga', 'login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => $this->createUrl('usuarisvga/logout'),  'active'=>EUtils::returnActive('usuarisvga', 'logout'), 'visible'=>!Yii::app()->user->isGuest),
                    '---',
                ),
            ),
        ),
    )
);
?>

<?php if(isset($this->metahead)) : ?>
    <?php $this->widget('metahead', array(
        'title'=>$this->metahead
        )); 
        endif;?>

<div class="container">
    
    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('booster.widgets.TbBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
            'homeLink' => Chtml::link(Yii::t('HST2', 'Inicio'), $this->createUrl('post/index'))
        )); ?><!-- breadcrumbs -->
    <?php endif?>

    <?php $this->widget('booster.widgets.TbAlert', array(
            'fade' => true,
            'closeText' => '&times;', // false equals no close link
            'events' => array(),
            'htmlOptions' => array(),
            'userComponentId' => 'user',
            'alerts' => array( // configurations per alert type
                // success, info, warning, error or danger
                'success' => array('closeText' => '&times;'),
                'info', // you don't need to specify full config
                'warning' => array('closeText' => false),
                'error' => array('closeText' => 'AAARGHH!!')
            ),
    ));?>
    
    <?php echo $content; ?>


	<div class="footer">
		Copyright &copy; <?php echo date('Y'); ?> by HST2.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
