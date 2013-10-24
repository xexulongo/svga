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
    <?php Yii::app()->bootstrap->register(); ?>    
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
</head>

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <div id="sidebar">
        <?php if(Yii::app()->user->getName()=='admin') $this->widget('UserMenu'); ?>

<!--
        <?php $this->widget('TagCloud', array(
          'maxTags'=>Yii::app()->params['tagCloudCount'],
        )); ?>
-->
          <div class ="headline text-center" style="margin-bottom:-20px"><h4><b>SÍGUENOS EN</b></h4></div>
        <ul style="list-style: none;">
          <li><a href="http://www.twitch.tv/svgaupc" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/images/twitch.png"></img></a></li>
          <li style="margin-top: -30px;"><a href="https://www.facebook.com/svgaupc" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/images/facebook.png"></img></a></li>
        </ul>
        <a class="twitter-timeline" href="https://twitter.com/SVGAupc" data-widget-id="381027193351983104">Tweets por @SVGAupc</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!--         <?php $this->widget('RecentComments', array(
          'maxComments'=>Yii::app()->params['recentCommentCount'],
        )); ?> -->
        
      
    
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
<div class="container">

</div>
    <div class="footer">
      <div class="container">
        <div class="row-fluid">
          <div class="headline text-center"><h3>Recientes footer</h3></div>
          <ul class="thumbnails">
          <?php 
            $imgCssClass= 'thumbnail-style thumbnail-kenburn';
            $thumbCssClass= 'thumbnail-img';
            $overCssClass= 'overflow-hidden';
            $liCssClass= 'span3';

            $filepath = '/home/xexu/yii/gallery/';
            foreach($filelist as $key => $value)
            {
              echo CHtml::openTag('li',array('class'=>$liCssClass))."\n";
              echo CHtml::openTag('div',array('class'=>$imgCssClass))."\n";
              echo CHtml::openTag('div',array('class'=>$thumbCssClass))."\n";
              echo CHtml::openTag('div',array('class'=>$overCssClass))."\n";
              echo CHtml::image(Yii::app()->getBaseUrl().'/gallery/' . $value);
              echo "<a class='btn-more hover-effect' href='#'>Leer más +</a>";     
              echo "</a></div></div></div></li>";
            }
            ?>
          </ul>
        </div>
     </div>
   </div>

	<div class="copyright">
        <div class="container">
            <div class="row-fluid">
        		<div class= "span7"><p>Copyright &copy; <?php echo date('Y'); ?> by SVGA. || All Rights Reserved.</p></div>
        		<div class="span5">
        			<?= CHtml::link(Yii::t('SVGA', 'Home'), $this->createUrl('post/index'))?> |
        			<?= CHtml::link(Yii::t('SVGA', 'Contacte'), $this->createUrl('site/contact'))?> |
        			<?= CHtml::link(Yii::t('SVGA', 'Política de privacitat'), $this->createUrl('site/privacy'))?> |
        			<?= CHtml::link(Yii::t('dSVGA', 'Quant a aquest web'), $this->createUrl('site/about'))?>
	          </div>
           </div><!-- footer -->
       </div>
   </div>

