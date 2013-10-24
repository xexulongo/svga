<?php
/* @var $this TeamsController */
/* @var $model Teams */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Teams', 'url'=>array('index')),
	array('label'=>'Manage Teams', 'url'=>array('admin')),
);
?>

<h1>Crea tu Equipo!</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
