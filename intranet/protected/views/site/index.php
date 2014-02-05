<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="hero-unit">
    <h1>Benvingut, anònim!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <?= CHtml::link(Yii::t('SVGA', 'Login'), $this->createUrl('site/login'), array('class'=>'btn btn-primary'))?>
  </div>