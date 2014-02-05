<?php
/* @var $this TorneoshasteamsController */
/* @var $model Torneoshasteams */

$this->breadcrumbs=array(
	'Torneoshasteams'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Torneoshasteams', 'url'=>array('index')),
	array('label'=>'Create Torneoshasteams', 'url'=>array('create')),
	array('label'=>'Update Torneoshasteams', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Torneoshasteams', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Torneoshasteams', 'url'=>array('admin')),
);
?>

<h1>View Torneoshasteams #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Torneos_id',
		'Teams_id',
		'Paid',
	),
)); ?>
