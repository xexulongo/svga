<?php
/* @var $this TorneoshasteamsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Torneoshasteams',
);

$this->menu=array(
	array('label'=>'Create Torneoshasteams', 'url'=>array('create')),
	array('label'=>'Manage Torneoshasteams', 'url'=>array('admin')),
);
?>

<h1>Torneoshasteams</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
