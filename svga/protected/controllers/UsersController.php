<?php

class UsersController extends Controller
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
				'actions'=>array('view', 'index', 'veure','create', 'login', 'loginmembre', 'gethash', 'activate'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update', 'logout, index'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'roles'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actions()
	{
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
		);
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin() {
		$this->layout='//layouts/main';
		//només deixem loggejar si no ho està
		if (!Yii::app() -> user -> isGuest) {
			Yii::app() -> user -> setFlash('warning', Yii::t('SVGA', 'Ja tens la sessió iniciada!'));
			$this -> redirect($this -> createUrl(Yii::app() -> homeUrl));
		} 
		else {
			$form = new LoginForm();
			if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['Usuarisvga'])) {
					$user = new UserIdentity($_POST['Usuarisvga']['username'], $_POST['Usuarisvga']['password']);
					$result = $user -> authenticate();
					if ($result == PasswordIdentity::CREDENTIALS_ERROR) {
						Yii::app() -> user -> setFlash('danger', Yii::t('SVGA', 'Usuari i/o contrasenya incorrecte'));
					}
					else if ($result == PasswordIdentity::OK) {

						Yii::app() -> user -> login($user);

						Yii::app() -> user -> setFlash('success', Yii::t('SVGA', 'Sessió iniciada correctament!'));
						$this -> redirect(Yii::app() -> user -> returnUrl);
					} 
					else {
						Yii::app() -> user -> setFlash('danger', Yii::t('SVGA', 'Error en iniciar la sessió'));
				}
				$form -> password = '';
			}
			if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['LoginForm'])) {
				//ens estan enviant dades per iniciar sessió
				$user = new PasswordIdentity($_POST['LoginForm']['email'], $_POST['LoginForm']['password']);
				$result = $user -> authenticate();
				if ($result == PasswordIdentity::CREDENTIALS_ERROR) {
					Yii::app() -> user -> setFlash('danger', Yii::t('SVGA', 'Usuari i/o contrasenya incorrecte'));
				} else if ($result == PasswordIdentity::EMAIL_NOT_ACTIVATED) {
					Yii::app() -> user -> setFlash('danger', Yii::t('SVGA', 'Encara no has confirmat la teva direcció de correu electrònic!'));
				} else if ($result == PasswordIdentity::NOT_ACTIVATED) {
					Yii::app() -> user -> setFlash('danger', Yii::t('SVGA', 'Aquest compte està desactivat'));
				} else if ($result == PasswordIdentity::OK) {

					Yii::app() -> user -> login($user);

					Yii::app() -> user -> setFlash('success', Yii::t('SVGA', 'Sessió iniciada correctament!'));
					$this -> redirect(Yii::app() -> user -> returnUrl);
				} else {
					Yii::app() -> user -> setFlash('danger', Yii::t('SVGA', 'Error en iniciar la sessió'));
				}

				$form -> password = '';
				$this -> render('login', array('formModel' => $form));
			} 
			else {
				//mostrem el formulari
				$this -> render('login', array('formModel' => $form));
			}
		}
	}

	public function Gethash($string){
		return md5($string);
	}

	public function actionVeure($id){
		$user = Users::model()->findByPk($id);
        
        //artistes dels quals l'usuari és administrador
        $criteria = new CDbCriteria();
        //$criteria->with = array('users_have_artists');
        $criteria->join = 'JOIN Users_has_Teams d ON (d.teams_id=t.id)';
        $criteria->addCondition('d.users_id = :users_id');
        $criteria->params = array(':users_id' => $id);

        $dataProvider = new CActiveDataProvider('Teams', array(
            'criteria' => $criteria,
            'pagination'=>array(
                'pageSize'=>30,
            ),
        ));
                $this->render('profile', array('user' => $user, 'dataProvider' => $dataProvider));

	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
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
		$this->layout = '//layouts/main';
				//nomes es pot registrar la gent que no té la sessió iniciada
		if (!Yii::app() -> user -> isGuest) {
			Yii::app() -> user -> setFlash('success', Yii::t('SVGA', "Ya tienes la sesión iniciada!"));
			$this -> redirect($this -> createUrl(Yii::app()->request->urlReferrer));
		}
		else {
			$user=new Users('register');

			// Uncomment the following line if AJAX validation is needed

			if(isset($_POST['Users']))

			{	
				$user->attributes = $_POST['Users'];
				$user->birthday = $_POST['Users']['birthday'];
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
					} else{
						$this->render('create',array(
						'model'=>$user,
					));
					}
				} else{
					$this->render('create',array(
						'model'=>$user,
					));
			}
		}
	}

	/**
	 * Funció encarregada d'activar els comptes amb el token que s'envia per correu electrònic
	 */
	public function actionActivate() {

		if (!empty($_GET['token'])) {
			$user = Users::model()->find('email_token = :token', array(':token' => $_GET['token']));
			if (empty($user)) {
				Yii::app()->user->setFlash('danger', Yii::t('svga', "No existeix cap usuari amb aquest token"));
				$this->redirect($this -> createUrl(Yii::app() -> homeUrl));
			} else {
				$user->email_activated = 1;
				if ($user->save(false)) {
					Yii::app()->user->setFlash('success', Yii::t('svga', "Hem activat el teu compte correctament. Ja pots iniciar sessió! :)"));
					$this->redirect(Yii::app() -> homeUrl);
				} else {
					Yii::app()->user->setFlash('danger', Yii::t('svga', "Error en activar el teu compte"));
					$this->redirect($this -> createUrl(Yii::app() -> homeUrl));
				}
			}
		} else {
			Yii::app()->user->setFlash('danger', Yii::t('svga', "No ens has passat cap token!"));
			$this -> redirect($this -> createUrl(Yii::app() -> homeUrl));
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

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
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
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
