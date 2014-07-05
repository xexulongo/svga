<?php
/* @var $this TorneoshasteamsController */
/* @var $model Torneoshasteams */

$this->breadcrumbs=array(
	'Torneoshasteams'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Torneoshasteams', 'url'=>array('index')),
	array('label'=>'Create Torneoshasteams', 'url'=>array('create')),
	array('label'=>'View Torneoshasteams', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Torneoshasteams', 'url'=>array('admin')),
);
?>

<h1>Update Torneoshasteams <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>