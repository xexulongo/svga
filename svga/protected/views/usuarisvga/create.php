<?php
/* @var $this UsuarisvgaController */
/* @var $model Usuarisvga */

$this->breadcrumbs=array(
	'Usuarisvgas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usuarisvga', 'url'=>array('index')),
	array('label'=>'Manage Usuarisvga', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>