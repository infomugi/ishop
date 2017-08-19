<?php

/**
 * This is the model class for table "setting".
 *
 * The followings are the available columns in table 'setting':
 * @property integer $id_site
 * @property string $name
 * @property string $description
 * @property string $keywords
 * @property string $favicon
 * @property string $logo
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $facebook
 * @property string $instagram
 * @property string $twitter
 * @property integer $status
 */
class Setting extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'setting';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, keywords, favicon, logo, address, phone, email, facebook, instagram, twitter, status', 'required'),
			array('status, phone', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('keywords, email, facebook, instagram, twitter', 'length', 'max'=>150),
			array('favicon, logo, phone', 'length', 'max'=>255),
			array('email','email'),
			array('favicon, logo', 'file', 'allowEmpty'=>true, 'types'=>'jpg, gif, png'), 
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_site, name, description, keywords, favicon, logo, address, phone, email, facebook, instagram, twitter, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_site' => 'Id Site',
			'name' => 'Name',
			'description' => 'Description',
			'keywords' => 'Keywords',
			'favicon' => 'Favicon',
			'logo' => 'Logo',
			'address' => 'Address',
			'phone' => 'Phone',
			'email' => 'Email',
			'facebook' => 'Facebook',
			'instagram' => 'Instagram',
			'twitter' => 'Twitter',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_site',$this->id_site);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('favicon',$this->favicon,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('instagram',$this->instagram,true);
		$criteria->compare('twitter',$this->twitter,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Setting the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function name(){
		$data = self::model()->findBypk(1);
		return $data->name;
	}

	public function phone(){
		$data = self::model()->findBypk(1);
		return $data->phone;
	}	

	public function email(){
		$data = self::model()->findBypk(1);
		return $data->email;
	}	

	public function address(){
		$data = self::model()->findBypk(1);
		return $data->address;
	}	

	public function logo(){
		$data = self::model()->findBypk(1);
		return $data->logo;
	}		

	public function favicon(){
		$data = self::model()->findBypk(1);
		return $data->favicon;
	}	

	public function facebook(){
		$data = self::model()->findBypk(1);
		return $data->facebook;
	}	

	public function twitter(){
		$data = self::model()->findBypk(1);
		return $data->twitter;
	}	

	public function instagram(){
		$data = self::model()->findBypk(1);
		return $data->instagram;
	}

	public function keywords(){
		$data = self::model()->findBypk(1);
		return $data->keywords;
	}

	public function description(){
		$data = self::model()->findBypk(1);
		return $data->description;
	}	

	public function totalCustomer(){
		return Yii::app()->db->createCommand('SELECT COUNT(id_customer) FROM customer WHERE month(created_date)='.date('m').'')->queryScalar();
	}

	public function totalTransaction(){
		return Yii::app()->db->createCommand('SELECT COUNT(id_transaction) FROM transaction WHERE status = 3 OR status = 4  AND month(date_order)='.date('m').'')->queryScalar();
	}

	public function paymentTransaction(){
		return Yii::app()->db->createCommand('SELECT SUM(payment_total) FROM transaction WHERE status = 3 OR status = 4 AND month(date_order)='.date('m').'')->queryScalar();							
	}
}
