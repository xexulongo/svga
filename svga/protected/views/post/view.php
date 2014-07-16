<?php
/* @var $this PostController */
/* @var $model Post */
$this->pageTitle = 'SVGA - ' . $model->title;
$this->metahead = array(
	'title' => $model->title,
);?>

	<?php $this->menu=array(
		array('label'=>'List Post', 'url'=>array('index')),
		array('label'=>'Crear Post', 'url'=>array('create')),
		array('label'=>'Actualizar Post', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Eliminar Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Gestionar Post', 'url'=>array('admin')),
	);?>
<?php 
	$this->renderPartial('_postview', array(
		'data'=>$model,
	)); 
?>
