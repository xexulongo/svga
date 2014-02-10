<?php
return array (
  'createTeam' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'editTeam' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'deleteTeam' => 
  array (
    'type' => 0,
    'description' => '',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'TeamAdmin' => 
  array (
    'type' => 1,
    'description' => 'Admin del Team',
    'bizRule' => '$auth = UsersHaveTeam::model()->find(\'user_id = :user_id AND team_id = :team_id AND type = :type\', array(\':user_id\' => Yii::app()->user->getID(), \':team_id\' => $params[\'team\']->id, \'type\' => UsersHaveTeam::ADMIN));
		return !empty($auth);',
    'data' => 
    array (
      0 => 'team',
    ),
    'children' => 
    array (
      0 => 'editTeam',
    ),
  ),
  'admin' => 
  array (
    'type' => 2,
    'description' => '',
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
