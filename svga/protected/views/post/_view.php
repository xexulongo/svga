<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="text-left">

	<h2><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?></h2>
		<div class="text-left">		
			<i class="icon-pencil"></i>Autor: <b>SVGA</b>
			<i class="icon-calendar"></i><?= Yii::app()->dateFormatter->formatDateTime($data->create_time, 'long', 'short')?> <br />
			<?php if($data->image != NULl) echo CHtml::image(Yii::app()->baseUrl . '/uploads/'. $data->image)?>
			<div class="clear"></div>
			
			<?php echo $data->description;?>
		</div>
	<br />

	
	
	<div class="nav">
		<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	
		<?php switch($data->status){
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

		<i class="icon-tags"></i><b>Tags:</b>
		<?php echo implode('<i class="icon-tag"></i> , ', $data->tagLinks); ?><i class="icon-tag"></i>
		<br/>
		<?php echo CHtml::link('Permalink', $data->url); ?> <i class="icon-globe"></i> |
		<!-- <?php echo CHtml::link("Comments ({$data->commentCount})",$data->url.'#comments'); ?> <i class="icon-comment"></i> | -->
		<b>Última edición: </b> <?php echo date('F j, Y',$data->update_time); ?> <i class="icon-time"></i>
		<a href="<?= Yii::app()->createUrl('post/view',array('id'=>$data->id))?>">
			<div class="pull-right btn">
				<?php 
				$this->widget(
				    'booster.widgets.TbButton',
				    array(
				        'label' => 'Leer más',
				        'context' => 'primary',
				        'icon'=>'plus',
				        'url'=> Yii::app()->createUrl('post/view',array('id'=>$data->id)),
		    		)
				);?>
			</div>
		</a>
	</div>
</div>
<hr>
