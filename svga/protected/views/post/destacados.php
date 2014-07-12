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
	<?php $this->widget('booster.widgets.TbCarousel', array(
		  'items'=>array(
		      array(
		        'image'=>Yii::app()->baseUrl . '/images/' . $dataProvider1->data[0]->image,
		        'label'=> $dataProvider1->data[0]->title,
		        'caption'=> $dataProvider1->data[0]->description
		        ),
		      array(
		        'image'=>Yii::app()->baseUrl . '/images/' . $dataProvider1->data[1]->image,
		        'label'=> $dataProvider1->data[1]->title,
		        'caption'=>$dataProvider1->data[1]->description
		      ),
		      array(
		        'image'=>Yii::app()->baseUrl . '/images/' . $dataProvider1->data[2]->image,
		        'label'=>$dataProvider1->data[2]->title,
		        'caption'=>$dataProvider1->data[2]->description
		      ),
		    ),
		));
	?>
	</div>
<div class="clearfix"></div>

<?php $this->breadcrumbs=array(
	'Home',
);?>