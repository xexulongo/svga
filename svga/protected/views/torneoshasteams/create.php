<?php
/* @var $this TorneoshasteamsController */
/* @var $model Torneoshasteams */

$this->breadcrumbs=array(
	'Torneoshasteams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Torneoshasteams', 'url'=>array('index')),
	array('label'=>'Manage Torneoshasteams', 'url'=>array('admin')),
);
?>

<h1>Create Torneoshasteams</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>