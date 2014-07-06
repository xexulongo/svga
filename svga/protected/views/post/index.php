<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Home',
);

$this->menu=array(
	array('label'=>'Crear Post', 'url'=>array('create')),
	array('label'=>'Gestionar Post', 'url'=>array('admin')),
);
?>
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <div id="sidebar">
        <?php if(Yii::app()->user->checkAccess('admin', array(Yii::app()->user->id)))$this->widget('UserMenu'); ?>
          <a class="twitter-timeline" href="https://twitter.com/SVGAupc" data-widget-id="381027193351983104">Tweets por @SVGAupc</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
    </div>
    <div class="span10">
      <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider2,
        'itemView'=>'_view',
        'sortableAttributes'=>array(
                'title'=>'Título',
                'create_time'=>'Fecha',
            ),
      ));
      ?>
    </div>
  </div>
</div>

	<div class="copyright">
        <div class="container">
            <div class="row-fluid">
        		<div class= "span7"><p>Copyright &copy; <?php echo date('Y'); ?> by HST2. || All Rights Reserved.</p></div>
        		<div class="span5">
        			<?= CHtml::link(Yii::t('HST2', 'Home'), $this->createUrl('post/index'))?> |
        			<?= CHtml::link(Yii::t('HST2', 'Contacte'), $this->createUrl('site/contact'))?> |
        			<?= CHtml::link(Yii::t('HST2', 'Política de privacitat'), $this->createUrl('site/privacy'))?> |
        			<?= CHtml::link(Yii::t('HST2', 'Quant a aquest web'), $this->createUrl('site/about'))?>
	          </div>
           </div><!-- footer -->
       </div>
   </div>

