<?php
/* @var $this SeccionsHasUsuarisController */
/* @var $data SeccionsHasUsuaris */
?>

<div class="page-header" style="border: none !important">

	<div class="pull-left">
		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	</div>
	<div class="pull-left">
		<h1><?php echo CHtml::encode($data->usuari->name); ?></h1>
	</div>
	<div class="pull-left" style="margin-left: 5px;	margin-top: 21px; font-weight:bold;">
		<h4><span class="label label-<?= ($data->seccio->name == "web") ? 'warning' : 'primary' ?>" style="margin-right:5px">
			<?= $data->seccio->name ?>	
		</span></h4>
	</div>

	<div class="pull-left">
		<a href="<?= $this->createUrl('enabled', array("id"=>$data->id));?>" style="text-decoration:none">
			<h4><span class="label label-<?= ($data->confirmed) ? 'success' : 'danger' ?>" style="margin-left: 5px;top: 21px;position: relative;"> <?= ($data->confirmed) ? 'confirmado' : 'no confirmado'; ?> </span></h4>
		</a>
	</div>
</div>
<div class="clearfix"></div>

<hr>