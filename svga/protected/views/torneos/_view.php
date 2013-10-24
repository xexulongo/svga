<?php
/* @var $this TorneosController */
/* @var $data Torneos */
?>

<div class="view">

	<h2><b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo $data->NameAddress; ?></h2>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
		<?php $temporal = $data->type;
		if($temporal ==0)
			echo 'Individual'; 
		if($temporal ==1)
			 echo 'Equipos'; ;?>
	<br /><hr>


</div>
