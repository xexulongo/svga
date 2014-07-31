<?php $this->widget(
    'booster.widgets.TbPanel',
    array(
        'title' => 'Admin Box',
    	'context' => 'primary',
        'headerIcon' => 'cog',
        'content' => CHtml::link('<i class="icon-plus-sign"></i> Crear Post',array('post/create')) . '<br><br>' .  
        CHtml::link('<i class="icon-list"></i> Gestionar Posts',array('post/admin')) . '<br><br>' . 
        CHtml::link('<i class="icon-plus-sign"></i> Subir imagenes',array('post/subir')) . '<br><br>' .
        CHtml::link('Administrar usuarios<span class="badge" style="margin-left: 5px;">' . Usuarisvga::model()->pendingUsuarisCount . '</span>',array('usuarisvga/admin'))  . '<br><br>' .
        CHtml::link('Administrar secciones<span class="badge" style="margin-left: 5px;">' . SeccionsHasUsuaris::model()->pendingSeccionsCount . '</span>',array('SeccionsHasUsuaris/index'))
    )
);
?>