<?php
/* @var $this SeccionsHasUsuarisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seccions Has Usuarises',
);

$this->menu=array(
	array('label'=>'Create SeccionsHasUsuaris', 'url'=>array('create')),
	array('label'=>'Manage SeccionsHasUsuaris', 'url'=>array('admin')),
);
?>

<h1>Seccions Has Usuarises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
