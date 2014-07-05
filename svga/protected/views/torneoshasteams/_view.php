<?php
/* @var $this TorneoshasteamsController */
/* @var $data Torneoshasteams */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Torneos_id')); ?>:</b>
	<?php echo CHtml::encode($data->Torneos_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Teams_id')); ?>:</b>
	<?php echo CHtml::encode($data->Teams_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Paid')); ?>:</b>
	<?php echo CHtml::encode($data->Paid); ?>
	<br />


</div>