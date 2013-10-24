<ul>
	<?php foreach($this->getRecentComments() as $comment): ?>
	<li><i class="icon-user"></i> <?php echo $comment->authorLink; ?> en
		<?php echo CHtml::link($comment->post->title, $comment->getUrl()); ?>
	</li>
	<?php endforeach; ?>
</ul>