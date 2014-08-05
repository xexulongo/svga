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
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap-social.css" />
    <link rel="icon" type="img/ico" href="<?php echo Yii::app()->baseUrl;?>/images/favicon.ico">

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

<?php if(isset($this->metahead)) Yii::app()->cmetahead->construir($this->metahead); ?>
<?php if(isset($this->slideritems))  {
    $this->widget('booster.widgets.TbCarousel', array(
        'items'=>$this->slideritems,
    ));
} ?>
<?php if(isset($this->destacadosnews)) //Yii::app()->cmetahead->noticias($this->destacadosnews);?>

<div class="container">
    <?php echo 'mierda' . Yii::app()->user->checkSeccio('hst') ?>
    <?php if(!Yii::app()->user->isGuest) {
        echo 'mierder' . Yii::app()->user->checkAccess('blogger', array(Yii::app()->user->id));
        }
        ?>
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
    <div class="fixedsocial" id="second-z">
        <a class="btn btn-social-icon btn-twitter" id="twitter"> 
            <i class="fa fa-twitter"></i> 
        </a>
        <a class="btn btn-social-icon btn-facebook" id="facebook" href="https://www.facebook.com/hitstuntournament">
            <i class="fa fa-facebook"></i>
        </a>
        <a class="btn btn-social-icon btn-facebook" id="facebook">
            <i class="fa fa-facebook"></i>
        </a>
    </div>
    <?php echo $content; ?>
</div><!-- page --></div>

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col">
        <div class="block contact-block">
          <!--@todo: replace with company contact details-->
          <h3>
            Contact Us
          </h3>
          <address>
            <ul class="fa-ul">
              <li>
                <abbr title="Phone"><i class="fa fa-li fa-phone"></i></abbr>
                019223 8092344
              </li>
              <li>
                <abbr title="Email"><i class="fa fa-li fa-envelope"></i></abbr>
                info@appstraptheme.com
              </li>
              <li>
                <abbr title="Address"><i class="fa fa-li fa-home"></i></abbr>
                Sunshine House, Sunville. SUN12 8LU.
              </li>
            </ul>
          </address>
        </div>
      </div>
      
      <div class="col-md-5 col">
        <div class="block">
          <h3>
            About Us
          </h3>
          <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal &amp; web templates!</p>
        </div>
      </div>
      
      <div class="col-md-4 col">
        <div class="block newsletter">
          <h3>
            Newsletter
          </h3>
          <p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>
          <!--@todo: replace with mailchimp code-->
          <form role="form">
            <div class="input-group input-group-sm">
              <label class="sr-only" for="email-field">Email</label>
              <input type="text" class="form-control" id="email-field" placeholder="Email">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">Go!</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div id="toplink">
        <a href="#top" class="top-link" title="Back to top">Back To Top <i class="fa fa-chevron-up"></i></a>
      </div>
      <!--@todo: replace with company copyright details-->
      <div class="subfooter">
        <div class="col-md-6">
          <p>Site template by <a href="appstraptheme.com">AppStrap</a> | Copyright 2012 © AppStrap</p>
        </div>
        <div class="col-md-6">
          <ul class="list-inline footer-menu">
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
