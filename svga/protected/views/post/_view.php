<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="text-left">

	<h2><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?></h2>
		<div class="text-left">		
			<i class="icon-pencil"></i>Autor: <b><?php echo $data->author->username ?></b>
			<i class="icon-calendar"></i><?= Yii::app()->dateFormatter->formatDateTime($data->create_time, 'long', 'short')?> <br />
			<div class="clear"><?php if($data->image != NULL and $data->image != 'blanks') echo CHtml::image(Yii::app()->baseUrl . '/images/' . $data->image)?></div>
			
			<?php echo $data->description;?>
		</div>
	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b> -->

	<br />

	
	
	<div class="nav">
		<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	
		<?php $temporal = $data->status;
		if($temporal ==1)
			echo 'Borrador  ||'; 
		if($temporal ==2)
			 echo 'Publicada<i class="icon-eye-open"></i> || '; 
		if($temporal ==3)
			echo 'Archivada ||';?>

		<i class="icon-tags"></i><b>Tags:</b>
		<?php echo implode('<i class="icon-tag"></i> , ', $data->tagLinks); ?><i class="icon-tag"></i>
		<br/>
		<?php echo CHtml::link('Permalink', $data->url); ?> <i class="icon-globe"></i> |
		<?php echo CHtml::link("Comments ({$data->commentCount})",$data->url.'#comments'); ?> <i class="icon-comment"></i> |
		<b>Última edición: </b> <?php echo date('F j, Y',$data->update_time); ?> <i class="icon-time"></i>
		<div class="pull-right btn"><b>	<?php echo CHtml::link(CHtml::encode('Leer más'), array('view', 'id'=>$data->id)); ?></b></div>
	</div>
</div>
<hr>
