<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id_employee
 * @property string $created_date
 * @property integer $user_id
 * @property string $fullname
 * @property integer $gender
 * @property string $birth
 * @property string $address
 * @property string $zip
 * @property double $phone
 * @property integer $division_id
 * @property integer $status
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, fullname, gender, birth, address, zip, phone, division_id, status', 'required'),
			array('user_id, gender, division_id, status', 'numerical', 'integerOnly'=>true),
			array('phone', 'numerical'),
			array('fullname', 'length', 'max'=>255),
			array('zip', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_employee, created_date, user_id, fullname, gender, birth, address, zip, phone, division_id, status', 'safe', 'on'=>'search'),
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
			'Division'=>array(self::BELONGS_TO,'Division','division_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_employee' => 'Id Employee',
			'created_date' => 'Tanggal Register',
			'user_id' => 'Nama Pengguna',
			'fullname' => 'Nama Lengkap',
			'gender' => 'Jenis Kelamin',
			'birth' => 'Tanggal Lahir',
			'address' => 'Alamat',
			'zip' => 'Kode POS',
			'phone' => 'HP',
			'division_id' => 'Bagian',
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

		$criteria->compare('id_employee',$this->id_employee);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('birth',$this->birth,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('division_id',$this->division_id);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function fullname(){
		$data = self::model()->findByAttributes(array('user_id'=>YII::app()->user->id));
		return $data->fullname;
	}	

	public function name($id){
		$data = self::model()->findByAttributes(array('user_id'=>$id));
		return $data->fullname;
	}	
}
