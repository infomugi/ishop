<?php

/**
 * This is the model class for table "customer".
 *
 * The followings are the available columns in table 'customer':
 * @property integer $id_customer
 * @property integer $user_id
 * @property string $fullname
 * @property integer $gender
 * @property string $birth
 * @property integer $province_id
 * @property integer $regency_id
 * @property integer $district_id
 * @property integer $village_id
 * @property string $address
 * @property string $zip
 * @property double $phone
 * @property integer $status
 * @property string $created_date
 */
class Customer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Customer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fullname, gender, phone', 'required'),
			array('user_id, gender, province_id, regency_id, district_id, village_id, status', 'numerical', 'integerOnly'=>true),
			array('phone', 'numerical'),
			array('fullname, address', 'length', 'max'=>255),
			array('zip', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_customer, user_id, fullname, gender, birth, province_id, regency_id, district_id, village_id, address, zip, phone, status, created_date', 'safe', 'on'=>'search'),
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
			'id_customer' => 'Id Customer',
			'user_id' => 'User ID',
			'fullname' => 'Nama Lengkap',
			'gender' => 'Jenis Kelamin',
			'birth' => 'Tanggal Lahir',
			'province_id' => 'Provinsi',
			'regency_id' => 'Kota / Kabupaten',
			'district_id' => 'Kecamatan',
			'village_id' => 'Desa',
			'address' => 'Alamat',
			'zip' => 'Kode POS',
			'phone' => 'Telephone',
			'status' => 'Status',
			'created_date' => 'Tanggal Register',
			);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_customer',$this->id_customer);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('birth',$this->birth,true);
		$criteria->compare('province_id',$this->province_id);
		$criteria->compare('regency_id',$this->regency_id);
		$criteria->compare('district_id',$this->district_id);
		$criteria->compare('village_id',$this->village_id);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('status',$this->status);
		$criteria->compare('created_date',$this->created_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	public function name($id){
		$data = self::model()->findByAttributes(array('user_id'=>$id));
		return $data->fullname;
	}	

	public function birth($id){
		$data = self::model()->findByAttributes(array('user_id'=>$id));
		return $data->birth;
	}

	public function address($id){
		$data = self::model()->findByAttributes(array('user_id'=>$id));
		return $data->address;
	}

	public function phone($id){
		$data = self::model()->findByAttributes(array('user_id'=>$id));
		return $data->phone;
	}				
}