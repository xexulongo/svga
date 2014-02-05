<?php
/* @var $this UsuarisvgaController */
/* @var $model Usuarisvga */

$this->breadcrumbs=array(
	'Usuarisvgas'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Usuarisvga', 'url'=>array('index')),
	array('label'=>'Create Usuarisvga', 'url'=>array('create')),
	array('label'=>'View Usuarisvga', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Usuarisvga', 'url'=>array('admin')),
);
?>

<h1>Update Usuarisvga <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>