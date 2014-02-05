<?php
/* @var $this TorneosController */
/* @var $model Torneos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'torneos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>



		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->dropDownList($model,'type',array(0=>'Individual',1=>'Equipos')); ?>
		<?php echo $form->error($model,'type'); ?>

<input id="fileupload" type="file" name="files[]" data-url="server/php/" multiple>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?= Yii::app()->baseUrl;?>/js/jquery.ui.widget.js"></script>
<script src="<?= Yii::app()->baseUrl;?>/js/jquery.iframe-transport.js"></script>
<script src="<?= Yii::app()->baseUrl;?>/js/jquery.fileupload.js"></script>
<script>
$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo(document.body);
            });
        }
    });
});
$('#fileupload').fileupload({
    /* ... */
    progressall: function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .bar').css(
            'width',
            progress + '%'
        );
    }
});
</script>



<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array("class"=>"btn btn-info")); ?>


<?php $this->endWidget(); ?>

</div><!-- form -->
