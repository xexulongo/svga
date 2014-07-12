<?php
/* @var $this SeccionsHasUsuarisController */
/* @var $data SeccionsHasUsuaris */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('Usuari')); ?>:</b> -->
		<h2 class="pull-left"><?php echo CHtml::encode($data->usuari->name); ?></h2>

		

		<div class="pull-left" style="margin-left: 5px;
	margin-top: 28px; font-weight:bold;"><span class="label label-<?= ($data->confirmed) ? 'info' : 'warning' ?>" style="margin-right:5px">
		<?php echo $data->seccio->name?>	</div>

		</span>
		<div class="pull-left">
		<a href="<?= $this->createUrl('enabled', array("id"=>$data->id));?>" style="text-decoration:none"><span class="label label-<?= ($data->confirmed) ? 'success' : 'danger' ?>" style="margin-left: 5px;top: 28px;position: relative;"> <?= ($data->confirmed) ? 'confirmado' : 'no confirmado'; ?> </span></div>
</a>
		<div class="clearfix"></div>

</div>

<hr>