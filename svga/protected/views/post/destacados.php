<?php 
$this->menu=array(
	array('label'=>'Crear Post', 'url'=>array('create')),
	array('label'=>'Gestionar Post', 'url'=>array('admin')),
);
?>
<h1 class="text-center">Bienvenido a la página web de SVGA</h1>

<div class="title-cont">
	<div class="wide-bkg-1">
		<div class="title"><h2>Notícias destacadas</h2></div>

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
	</div>
</div>
<div class="clearfix"></div>
	<div class="col-md-10 col-md-offset-1 hidden-xs hidden-sm">  
	<?php 
	 	$items = $this->getdestacadositems($dataProvider1);
		$this->widget('booster.widgets.TbCarousel', array(
			  'items'=>$items,
		));
	?>
	</div>
<div class="clearfix" style="margin-bottom:15px"></div>

<?php $this->breadcrumbs=array(
	'Home',
);?>