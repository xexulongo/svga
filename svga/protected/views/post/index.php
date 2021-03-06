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
<!--
<div class="featured-covers">
  <div class="featured-covers-inner">
    <?php $this->widget('zii.widgets.CListView', array(
      'dataProvider'=>$dataProvider1,
      'summaryText'=>'', 
      'itemView'=>'_destacadosview',
    ));
    ?>
  </div>
</div>-->
<div class="clearfix" style="margin-bottom:45px;"></div>
<?php $this->widget('zii.widgets.CListView', array(
  'dataProvider'=>$dataProvider2,
  'itemView'=>'_view',
  'sortableAttributes'=>array(
          'title'=>'Título',
          'create_time'=>'Fecha',
      ),
));
?>