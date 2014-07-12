<?php
/* @var $this UsuarisvgaController */
/* @var $model Usuarisvga */

$this->breadcrumbs=array(
	'Usuarisvgas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Usuarisvga', 'url'=>array('index')),
	array('label'=>'Create Usuarisvga', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarisvga-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestión de Usuarios</h1>

<p>
Puedes utilizar comparadores (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de busqueda.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget(
    'booster.widgets.TbGridView',
    array(
        'filter' => $model,
        'type' => 'striped condensed bordered',
        // 40px is the height of the main navigation at bootstrap
        'dataProvider' => $model->search(),
        'template' => "{items}",
        'columns' => array(
			'id',
			'activated',
			'email_activated',
			'name',
			'username',
			'email',
			'created',
			'last_login',
			array(
			'class'=>'booster.widgets.TbButtonColumn',
		),
    	)
	));
?>

