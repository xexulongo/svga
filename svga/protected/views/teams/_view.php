<?php
/* @var $this TeamsController */
/* @var $data Teams */
?>

<div class="view">

<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
-->

	<h2><b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo $data->NameAddress; ?><br/>  <small style="margin-top:-40px;"> Haz click en el nombre para ver más información</small></h2>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profile')); ?>:</b>
	<?php echo CHtml::encode($data->profile); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('TorneosNames')); ?>:</b>
	<?php echo ((!$data->TorneosNames == NULL ? ($data->TorneosNames) : 'Ningun torneo asignado')) ; ?>
	<br />
	
	<hr>


</div>
