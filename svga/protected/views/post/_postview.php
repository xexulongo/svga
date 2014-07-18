<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="news">
	<!-- <h2><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?></h2> -->
		<div class="author"><i class="icon-pencil"></i>Autor: <b>SVGA</b></div>
		<div class="timeline"><i class="icon-calendar"> </i><?= Yii::app()->dateFormatter->formatDateTime($data->create_time,'long','short')?></div>
		<div class="image"><?php if($data->image != NULl) echo CHtml::image(Yii::app()->baseUrl . '/images/' . $data->image)?></div>
		<div class="content">
			<?php echo $data->content; ?>
		</div>

		<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
		<?php
		switch($data->status){
			case 1:
				echo CHtml::encode('Borrador  ||'); 
				break;
			case 2:			
				echo CHtml::encode('Publicada ||');
				break; 
			case 3:
				echo CHtml::encode('Archivada ||');
				break;
		}?>

		<div class="tags"><b>Tags:</b>
		<?php foreach($data->tagLinks as $tag){
			echo '<div class="item">' . $tag . '</div>'; 
			} ?>
		</div>
		<?php echo CHtml::link('Permalink', $data->url); ?>
		<div class="timeline">Última modificación: <?php echo date('F j, Y',$data->update_time); ?></div>
</div>
