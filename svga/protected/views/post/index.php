<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Crear Post', 'url'=>array('create')),
	array('label'=>'Gestionar Post', 'url'=>array('admin')),
);
?>
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<h1 class="text-center">Bienvenido a la página web de SVGA</h1>

<div class="title"><h2>Notícias destacadas</h2></div>

<div class="featured-covers">
  <div class="featured-covers-inner">
    <?php $this->widget('zii.widgets.CListView', array(
      'dataProvider'=>$dataProvider1,
      'summaryText'=>'', 
      'itemView'=>'_destacadosview',
    ));
    ?>
  </div>
</div>
<div class="clearfix"></div>
  <div class="col-lg-12 hidden-xs hidden-sm">  
  <?php 
  ?>
  </div>
<div class="clearfix" style="margin-bottom:15px;"></div>
<?php $this->widget('zii.widgets.CListView', array(
  'dataProvider'=>$dataProvider2,
  'itemView'=>'_view',
  'sortableAttributes'=>array(
          'title'=>'Título',
          'create_time'=>'Fecha',
      ),
));
?>