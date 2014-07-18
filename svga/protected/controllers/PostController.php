<?php

class PostController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'roles'=>array('admin'),
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$post=$this->loadModel();
	 
	    $this->render('view',array(
	        'model'=>$post,
	    ));
	}
	private $_model;

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{		$model=new Post;

			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);

			if(isset($_POST['Post']))
			{
				$model->attributes=$_POST['Post'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}

			$this->render('create',array(
				'model'=>$model,
			));
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

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
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
		/* 
		** DEFINIM DATAPROVIDERS PER LES NOTICIES DESTACADES I TOTES LES NOTICIES
		*/

		$criteriaPost=new CDbCriteria(array(
	        'condition'=>'status='.Post::STATUS_PUBLICADO,
	        'order'=>'update_time DESC',
	        'with'=>'commentCount',
    	));
	    if(isset($_GET['tag']))
	        $criteriaPost->addSearchCondition('tags',$_GET['tag']);
	 
	    $dataProviderPost=new CActiveDataProvider('Post', array(
	        'pagination'=>array(
	            'pageSize'=>5,
	        ),
	        'criteria'=>$criteriaPost,
	    ));

	    $criteriaDestacados=new CDbCriteria(array(
	        'condition'=>'status='.Post::STATUS_PUBLICADO,
	        'order'=>'update_time DESC',
	        'limit'=>4,
    	));
    	$value = array(1,2,3);
    	$criteriaDestacados->addInCondition('destacado',$value,'AND');

	 
	    $dataProviderDestacados=new CActiveDataProvider('Post', array(
	    	'pagination' => false,
	        'criteria'=>$criteriaDestacados,
	    ));
		$this->slideritems = $this->getdestacadositems($dataProviderDestacados);
		$this->destacadosnews = $dataProviderDestacados;

	  	$this->pageTitle = "HST2 - Noticias"; // It could be something from DB or...whatever
	   	$this->render('index',array(
        	'dataProvider2'=>$dataProviderPost,
        	'dataProvider1'=>$dataProviderDestacados,

    	));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Post('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Post']))
			$model->attributes=$_GET['Post'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Post the loaded model
	 * @throws CHttpException
	 */
public function loadModel()
	{
	 if($this->_model===null)
	    {
	        if(isset($_GET['id']))
	        {
	            if(Yii::app()->user->isGuest)
	                $condition='status='.Post::STATUS_PUBLICADO
	                    .' OR status='.Post::STATUS_ARCHIVADO;
	            else
	                $condition='';
	            $this->_model=Post::model()->findByPk($_GET['id'], $condition);
	        }
	        if($this->_model===null)
	            throw new CHttpException(404,'The requested page does not exist.');
	    }
	    return $this->_model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Post $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function getdestacadositems($dataprov){
		$items = array();	
		for($i = 0; $i <= count($dataprov->data); ++$i){
			if(isset($dataprov->data[$i])){
				$aux = array(
					'image'=>Yii::app()->baseUrl . '/images/' . $dataprov->data[$i]->image,
			        'label'=> $dataprov->data[$i]->title,
			        'caption'=> $dataprov->data[$i]->description
				);
				$items[$i] = $aux;	
			}
		}
		return $items;
	}
}
