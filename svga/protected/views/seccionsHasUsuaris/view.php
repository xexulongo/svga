<?php
/* @var $this SeccionsHasUsuarisController */
/* @var $model SeccionsHasUsuaris */

$this->breadcrumbs=array(
	'Seccions Has Usuarises'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SeccionsHasUsuaris', 'url'=>array('index')),
	array('label'=>'Create SeccionsHasUsuaris', 'url'=>array('create')),
	array('label'=>'Update SeccionsHasUsuaris', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SeccionsHasUsuaris', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SeccionsHasUsuaris', 'url'=>array('admin')),
);
?>

<h1>View SeccionsHasUsuaris #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Seccioname',
		/*'Seccions_id',
		'Usuaris_id',*/
		'Username',
		'confirmed',
	),
)); ?>
