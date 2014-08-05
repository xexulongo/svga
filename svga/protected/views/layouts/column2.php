<?php $this->beginContent('/layouts/main'); ?>
<div class="row">
    <div class="col-lg-9">
    	<?php echo $content; ?>
        <?php $this->endContent(); ?>
    </div>
    <div class="col-lg-3" id="initial-z">
        <div id="sidebar">
            <?php if(Yii::app()->user->checkAccess('blogger', array(Yii::app()->user->id))) echo Yii::app()->controller->renderFile(Yii::app()->basePath.'/views/layouts/managerMenu.php');  ?>
            <?php if(Yii::app()->user->checkAccess('admin', array(Yii::app()->user->id))) $this->widget('UserMenu'); ?>
        </div>
    </div>
</div>