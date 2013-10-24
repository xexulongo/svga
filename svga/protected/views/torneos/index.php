<?php
/* @var $this TorneosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Torneos',
);


$this->menu=array(
	array('label'=>'Create Torneos', 'url'=>array('create')),
	array('label'=>'Manage Torneos', 'url'=>array('admin')),
);
?>

<h1>Torneos</h1>
<div class="pull-left">
	<a href= <?php echo $this->createURL('torneos/create')?>><div class="btn btn-success"><i class="icon-plus-sign "> </i> Crear Torneo</div></a></div>
<div style="clear:left;"></div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
