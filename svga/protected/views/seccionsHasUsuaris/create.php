<?php
/* @var $this SeccionsHasUsuarisController */
/* @var $model SeccionsHasUsuaris */

$this->breadcrumbs=array(
	'Seccions Has Usuarises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SeccionsHasUsuaris', 'url'=>array('index')),
	array('label'=>'Manage SeccionsHasUsuaris', 'url'=>array('admin')),
);
?>

<h1>Create SeccionsHasUsuaris</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>