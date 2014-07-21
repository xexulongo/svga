<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
$this->metahead = array('title'=>'Uploader');
?>


	<div id="uploader">
	<h4>El tamany màxim dels arxius és de 2MB, s'admeten arxius gif, jpeg i png.</h4>
	<h4>Si la imatge supera els 2MB es recomana l'ús de la web <a target='_blank' href="http://www.webresizer.com/resizer/">Resizer</a></h4>
		<?php $this->widget('booster.widgets.TbFileUpload', array(
		    'url' => $this->createUrl('post/upload'),
		    'model' => $image,
		    'attribute' => 'picture', // see the attribute?
		    'multiple' => true,
		    'options' => array(
			    'maxFileSize' => 2000000,
			    'acceptFileTypes' => 'js:/(\.|\/)(gif|jpe?g|png)$/i',
			)
		)); ?>
	</div>

