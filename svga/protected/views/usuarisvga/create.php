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
<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4">
		<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
</div>
<div class="clearfix"></div>