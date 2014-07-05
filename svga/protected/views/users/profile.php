<?php
/* @var $this SiteController */

$this->pageTitle= Yii::t('svga', "Perfil d'usuari");
$this->breadcrumbs=array(
    Yii::t('svga', 'Usuari'),
);

?>
<div class="container">
    <div class="headline">
        <h2><?= Yii::t('svga', "Informació de l'usuari") ?></h2>
    </div>
    <dl>
        <dt><?= Yii::t('svga', 'Nom')?></dt> 
        <dd></dd><?= $user->username?></dd>
        
        <dt><?= Yii::t('svga', 'Correu electrònic') ?></dt>
        <dd></dd><?= $user->email ?></dd>
        
        <dt><?= Yii::t('svga', 'Tipus') ?></dt>
        <?php if(Yii::app()->user->getState('login_type') == 'facebook') { ?>
            <dd>Facebook</dd>
        <?php } else { ?>
            
        <?php } ?>
    </dl>

    <a class="btn-u btn-u-orange" href="<?= $this->createUrl('user/edit')?>"><?= Yii::t('svga', 'Editar') ?></a>
        <div class="headline">
            <h2><?= Yii::t('svga', "Els teus equips") ?></h2>
        </div>
       <?php $this->widget('bootstrap.widgets.TbGridView', array(
        'dataProvider'=>$dataProvider,
        'template' => '{items} {pager}',
        'columns' => array(
                array(
                  'name' => 'name',
                    'header' => Yii::t('svga', 'Nom'),
                    'type' => 'raw',
                    'value' => 'CHtml::link($data->name,Yii::app()->controller->createUrl(\'/view\', array(\'slug\' => $data->name)))'
                ),
        )
        ));?>
</div>