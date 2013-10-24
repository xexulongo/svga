<?php
/* @var $this TeamsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Teams',
);

$this->menu=array(
	array('label'=>'Create Teams', 'url'=>array('create')),
	array('label'=>'Manage Teams', 'url'=>array('admin')),
);
?>

<h1>Equipos</h1> 
<div class="pull-left">
	<a href= <?php echo $this->createURL('teams/create')?>><div class="btn btn-success"><i class="icon-plus-sign"> </i> Crear Equipo</div></a></div>
<div style="clear:left;"></div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array(
              'id'=>'Creación',
              'name'=>'Nombre',
	  ),
)); ?>
