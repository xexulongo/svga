<?php

class UsuarisvgaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if (!Yii::app() -> user -> isGuest) {
			Yii::app() -> user -> setFlash('success', Yii::t('SVGA', "Ya tienes la sesión iniciada!"));
			$this -> redirect($this -> createUrl(Yii::app()->request->urlReferrer));
		} else{
			$user=new Usuarisvga('register');
			if(isset($_POST['Usuarisvga']))
			{
				$user->attributes=$_POST['Usuarisvga'];
				$user->activated = 1;
				if($user->validate()){
					$user -> email_token = Yii::app() -> token -> createUnique(40, Users::model(), 'email_token');
						$user -> email_activated = 0;
						$user -> save(false);

						//enviem el correu amb la direcció per activar el compte
						$message = new YiiMailMessage();
						$message -> setFrom(array('jlexposito7@gmail.com' => 'José Luis Expósito Robles'));
						$message -> setTo(array($user -> email => $user -> username));
						$message -> subject = Yii::t('svga', 'Activeu el vostre compte');
						$message -> view = 'email_activate';
						$message -> setBody(array('username' => $user -> username, 'token' => $user -> email_token), 'text/html');
						Yii::app() -> mail -> send($message);

						Yii::app() -> user -> setFlash('success', Yii::t('svga', "S'ha completat correctament el registre. T'hem enviat un correu electrònic amb instruccions sobre com activar el teu compte."));

						if($user->save(false))
							$this->redirect(array('view','id'=>$user->id));
				}
				else {	
					$this->render('create',array(
						'model'=>$user,
					));
				}
			} 
			else {
				$this->render('create',array(
					'model'=>$user,
				));
			}
		}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Usuarisvga']))
		{
			$model->attributes=$_POST['Usuarisvga'];
			$model->password = md5($model->password);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Usuarisvga');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Usuarisvga('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Usuarisvga']))
			$model->attributes=$_GET['Usuarisvga'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Usuarisvga the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Usuarisvga::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
