<?php 
$this->breadcrumbs=array(
	'Home',
);
$this->menu=array(
	array('label'=>'Crear Post', 'url'=>array('create')),
	array('label'=>'Gestionar Post', 'url'=>array('admin')),
);
?>
<h1 >Bienvenido a la página web de SVGA</h1>
<div class="headline text-center"><h3>Notícias destacadas</h3></div>

<div class="featured-covers">
	<div class="featured-covers-inner">
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider1,
	'summaryText'=>'', 
	'itemView'=>'_destacadosview',
));
?>
	</div>
</div>
<hr>