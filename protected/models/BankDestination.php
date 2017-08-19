<?php

/**
 * This is the model class for table "bank_destination".
 *
 * The followings are the available columns in table 'bank_destination':
 * @property integer $id_bank_destination
 * @property string $code
 * @property string $bank_name
 * @property string $name
 * @property string $branch
 * @property integer $status
 */
class BankDestination extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bank_destination';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, bank_name, name, branch, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('code, branch', 'length', 'max'=>50),
			array('bank_name', 'length', 'max'=>100),
			array('name', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_bank_destination, code, bank_name, name, branch, status', 'safe', 'on'=>'search'),
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
			'id_bank_destination' => 'Id Bank Destination',
			'code' => 'Code',
			'bank_name' => 'Bank Name',
			'name' => 'Name',
			'branch' => 'Branch',
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

		$criteria->compare('id_bank_destination',$this->id_bank_destination);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('branch',$this->branch,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BankDestination the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
