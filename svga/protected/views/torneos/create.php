<?php
/* @var $this TorneosController */
/* @var $model Torneos */

$this->breadcrumbs=array(
	'Torneoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Torneos', 'url'=>array('index')),
	array('label'=>'Manage Torneos', 'url'=>array('admin')),
);
?>

<h1>Create Torneos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>