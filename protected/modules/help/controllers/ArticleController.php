<?php

class ArticleController extends Controller
{
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
		

		
	}



	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */


	//public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */

	/*
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}*/

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	/*
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
	}*/

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
		$model=new Article;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Article']))
		{
			$model->attributes=$_POST['Article'];
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

		if(isset($_POST['Article']))
		{
			$model->attributes=$_POST['Article'];
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
		$model=new Article('searchIndex');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Article']))
			$model->attributes=$_GET['Article'];

		$this->render('index',array(
			'model'=>$model,
		));
	}


	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		
		$contact=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$contact->attributes=$_POST['ContactForm'];
			if($contact->validate())
			{
				//
		        $mail=Yii::app()->Smtpmail;
		        $mail->SetFrom('xxx@gmail.com', $model->name);
		        $mail->Subject    = $model->subject;
		        $msg=$model->body.'<br/>'.$model->email.'<br/>'.$model->name;
		        $mail->MsgHTML($msg);
		        $mail->AddAddress('xxx@gmail.com', "ulims contact");
		        if(!$mail->Send()) {

		            echo "Mailer Error: " . $mail->ErrorInfo;
		        }else {
		            echo "Message sent!";
		        }
		        //
				$name='=?UTF-8?B?'.base64_encode($contact->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($contact->subject).'?=';
				$headers="From: $name <{$contact->email}>\r\n".
					"Reply-To: {$contact->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$contact->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();

			
			}
		}
		//$this->render('contact',array('model'=>$model));


		$model=new Article('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Article']))
			$model->attributes=$_GET['Article'];

		$this->render('admin',array(
			'model'=>$model,'contact'=>$contact,
		));





	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Article the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Article::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Article $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='article-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionContent()
	{
		$this->render('content');
	}
	
		public function actionFaqs()
	{
		$this->render('faqs');
	}
		public function actionContact()
	{
		$this->render('/site/contact/');
	}

	
	/**
	 * Registers the Bootstrap alert plugin.
	 * @param string $selector the CSS selector
	 * @param array $options the plugin options
	 * @see http://twitter.github.com/bootstrap/javascript.html#alerts
	 * @since 0.9.8
	 */
	public function registerAlert($selector = null, $options = array())
	{
		$this->registerPlugin(self::PLUGIN_ALERT, $selector, $options);
	}



}
