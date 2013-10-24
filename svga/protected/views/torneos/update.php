<?php
/* @var $this TorneosController */
/* @var $model Torneos */

$this->breadcrumbs=array(
	'Torneoses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Torneos', 'url'=>array('index')),
	array('label'=>'Create Torneos', 'url'=>array('create')),
	array('label'=>'View Torneos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Torneos', 'url'=>array('admin')),
);
?>

<h1>Update Torneos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>