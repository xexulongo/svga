<?php
/* @var $this UsuarisvgaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuarisvgas',
);

$this->menu=array(
	array('label'=>'Create Usuarisvga', 'url'=>array('create')),
	array('label'=>'Manage Usuarisvga', 'url'=>array('admin')),
);
?>

<h1>Usuarisvgas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
