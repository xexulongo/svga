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
    'bizRule' => '$auth = UsersHaveTeams::model()->find(\'user_id = :user_id AND Team_id = :Team_id, array(\':user_id\' => Yii::app()->user->getID(), \':Team_id\' => $params[\'Team\']->id));
		return !empty($auth);',
    'data' => 
    array (
      0 => 'Team',
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
  'kapo' => 
  array (
    'type' => 2,
    'description' => 'Usuari Kapo',
    'bizRule' => 'return (Yii::app()->user->getState(\'login_type\') == \'kapo\');',
    'data' => NULL,
    'children' => 
    array (
      0 => 'web',
      1 => 'engrescat',
      2 => 'junta',
      3 => 'marqueting',
    ),
  ),
  'membre' => 
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
