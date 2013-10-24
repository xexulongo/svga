<?php
/* @var $this TorneosController */
/* @var $model Torneos */

$this->breadcrumbs=array(
	'Torneos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Torneos', 'url'=>array('index')),
	array('label'=>'Create Torneos', 'url'=>array('create')),
	array('label'=>'Update Torneos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Torneos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Torneos', 'url'=>array('admin')),
);
?>

<h1>Torneo: <?php echo $model->NameAddress; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		array(
			'name'=>'type',
			'value'=>($model->type == 0 ? 'Individual':'Equipos')
		),
		'EnabledType',
	),
)); ?>
