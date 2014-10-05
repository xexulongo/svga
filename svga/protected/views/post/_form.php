<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
    	'type' => 'horizontal',
        'htmlOptions' => array('class' => 'well'), // for inset effect
    )
); ?>

	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/upclick-min.js"></script>

	<p class="note">Todos los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model,null,null,array("class"=>"alert alert-error")); ?>

		<?php echo $form->textFieldGroup(
			$model,
			'title',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-lg-9',
				),
			)
		); ?>

		<?php echo $form->textAreaGroup(
			$model,
			'description',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-lg-9',
				),
				'widgetOptions' => array(
					'htmlOptions' => array('rows' => 3),
				)
			)
		); ?>
		

		<?php echo $form->ckEditorGroup(
			$model,
			'content',
			array(
		   		'wrapperHtmlOptions' => array(
					 'class' => 'col-lg-9', 
				),
				'widgetOptions' => array(
					'editorOptions' => array(
						'fullpage' => 'js:true',
						/* 'width' => '640', */
						/* 'resize_maxWidth' => '640', */
						/* 'resize_minWidth' => '320'*/
					)
				)
			)
		); ?>

		<?php echo $form->textFieldGroup(
			$model,
			'tags',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-lg-9',
				),
			)
		); ?>

		<?php echo $form->textFieldGroup(
			$model,
			'image',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-lg-9',
					'id'=>'image_from_list',
				),
			)
		); ?>
		<?php $collapse = $this->beginWidget('booster.widgets.TbCollapse'); ?>
		<div class="panel-group" id="accordion">
  			<div class="panel panel-default">
    			<div class="panel-heading">
     				<h1 style="font-size: 26px;text-align: center;"class="panel-title">
        				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          					Haz click aqui para elegir la imagen del post
        				</a>
      				</h1>
   			 	</div>
		    	<div id="collapseOne" class="panel-collapse collapse">
		      		<div class="panel-body">
						<div id="image_container">
					    	<?php if(isset($images)){
					    		echo '<h3 class="text-center"><b>Haz click en la imagen que quieres que aparezca como cabecera</b></h3>';
					    		foreach($images as $image) echo CHtml::image(Yii::app()->baseUrl . '/uploads/'.$image, $image, array('id'=>$image));
				    		}?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $this->endWidget(); ?>

		<?php echo $form->switchGroup($model, 'destacado',
			array(
				'widgetOptions' => array(
					'events'=>array(
						'switchChange'=>'js:function(event, state) {
						  console.log(this); // DOM element
						  console.log(event); // jQuery event
						  console.log(state); // true | false
						}'
					),
					'options' => array(
			            'size' => 'large', //null, 'mini', 'small', 'normal', 'large
			            'onColor' => 'success', // 'primary', 'info', 'success', 'warning', 'danger', 'default'
			            'offColor' => 'danger',  // 'primary', 'info', 'success', 'warning', 'danger', 'default'
        			),
				)
			)
		); ?>
		<?php echo $form->dropDownListGroup(
			$model,
			'status',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-lg-9',
				),
				'widgetOptions' => array(
					'data' => array('1'=>'Borrador', '2'=>'Publicado','3'=>'Archivado'),
					'htmlOptions' => array(),
				)
			)
		); ?>
	
	<?php $this->widget(
			'booster.widgets.TbButton',
			array(
				'buttonType' => 'submit',
				'context' => 'primary',
				'label' => 'Guardar'
			)
	); ?>

</div><!-- form -->

<?php $this->endWidget(); ?>

<?php Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/imagepicker.js');
?>