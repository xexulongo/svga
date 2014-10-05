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
    <link rel="icon" type="img/ico" href="<?php echo Yii::app()->baseUrl;?>/images/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'>
    <?php if (!Yii::app()->user->isGuest): ?>
          <meta http-equiv="refresh" content="<?php echo Yii::app()->params['session_timeout'];?>;"/>
    <?php endif; ?>

</head>

<body>
<!-- Header Area -->
<div class="header">
  <!-- Navigation Menu -->
  <nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- LOGO in brand section -->
        <a class="navbar-brand" href="<?= $this->createUrl('post/index') ?>">
          <!-- Logo Text -->
          <img src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" alt="Logo">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="<?php if(EUtils::returnActive('post', 'index')) echo 'active';?>"><a href="<?= $this->createUrl('post/index') ?>">Home</a></li>
           <?php if (Yii::app()->user->isGuest) :?><li class="<?php if(EUtils::returnActive('usuarisvga', 'login')) echo 'active';?>"><a href="<?= $this->createUrl('usuarisvga/login') ?>">Login</a></li>
           <?php else :?><li class="<?php if(EUtils::returnActive('usuarisvga', 'logout')) echo 'active';?>"><a href="<?= $this->createUrl('usuarisvga/logout') ?>">Logout</a></li>
           <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation End -->
</div>
<!-- Header End -->
<!--    <?php
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
-->
<?php if(isset($this->metahead)) Yii::app()->cmetahead->construir($this->metahead); ?>
<?php if(isset($this->slideritems))  {
    $this->widget('booster.widgets.TbCarousel', array(
        'items'=>$this->slideritems,
    ));
} ?>
<?php if(isset($this->destacadosnews)) //Yii::app()->cmetahead->noticias($this->destacadosnews);?>

<div class="container">
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
                'warning' => array('closeText' => '&times'),
                'error' => array('closeText' => '&times')
            ),
    ));?>
    <?php echo $content; ?>
    <div class="clearfix"></div>
</div><!-- page -->
<div class="clearfix"></div>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col">
        <div class="block contact-block">
          <!--@todo: replace with company contact details-->
          <h3>
            Contacta con Nosotros
          </h3>
          <address>
            <ul class="fa-ul">
              <li>
                <abbr title="Email"><i class="fa fa-li fa-envelope"></i></abbr>
                upcsvga@gmail.com
              </li>
              <li>
                <abbr title="Address"><i class="fa fa-li fa-home"></i></abbr>
                 C/ Jordi Girona 1-3 Campus Nord Edifici Ω Despatx 104 08034 Barcelona 
              </li>
            </ul>
          </address>
        </div>
      </div>
      
      <div class="col-md-6 col">
        <div class="block">
          <h3>
            Sobre Nosotros
          </h3>
          <p>SVGA(Series and Video Games Association) és una associació dedicada a la projecció de sèries i organització de tornejos.
SVGA(Series and Video Games Association) es una associación dedicada a la proyección de series i organitzación de torneos.</p>
        </div>
      </div>
      
      <!--<div class="col-md-4 col">
        <div class="block newsletter">
          <h3>
            Newsletter
          </h3>
          <p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>
          @todo: replace with mailchimp code
          <form role="form">
            <div class="input-group input-group-sm">
              <label class="sr-only" for="email-field">Email</label>
              <input type="text" class="form-control" id="email-field" placeholder="Email">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">Go!</button>
              </span>
            </div>
          </form>
        </div>-->
      </div>
    </div>
    
      <!--<div id="toplink">
        <a href="#top" class="top-link" title="Back to top">Back To Top <i class="fa fa-chevron-up"></i></a>
      </div>-->
      <!--@todo: replace with company copyright details-->
      <div class="subfooter text-center">
        <div class="col-md-12">
          Copyright 2014 © SVGA | Web designed by <a target="_blank" href="https://www.facebook.com/zherlonlogistics">José Luis Expósito</a></p>
        </div>
        <!--<div class="col-md-6">
          <ul class="list-inline footer-menu">
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>-->
      </div>
  </div>
</footer>
</body>
</html>
