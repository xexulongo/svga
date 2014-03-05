<?php
/* @var $this TeamsController */
/* @var $model Teams */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Teams', 'url'=>array('index')),
	array('label'=>'Create Teams', 'url'=>array('create')),
	array('label'=>'Update Teams', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Teams', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Teams', 'url'=>array('admin')),
);
?>

<h1>Ver equipo: <?=  CHtml::link($model->name, $this->createUrl('teams/view', array('id'=>$model->id))) ?></h1>
	<?php echo var_dump($model); ?>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'profile',
		array(
			'label'=>'Torneos Asignados',
			'type' => 'raw',
			'value'=> $model->TorneosNames,
		),
	),

)); ?>



<hr>
