<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */

	// API--------------------------------------------------------------------------------------------------------------
	public function actionCsListPerIdCategory()
	{
		$id =$_POST['id'];
		$query = "SELECT * FROM category_sub WHERE category_id = '$id' ORDER BY name DESC";
		$command = Yii::app()->db->createCommand($query);
		$result = $command->queryAll();
		$output = array(
			"feed" => $result,
			);
		echo CJSON::encode($output);
		Yii::app()->end();
	} 


	public function actionSlide()
	{
		$id =1;
		$query = "SELECT * FROM setting_slide ORDER BY id_setting_slide  DESC";
		$command = Yii::app()->db->createCommand($query);
		$result = $command->queryAll();
		$output = array(
			"feed" => $result,
			);
		echo CJSON::encode($output, JSON_PRETTY_PRINT);
		Yii::app()->end();
	} 
    // API END--------------------------------------------------------------------------------------------------------------

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
				),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
				),
			);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public function actionIndex()
	{
		$this->layout = "front_index";		
		$dataProvider=new CActiveDataProvider('Product');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}


	public function actionDashboard()
	{	
		if(YII::app()->user->isGuest){
			$this->actionLogin();
		}else{
			if(Yii::app()->user->getLevel()==1){
				$this->layout = "back_page";
				$dataProvider1=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=0 AND month(date_order)='.date('m').'','order'=>'date_order DESC')));
				$dataProvider2=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=1 AND month(date_order)='.date('m').'','order'=>'date_order DESC')));
				$dataProvider3=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=2 AND month(date_order)='.date('m').'','order'=>'date_order DESC')));
				$dataProvider4=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=3 AND month(date_order)='.date('m').'','order'=>'date_order DESC')));
				$dataProvider5=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=4 AND month(date_order)='.date('m').'','order'=>'date_order DESC')));

				$this->render('dashboard',array(
					'dataProvider1'=>$dataProvider1,
					'dataProvider2'=>$dataProvider2,
					'dataProvider3'=>$dataProvider3,
					'dataProvider4'=>$dataProvider4,
					'dataProvider5'=>$dataProvider5,
					));
			}else{
				$this->redirect(array('index'));
			}
		}
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		$this->layout = "error";
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}


	
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{


		if(YII::app()->user->isGuest){		

			$this->layout = "front_page";	
			$model=new LoginForm;
			$user=new User;
			$customer = new Customer;

			// if it is ajax validation request
			if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
			{
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}	

			// collect user input data
			if(isset($_POST['LoginForm']))
			{
				$model->attributes=$_POST['LoginForm'];
				// validate user input and redirect to the previous page if valid
				if($model->validate() && $model->login()){
					if(Yii::app()->user->getLevel()==1){
						$this->redirect('administrator');
					}else{
						$this->redirect('user/profile');
					}
				}else{
					$this->redirect(array('login'));
				}
			}

			// display the login form
			$this->render('login_customer',array('model'=>$model,'user'=>$user,'customer'=>$customer));

		}else{
			$this->redirect(array('index'));
		}
	}

	public function actionAdmin()
	{
		$this->layout="signin";		
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				//$userid,$description,$activityid,$type,$point,$status
				Activities::model()->my(YII::app()->user->id,"Login dari IP : ".Yii::app()->request->getUserHostAddress(),1,1,3,0);
			if(Yii::app()->user->getLevel()==1){
				Yii::app()->user->setFlash('Success', 'Berhasil login dari IP '.Yii::app()->request->getUserHostAddress().'');
				$this->redirect(array('dashboard'));
			}else{
				$this->redirect(array('login'));
			}
		}
		// display the login form
		$this->render('login_admin',array('model'=>$model));
	}	

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		// //$userid,$description,$activityid,$type,$point,$status
		// Activities::model()->my(YII::app()->user->id,"Logout dari IP : ".Yii::app()->request->getUserHostAddress(),0,0,0,0);
		// $model=User::model()->findByPk(YII::app()->user->id);
		// $model->visit_time = date('Y-m-d h:i:s');
		// $model->update();
		Yii::app()->user->logout();
		$this->redirect(array('index'));
	}

	public function actionView($id)
	{
		$this->redirect(array('transaction/view','id'=>$id));
	}	

	public function actionAjax(){
		$user=new User;
		$customer = new Customer;
		// Begian Register
		if(isset($_POST['Customer'], $_POST['User']))
		{
			$customer->attributes=$_POST['Customer'];
			$user->attributes=$_POST['User'];

			$user->password = md5($user->password);

			if($user->validate() && $customer->validate())
			{
				$user->create_time = date('Y-m-d h:i:s');
				$user->update_time = date('Y-m-d h:i:s');
				$user->visit_time = date('Y-m-d h:i:s');
				$user->ipaddress = Yii::app()->request->getUserHostAddress();
				$user->status = 1;
				$user->active = 1;
				$user->level = 2;
				$user->save();
				$customer->created_date = date('Y-m-d h:i:s');
				$customer->status = 1;
				$customer->province_id = 1;
				$customer->regency_id = 1;
				$customer->district_id = 1;
				$customer->village_id = 1;
				$customer->user_id = $user->id_user;
				$customer->save();
				$this->redirect(array('site/admin'));
			}
		}		
	}
}