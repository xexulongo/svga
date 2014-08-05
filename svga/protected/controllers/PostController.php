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
				'actions'=>array('create','update', 'upload', 'subir', 'deleteimage', 'gallery'),
				'roles'=>array('admin', 'blogger'),
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
		/*if(Yii::app()->user->checkAccess('blogger', array(Yii::app()->user->id))) echo 'THATS OK';
        else echo 'MERDA';
        die(); */
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
	{		
		$model=new Post;
		$images= $this->getImages();

			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);

			if(isset($_POST['Post']))
			{
				$model->attributes=$_POST['Post'];
				$model->image = $_POST['Post']['image'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}

			$this->render('create',array(
				'model'=>$model,
				'images'=>$images,
			));
	}

	public function actionSubir()
	{
		$image = new MyModel;
		$this->render('upload', array(
			'image'=>$image
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
		$images= $this->getImages();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			$model->image = $_POST['Post']['image'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
			'images'=>$images,
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

	  	$this->pageTitle = "SVGA - Noticias"; // It could be something from DB or...whatever
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
					'image'=>'/uploads/'. $dataprov->data[$i]->image,
			        'label'=> $dataprov->data[$i]->title,
			        'caption'=> $dataprov->data[$i]->description
				);
				$items[$i] = $aux;	
			}
		}
		return $items;
	}

public function actionDeleteimage($url)
{
    unlink($url);
}
public function actionUpload()
{
    header('Vary: Accept');
    if (isset($_SERVER['HTTP_ACCEPT']) && 
        (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false))
    {
        header('Content-type: application/json');
    } else {
        header('Content-type: text/plain');
    }
    $data = array();
 
    $model = new MyModel('upload');
    $model->picture = CUploadedFile::getInstance($model, 'picture');
    if ($model->picture !== null  && $model->validate(array('picture')))
    {
    	$partial = Yii::getPathOfAlias('webroot');
    	$url = $partial . '/uploads/' . $model->picture->name;
    	$thumb =  '/uploads/'. $model->picture->name;
        $model->picture->saveAs($url);
        $model->file_name = $model->picture->name;
         $data[] = array(
                'name' => $model->picture->name,
                'type' => $model->picture->type,
                'size' => $model->picture->size,
                // we need to return the place where our image has been saved
                'url' => $thumb, // Should we add a helper method?
                // we need to provide a thumbnail url to display on the list
                // after upload. Again, the helper method now getting thumbnail.
                'thumbnail_url' => $thumb,
                // we need to include the action that is going to delete the picture
                // if we want to after loading
                'delete_url' => $this->createUrl('post/Deleteimage', 
                    array('url' => $url, 'method' => 'uploader')),
                'delete_type' => 'POST');
        // save picture name
    } else {
        if ($model->hasErrors('picture'))
        {
            $data[] = array('error', $model->getErrors('picture'));
        } else {
            throw new CHttpException(500, "Could not upload file ".     CHtml::errorSummary($model));
        }
    }
    // JQuery File Upload expects JSON data
    echo json_encode($data);
}

protected function getImages(){
	$fileListOfDirectory = array();
	$partial = Yii::getPathOfAlias('webroot');
	$pathTofileListDirectory = $partial . '/uploads/' ;

	if(!is_dir($pathTofileListDirectory ))
	{
	    die(" Invalid Directory " . $pathTofileListDirectory);
	}

	if(!is_readable($pathTofileListDirectory ))
	{
	    die("You don't have permission to read Directory " . $pathTofileListDirectory );
	}

	foreach ( new DirectoryIterator ( $pathTofileListDirectory ) as $file ) {
	      if ($file->getExtension () == "jpg" or $file->getExtension () == "png") {
	          array_push ( $fileListOfDirectory, $file->getBasename () );
      }
	}
	return $fileListOfDirectory;
}
public function actionGallery(){
	$folder = $this->getImages();	

	$this->render('gallery',array(
		'folder'=>$folder,
	));
}

}
