<?php

class TransactionController extends Controller
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
			// 'postOnly + delete', // we only allow deletion via POST request
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
			array('allow',
				'actions'=>array('checkout','detail','confirmation','history','view','confirmationreceipt'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==2',
				),			
			array('allow',
				'actions'=>array('checkout','update','view','delete','admin','detail','confirmation','verification', 'shipping','listnew','listshipping','listverification','listconfirmation','listsuccess','history','confirmationreceipt'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==1',
				),
			array('deny',
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
		if(YII::app()->user->record->level==1){
		}else{
			$this->layout = "front_index";
		}
		$model=$this->loadModel($id);
		$criteria= new CDbCriteria();
		$criteria->distinct = true;
		$criteria->group = 'product_id';
		$criteria->order = 'product_id';
		$criteria->condition = 'transaction_id = '.$model->id_transaction;

		$dataProvider=new CActiveDataProvider('Order', array(
			'criteria'=>$criteria,
			'pagination'=>false,
			));

		$this->render('view',array(
			'model'=>$model,
			'dataProvider'=>$dataProvider,
			));
		
	}

	public function actionDetail($id)
	{
		$this->layout = "front_index";
		$model=$this->loadToken($id);
		$customer=$this->loadCustomer($model->customer_id);

		$criteria= new CDbCriteria();
		$criteria->distinct = true;
		$criteria->group = 'product_id';
		$criteria->order = 'product_id';
		$criteria->condition = 'transaction_id = '.$model->id_transaction;

		$dataProvider=new CActiveDataProvider('Order', array(
			'criteria'=>$criteria,
			'pagination'=>false,
			));

		$this->render('detail',array(
			'model'=>$model,
			'dataProvider'=>$dataProvider,
			'customer'=>$customer,
			));
	}	

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCheckout()
	{
		$this->layout = "front_page";
		$model=new Transaction;
		$model->setScenario('checkout');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Transaction']))
		{
			$model->attributes=$_POST['Transaction'];
			$model->code = "T".date('dmYhis');
			$model->date_order = date('Y-m-d h:i:s');
			$model->customer_id = YII::app()->user->id;
			$model->payment_total = Transaction::model()->total();
			
			//Confirmation & Verification
			$model->verification_id = 0;
			$model->date_verification = NULL;
			$model->confirmation_id = 0;
			$model->date_confirmation = NULL;
			
			//Verification
			$model->status = 0;
			$model->payment_file = 0;
			
			//Shipping
			$model->shipping_type = NULL;
			$model->shipping_brand = NULL;
			$model->shipping_code = NULL;

			//Token
			$model->token = md5($model->date_order.$model->code);
			if($model->payment_total==0){
				$this->redirect(array('order/cart'));
			}else{
				if($model->save()){
					Order::model()->updateAll(array('transaction_id' => $model->id_transaction), 'status = 0 AND customer_id = '.$model->customer_id.'');
					Order::model()->updateAll(array('status' => 1), 'transaction_id = '.$model->id_transaction.'');
					$this->redirect(array('detail','id'=>$model->token));
				}
			}
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

		if(isset($_POST['Transaction']))
		{
			$model->attributes=$_POST['Transaction'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_transaction));
		}

		$this->render('update',array(
			'model'=>$model,
			));
	}

	public function actionConfirmation($id)
	{
		$this->layout = "front_page";
		$model=$this->loadToken($id);
		$model->setScenario('confirmation');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Transaction']))
		{
			$model->attributes=$_POST['Transaction'];
			$model->confirmation_id = YII::app()->user->id;
			$model->date_confirmation = date('Y-m-d h:i:s');
			$model->status = 1;
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'payment_file'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'payment_file'); 
				$model->payment_file=$model->code.'.'.$tmp->extensionName; 
			}

			if($model->save())
			{
				if(strlen(trim($model->payment_file)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/api/image/transaction/big/'.$model->payment_file);
				}
				$this->redirect(array('detail','id'=>$model->token));
			}
		}

		$this->render('confirmation',array(
			'model'=>$model,
			));
	}	

	public function actionVerification($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('verification');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Transaction']))
		{
			$model->attributes=$_POST['Transaction'];
			$model->verification_id = YII::app()->user->id;
			$model->date_verification = date('Y-m-d h:i:s');			
			$model->status = 2;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_transaction));
		}

		$this->render('verification',array(
			'model'=>$model,
			));
	}	


	public function actionShipping($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('shipping');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Transaction']))
		{
			$model->attributes=$_POST['Transaction'];
			$model->shipping_id = YII::app()->user->id;
			$model->shipping_date = date('Y-m-d h:i:s');			
			$model->status = 3;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_transaction));
		}

		$this->render('shipping',array(
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
		$dataProvider=new CActiveDataProvider('Transaction');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	public function actionListNew()
	{
		$dataProvider=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=0','order'=>'date_order DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	public function actionListConfirmation()
	{
		$dataProvider=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=1','order'=>'date_order DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	public function actionListVerification()
	{
		$dataProvider=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=2','order'=>'date_order DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionListShipping()
	{
		$dataProvider=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=3','order'=>'date_order DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionListSuccess()
	{
		$dataProvider=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=4','order'=>'date_order DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}			
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Transaction('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Transaction']))
			$model->attributes=$_GET['Transaction'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Transaction the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Transaction::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadToken($id)
	{
		$model=Transaction::model()->findByAttributes(array('token'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}	

	public function loadCustomer($id)
	{
		$model=Customer::model()->findByAttributes(array('user_id'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}		

	/**
	 * Performs the AJAX validation.
	 * @param Transaction $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='transaction-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionHistory()
	{	
		$this->layout = "front_page";
		$dataProvider1=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=0 AND customer_id = '.YII::app()->user->id.'','order'=>'date_order DESC')));
		$dataProvider2=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=1 AND customer_id = '.YII::app()->user->id.'','order'=>'date_order DESC')));
		$dataProvider3=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=2 AND customer_id = '.YII::app()->user->id.'','order'=>'date_order DESC')));
		$dataProvider4=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=3 AND customer_id = '.YII::app()->user->id.'','order'=>'date_order DESC')));
		$dataProvider5=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=4 AND customer_id = '.YII::app()->user->id.'','order'=>'date_order DESC')));

		$this->render('history',array(
			'dataProvider1'=>$dataProvider1,
			'dataProvider2'=>$dataProvider2,
			'dataProvider3'=>$dataProvider3,
			'dataProvider4'=>$dataProvider4,
			'dataProvider5'=>$dataProvider5,
			));
	}		

	public function actionConfirmationReceipt($id)
	{
		$model=$this->loadToken($id);
		$model->setScenario('confirmationreceipt');
		$model->status = 4;
		if($model->save()){
			$this->redirect(array('detail','id'=>$model->token));
		}
	}		
}
