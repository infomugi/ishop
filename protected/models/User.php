<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id_user
 * @property string $create_time
 * @property string $update_time
 * @property string $visit_time
 * @property string $email
 * @property string $username
 * @property string $password
 * @property integer $level
 * @property string $image
 * @property string $ipaddress
 * @property integer $active
 * @property integer $status
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, username, password', 'required'),
			array('level, active, status', 'numerical', 'integerOnly'=>true),
			array('email, username, password, image', 'length', 'max'=>255),
			array('ipaddress', 'length', 'max'=>25),
			array('email','email'),
			array('username, email','unique'),
			array('create_time, update_time, visit_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, create_time, update_time, visit_time, email, username, password, level, image, ipaddress, active, status', 'safe', 'on'=>'search'),
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
			'id_user' => 'Id User',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'visit_time' => 'Visit Time',
			'email' => 'Email',
			'username' => 'Username',
			'password' => 'Password',
			'level' => 'Level',
			'image' => 'Image',
			'ipaddress' => 'IP Address',
			'active' => 'Active',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('visit_time',$this->visit_time,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('level',$this->level);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('ipaddress',$this->ipaddress,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function status($data){
		if($data==1){
			return "Aktif";
		}
		else if($data==2){
			return "Blokir";
		}
		else{
			return "Tidak Aktif";
		}
	}	

	public function gender($data){
		if($data==1){
			return "Laki-laki";
		}else{
			return "Perempuan";
		}
	}

	public function level($data){
		if($data==1){
			return "Administrator";
		}else{
			return "Customer";
		}
	}		
}
