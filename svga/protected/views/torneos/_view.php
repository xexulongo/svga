<?php
/* @var $this TorneosController */
/* @var $data Torneos */
?>

<div class="view">
	<div class="row-fluid">
		<div class="span5">
			<?php $html = array('class'=>'thumbnail');
			if($data->image != NULL and $data->image != 'blanks') echo CHtml::image(Yii::app()->baseUrl .'/images/'.$data->image, $data->image,$html)?>
		</div>
		<div class="span7"><h2><b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
			<?php echo $data->NameAddress; ?><br/>  <small style="margin-top:-40px;"> Haz click en el nombre para ver más información</small></h2>

			<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
				<?php $temporal = $data->type;
				if($temporal ==0)
					echo 'Individual'; 
				if($temporal ==1)
					 echo 'Equipos'; ;?>
			<br />
			<b><?php echo CHtml::encode($data->getAttributeLabel('EnabledType')); ?>:</b>
			<?php  echo CHtml::encode($data->EnabledType)?>
			<br /><br />
		</div>
	</div>
	<hr>

</div>
