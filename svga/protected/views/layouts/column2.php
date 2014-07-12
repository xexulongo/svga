<?php $this->beginContent('/layouts/main'); ?>
<div class="container-fluid">
  <div class="row-fluid">
    <?php $this->widget('booster.widgets.TbAlert', array(
            'fade' => true,
            'closeText' => '&times;', // false equals no close link
            'events' => array(),
            'htmlOptions' => array(),
            'userComponentId' => 'user',
            'alerts' => array( // configurations per alert type
                // success, info, warning, error or danger
                'success' => array('closeText' => '&times;'),
                'info'=> array('closeText' => '&times;'),
                'warning' => array('closeText' => '&times;'),
                'error' => array('closeText' => '&times;'),
            ),
    ));?>
    <div class="col-lg-9">
				<?php echo $content; ?>
				<?php $this->endContent(); ?>
	  </div>
        <div class="col-lg-3">
      <div id="sidebar">
        <?php if(Yii::app()->user->getName()=='admin') $this->widget('UserMenu'); ?>
        <a class="twitter-timeline" href="https://twitter.com/SVGAupc" data-widget-id="381027193351983104">Tweets por @SVGAupc</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
    </div>
	</div>
</div>
