<?php
/* @var $this PostController */
/* @var $model Post */

$this->metahead = array('title'=>'Gallery')
?>

<?php 
echo '<h3>' . CHtml::link('Subir archivos' , array('post/subir'),array('target'=>'_blank', 'class'=>'col-lg-12', 'style'=>'margin-bottom:20px')) . '</h3>';

if(empty($folder)) {
	echo CHtml::openTag('h2') . 'No hay archivos' . CHtml::closeTag('h2');
}
else {
	foreach($folder as $file){  
		echo CHtml::openTag('div', array('class'=>'col-md-3'));         
	    	echo CHtml::openTag('div', array('class'=>'thumbnail'));             
		    	echo CHtml::openTag('a', array('href'=>'/uploads/'.$file,));
		   	 		echo CHtml::image('/uploads/'.$file, $file);
			    echo CHtml::closeTag('a');
				echo CHtml::openTag('pre',array('class'=>'text-center')) . $file .CHtml::closeTag('pre');
		    echo CHtml::closeTag('div');
		echo CHtml::closeTag('div');

	}
}
?>