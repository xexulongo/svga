<?php
return array (
  'admin' => 
    array (
      'type' => 2,
      'description' => 'return (Yii::app()->user->checkSeccio(\'web\') || Yii::app()->user->checkSeccio(\'junta\'));',
      'bizRule' => NULL,
      'data' => NULL,
      'children' => 
      array (
        0 => 'createTeam',
        1 => 'editTeam',
        2 => 'deleteTeam',
      ),
  ),
  'web' => 
    array (
      'type' => 2,
      'description' => 'secció web',
      'bizRule' => 'return Yii::app()->user->checkSeccio(\'web\');',
      'data' => NULL,
      'children' => 
      array (
        0 => 'admin',
      ),
  ),
  'junta' => 
    array (
      'type' => 2,
      'description' => 'secció junta',
      'bizRule' => 'return Yii::app()->user->checkSeccio(\'junta\');',
      'data' => NULL,
      'children' => 
      array (
        0 => 'admin',
      ),
  ),
  'membre' => 
    array (
      'type' => 2,
      'description' => 'Usuari membre',
      'bizRule' => 'return (Yii::app()->user->getState(\'login_type\') == \'membre\');',
      'data' => NULL,
      'children' => 
      array (
        0 => 'web',
        1 => 'junta',
      ),
  ),
  'registrat' => 
    array (
      'type' => 2,
      'description' => 'usuari registrat',
      'bizRule' => 'return !Yii::app()->user->isGuest;',
      'data' => NULL,
      'children' => 
      array (
        0 => 'createTeam',
        1 => 'TeamAdmin',
      ),
  ),
);
