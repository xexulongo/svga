<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="news">
		<div id="information">
			<div class="author"><i class="fa fa-pencil"></i><p>Autor: <b>SVGA</b></p></div>
			<div class="timeline"><i class="fa fa-calendar"></i><p><?= Yii::app()->dateFormatter->formatDateTime($data->create_time,'long','short')?></p></div>
			<div class="fb-like pull-right" style="margin-top:5px;" data-href="<?= $data->url?>" data-width="100%" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			<div class="clearfix"></div>
		</div>
		
		<div class="image text-center"><?php if($data->image) echo CHtml::image(Yii::app()->baseUrl .'/uploads/'. $data->image)?></div>
		<div class="content">
			<?php echo $data->content; ?>
		</div>

		<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
		<?php
		switch($data->status){
			case 1:
				echo CHtml::encode('Borrador  ||'); 
				break;
			case 2:			
				echo CHtml::encode('Publicada ||');
				break; 
			case 3:
				echo CHtml::encode('Archivada ||');
				break;
		}?>

		<div class="tags"><b>Tags:</b>
		<?php foreach($data->tagLinks as $tag){
			echo '<div class="item">' . $tag . '</div>'; 
			} ?>
		</div>
		<?php echo CHtml::link('Permalink', $data->url); ?>
		<div class="timeline">Última modificación: <?php echo date('F j, Y',$data->update_time); ?></div>
		<div class="fb-comments" data-href="http://svga.upc.es/svga-pre/svga/svga/index.php/post/<?= $data->id?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&appId=192095734308514&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&appId=192095734308514&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>