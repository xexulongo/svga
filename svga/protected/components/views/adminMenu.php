<ul style="list-style: none;">
	<li>  <?php echo CHtml::link(' <i class="icon-plus-sign"></i> Crear Post',array('post/create')); ?></li>
	<li>  <?php echo CHtml::link(' <i class="icon-list"></i> Gestionar Posts',array('post/admin')); ?> </li></li>
	<li>  <?php echo CHtml::link(' <i class="icon-ok"></i> Aprobar Commentarios',array('comment/index')) . ' (' . Comment::model()->pendingCommentCount . ')'; ?></li>
	<li> <?php echo CHtml::link('Administrar usuarios',array('usuarisvga/admin')); ?></li>
	<!-- <li> <?php echo CHtml::link('Gestor de archivos',array('elfinder/index')); ?></li> -->
</ul>