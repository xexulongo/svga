<?php
/* @var $this SeccionsHasUsuarisController */
/* @var $model SeccionsHasUsuaris */

$this->breadcrumbs=array(
	'Seccions Has Usuarises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SeccionsHasUsuaris', 'url'=>array('index')),
	array('label'=>'Create SeccionsHasUsuaris', 'url'=>array('create')),
	array('label'=>'View SeccionsHasUsuaris', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SeccionsHasUsuaris', 'url'=>array('admin')),
);
?>

<h1>Update SeccionsHasUsuaris <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>