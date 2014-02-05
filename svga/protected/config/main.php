<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SVGA',

	// preloading 'log' component
	'preload'=>array(
		'log',
		'bootstrap',
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.helpers.*',
		'application.components.*',
        'ext.yii-mail.YiiMailMessage',
		'ext.eutils.EUtils',
	),

    'aliases' => array(
        'xupload' => 'ext.xupload'
    ),

	'defaultController'=>'post',

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'test',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'bootstrap'=>array('class'=>'application.extensions.bootstrap.components.Bootstrap'),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'class' => 'WebUser',
		),
        'authManager'=>array(
            'class'=>'CPhpAuthManager',
            'showErrors' => true,
            'defaultRoles'=>array('membre', 'kapo'),
        ),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
            //'showScriptName'=>false,
            'caseSensitive'=>false,
			'urlFormat'=>'path',
			'rules'=>array(
				//array('post/index', 'pattern' => ''),
				//array('<controller>/index', 'pattern' => '<controller>'),
  				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		
		/*
       'db'=>array(
            'connectionString'=>'sqlite:/home/xexu/yii/test/protected/data/blog.db',
            'tablePrefix'=>'tbl_',
        ),
        */
  
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=SVGA',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'zherlon10',
			'charset' => 'utf8',
		),

		'db2'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=SVGATeam',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'zherlon10',
			'charset' => 'utf8',
			'class' => 'CDbConnection',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
