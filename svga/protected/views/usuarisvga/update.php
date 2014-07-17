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

<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>    
	</div>
</div>
<div class="clearfix"></div>