<?php
return array (
  'blogger' => 
  array (
    'type' => 2,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'blogaire' => 
  array (
    'type' => 2,
    'description' => 'secció blog',
    'bizRule' => 'return Yii::app()->user->checkSeccio(\'hst2\');',
    'data' => NULL,
    'children' => 
    array (
      0 => 'blogger',
    ),
  ),
  'admin' => 
  array (
    'type' => 2,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
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
);
