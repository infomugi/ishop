<?php

class OrderController extends Controller
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
				'actions'=>array('add','cart','checkout','remove','create'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==2',
				),			
			array('allow',
				'actions'=>array('add','update','view','delete','admin','cart','checkout','remove','create'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionBuy()
	{
		$model=new Order;
		$model->customer_id = YII::app()->user->id;
		$model->transaction_id = 0;
		$model->product_id = $_POST['id'];
		$model->quantity = 1;
		$model->color = 0;
		$model->size = 0;
		$model->status = 0;
		$model->save();
		echo "Berhasil di tambahkan ke keranjang";
		Yii::app()->end();
	}	

	public function actionAdd($product)
	{
		$model=new Order;
		$model->customer_id = YII::app()->user->id;
		$model->transaction_id = 0;
		$model->product_id = $product;
		$model->quantity = 1;
		$model->color = 0;
		$model->size = 0;
		$model->status = 0;
		$model->save();
		$this->redirect(array('cart'));
	}	

	public function actionCreate($product)
	{
		$model=new Order;
		$model->customer_id = YII::app()->user->id;
		$model->transaction_id = 0;
		$model->product_id = $product;
		$model->quantity = 1;
		$model->color = 0;
		$model->size = 0;
		$model->status = 0;
		$model->save();
		$this->redirect(array('cart'));
	}	

	public function actionCart()
	{
		$this->layout = "front_page";
		
		$criteria= new CDbCriteria();
		$criteria->distinct = true;
		$criteria->group = 'product_id';
		$criteria->order = 'product_id';
		$criteria->condition = 'status = 0 AND customer_id='.YII::app()->user->id;

		$dataProvider=new CActiveDataProvider('Order', array(
			'criteria'=>$criteria,
			'pagination'=>false,
			));

		$this->render('cart',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionCheckout()
	{
		$quantity = Order::model()->cart();
		if($quantity==0){
			$this->redirect(array('site/index'));
		}else{
			$this->redirect(array('transaction/checkout'));
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

		if(isset($_POST['Order']))
		{
			$model->attributes=$_POST['Order'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_transaction_detail));
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

	public function actionRemove($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('order/cart'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Order');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Order('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Order']))
			$model->attributes=$_GET['Order'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Order the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Order::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Order $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='order-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
