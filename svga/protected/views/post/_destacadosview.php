<?php
/* @var $this PostController */
/* @var $data Post */
?>
	<article class="post type-post status-publish format-standard hentry category-news cover-left">

		<a title=<?php echo $data->title?> href=<?php echo $data->url ?>><?php if($data->image != NULL and $data->image != 'blanks') echo CHtml::image(Yii::app()->baseUrl . '/images/' . $data->image, $data->image)?></a>
		
		<header class="shadow">

			<p class ="meta"><?php echo CHtml::link('News', array('index'))?> - <time datetime"2013-09-18" pubdate=""><?= Yii::app()->dateFormatter->formatDateTime($data->create_time, 'long', 'short')?></time></p>
			
			<h1 class="h2"><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?></h1>
			
		</header>
	</article>
