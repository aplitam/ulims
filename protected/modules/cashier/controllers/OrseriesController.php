<?php

class OrseriesController extends Controller
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
		/*return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);*/
		return array('rights');
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
		$model=new Orseries;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Orseries']))
		{
			$model->attributes=$_POST['Orseries'];
			$model->rstl_id=Yii::app()->Controller->getRstlId();
			
			/* use this to increment numeric string with leading zeros*/
			//check length of startor
			/*
			$lenStart=strlen($model->startor);
			$nextOr=$model->startor+1;
			$lenNext=strlen($nextOr);
			if($lenStart!=$lenNext){
				//we will set same length of string for start and next
				//in case of leading zeros of start OR
				$nextOr = str_pad($nextOr, $lenStart, 0, STR_PAD_LEFT);
			}
			$model->nextor=$nextOr;
			*/
			$model->nextor=$model->startor;
			$model->status=1;
			if($model->save())
				if (Yii::app()->request->isAjaxRequest)
				{
					echo CJSON::encode(array(
                        'status'=>'success', 
                        'div'=>"O.R. series successfully added."
                        ));
                    exit;    
				}
				else
					$this->redirect(array('view','id'=>$model->id));
		}

		if (Yii::app()->request->isAjaxRequest)
        {
        	//$model->lab = explode(',',$model->lab);//converting to array...
			echo CJSON::encode(array(
                'status'=>'failure',
                'div'=>$this->renderPartial('_form', array('model'=>$model,'requestId'=>$requestId,
				), true, true)));
			
            exit;               
        }else{
			$this->render('create',array('model'=>$model));
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

		if(isset($_POST['Orseries']))
		{
			$model->attributes=$_POST['Orseries'];
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
		$dataProvider=new CActiveDataProvider('Orseries');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Orseries('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Orseries']))
			$model->attributes=$_GET['Orseries'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Orseries the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Orseries::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Orseries $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='orseries-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionActivateSeries($id){
		$orseries=Orseries::model()->findByPk($id);
		if($orseries){
			$nextOr=$orseries->nextor;
			$endor=$orseries->endor;
			if(intval($nextOr) > intval($endor)){
				echo CJSON::encode(
					array(
						'status'=>'failure',
						'error'=>'<div class="alert alert-error" style="font-size:105%; margin-top:10px;">Cannot activate O.R. series. <br \> Current series already <b>EXHAUSTED</b>.</div>'
						));
				exit;
			}
		}
		
		Orseries::model()->updateByPk($id, 
			array('status'=>1, 
			));
			
		echo CJSON::encode(array('status'=>'success'));
		exit;
	}
	
	public function actionDeactivateSeries($id){
		Orseries::model()->updateByPk($id, 
			array('status'=>0, 
			));
		echo CJSON::encode(array('status'=>'success'));
		exit;			
	}
}
