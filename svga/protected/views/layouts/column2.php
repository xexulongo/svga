<?php $this->beginContent('/layouts/main'); ?>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <div id="sidebar">
        <?php if(Yii::app()->user->getName()=='admin') $this->widget('UserMenu'); ?>

        <div class ="siguenos text-center">
          <h4><b>SÍGUENOS EN</b></h4>
          <ul style="list-style: none;">
            <li><a href="http://www.twitch.tv/svgaupc" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/images/twitch.png"></img></a></li>
            <li style="margin-top: -30px;"><a href="https://www.facebook.com/svgaupc" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/images/facebook.png"></img></a></li>
          </ul>
        </div>
        <a class="twitter-timeline" href="https://twitter.com/SVGAupc" data-widget-id="381027193351983104">Tweets por @SVGAupc</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
    </div>
    <div class="span10">
				<?php echo $content; ?>
				<?php $this->endContent(); ?>
	  </div>
	</div>
</div>
