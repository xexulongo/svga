<?php
/* @var $this PostController */
/* @var $model Post */
$this->pageTitle = 'SVGA - ' . $model->title;
$this->breadcrumbs=array(
	'Home'=>array('index'),
	$model->title,
);?>

	<?php $this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Crear Post', 'url'=>array('create')),
	array('label'=>'Actualizar Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Post', 'url'=>array('admin')),
	);?>

<?php 
	$this->renderPartial('_postview', array(
	'data'=>$model,
)); 
?>

<script type="text/javascript">
$(".btn").css({"display": "none"});
</script>
<div class="container-fluid">
<div id="comments">
    <?php if($model->commentCount>=1): ?>
        <h3>
            <?php echo $model->commentCount . ' comment(s)'; ?>
        </h3>
 
        <?php $this->renderPartial('_comments',array(
            'post'=>$model,
            'comments'=>$model->comments,
        )); ?>
    <?php endif; ?>

<hr>

	<div id="comments">
	    <h3>Deja un comentario</h3>
	 
	    <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
	        <div class="flash-success">
	            <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
	        </div>
	    <?php else: ?>
	        <?php $this->renderPartial('/comment/_form',array(
	            'model'=>$comment,
	        )); ?>
	    <?php endif; ?>

	</div>
</div>
