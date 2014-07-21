<?php $this->beginContent('/layouts/main'); ?>
<div class="row">
    <div class="col-lg-9">
    	<?php echo $content; ?>
    </div>
    <div class="col-lg-3" id="initial-z">
        <div id="sidebar">
            <?php if(Yii::app()->user->checkAccess('admin', array(Yii::app()->user->id))) echo Yii::app()->controller->renderFile(Yii::app()->basePath.'/views/layouts/managerMenu.php')  ?>
            <?php if(Yii::app()->user->checkAccess('admin', array(Yii::app()->user->id))) $this->widget('UserMenu'); ?>
            <a class="twitter-timeline" href="https://twitter.com/SVGAupc" data-widget-id="381027193351983104">Tweets por @SVGAupc</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </div>
            <?php $this->endContent(); ?>
<div>