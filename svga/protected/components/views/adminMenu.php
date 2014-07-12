<!--
<ul class="nav nav-pills nav-stacked" style="text-align:center;">
	<li <?php  if( EUtils::returnActive('post','crear') ) echo 'class = active'?> >  
	<?php echo CHtml::link('<i class="icon-plus-sign"></i> Crear Post',array('post/create')); ?></li>
	<li <?php  if( EUtils::returnActive('post','crear') ) echo 'class = active'?> >  
	<?php echo CHtml::link('<i class="icon-list"></i> Gestionar Posts',array('post/admin')); ?> </li></li>
	<li <?php  if( EUtils::returnActive('comments','index') ) echo 'class = active'?> >  
	<?php echo CHtml::link('<i class="icon-ok"></i> Aprobar Commentarios<span class="badge">' . Comment::model()->pendingCommentCount . '</span>',array('comment/index')); ?></li>
	<li <?php  if( EUtils::returnActive('usuarisvga','admin') ) echo 'class = active'?> >  
	<?php echo CHtml::link('Administrar usuarios<span class="badge">' . Usuarisvga::model()->pendingUsuarisCount . '</span>',array('usuarisvga/admin')); ?></li>
	<li <?php  if( EUtils::returnActive('seccionshasusuaris','admin') ) echo 'class = active'?> >  
	<?php echo CHtml::link('Administrar secciones<span class="badge">' . SeccionsHasUsuaris::model()->pendingSeccionsCount . '</span>',array('SeccionsHasUsuaris/index')); ?></li>

	<li> <?php echo CHtml::link('Gestor de archivos',array('elfinder/index')); ?></li>
</ul>
-->

<?php $this->widget(
    'booster.widgets.TbPanel',
    array(
        'title' => 'Admin Box',
    	'context' => 'primary',
        'headerIcon' => 'cog',
        'content' => CHtml::link('<i class="icon-plus-sign"></i> Crear Post',array('post/create')) . '<br><br>' .  
        CHtml::link('<i class="icon-list"></i> Gestionar Posts',array('post/admin')) . '<br><br>' . 
        CHtml::link('Administrar usuarios<span class="badge" style="margin-left: 5px;">' . Usuarisvga::model()->pendingUsuarisCount . '</span>',array('usuarisvga/admin'))  . '<br><br>' .
        CHtml::link('Administrar secciones<span class="badge" style="margin-left: 5px;">' . SeccionsHasUsuaris::model()->pendingSeccionsCount . '</span>',array('SeccionsHasUsuaris/index'))
    )
);
?>