<?php
/* @var $this UsuarisvgaController */
/* @var $model Usuarisvga */

$this->breadcrumbs=array(
	'Usuarisvgas'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Usuarisvga', 'url'=>array('index')),
	array('label'=>'Create Usuarisvga', 'url'=>array('create')),
	array('label'=>'Update Usuarisvga', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Usuarisvga', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuarisvga', 'url'=>array('admin')),
);
?>

<h1>Veure usuari <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'username',
		'email',
	),
)); ?>
