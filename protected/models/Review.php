<?php

/**
 * This is the model class for table "product_review".
 *
 * The followings are the available columns in table 'product_review':
 * @property integer $id_product_review
 * @property string $date
 * @property integer $customer_id
 * @property integer $price
 * @property integer $value
 * @property integer $quality
 * @property integer $summary
 * @property string $description
 * @property integer $status
 */
class Review extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_review';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('price, value, quality, summary, description', 'required'),
			array('customer_id, product_id, price, value, quality, status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_product_review, date, customer_id, price, value, quality, summary, description, status', 'safe', 'on'=>'search'),
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
			'Customer'=>array(self::BELONGS_TO,'Customer','customer_id'),	
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_product_review' => 'Id Product Review',
			'date' => 'Tanggal',
			'customer_id' => 'Pelanggan',
			'product_id' => 'Prodak',
			'price' => 'Harga',
			'value' => 'Nilai',
			'quality' => 'Kualitas',
			'summary' => 'Keseluruhan',
			'description' => 'Komentar',
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

		$criteria->compare('id_product_review',$this->id_product_review);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('product_id',$this->product_id);		
		$criteria->compare('price',$this->price);
		$criteria->compare('value',$this->value);
		$criteria->compare('quality',$this->quality);
		$criteria->compare('summary',$this->summary,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Review the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}	

	public static function getReview($data){
		$sql = "SELECT customer.fullname as name, 
		product_review.summary as summary, 
		product_review.price as price,
		product_review.value as value, 
		product_review.quality as quality, 
		product_review.date as date 
		FROM customer RIGHT JOIN product_review ON product_review.customer_id=customer.user_id 
		WHERE product_review.product_id=".$data."
		ORDER BY product_review.date DESC LIMIT 3";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();	
	}

	public function summary($data){
		if($data==1){
			return "Biasa";
		}else if($data==2){
			return "Bagus";
		}else if($data==3){
			return "Sangat Bagus";
		}else{
			return "Tidak Diketahui";
		}
	}

	public function rate($data){
			$rate = $data;
			$unrate = 5 - $rate;
			for($a = 1; $a <= $rate; $a++){ 
				echo '<i class="fa fa-star"></i> ';	
			}
	}

	public function unrate($data){
			$rate = $data;
			$unrate = 5 - $rate;
			for($a = 1; $a <= $unrate; $a++){ 
				echo '<i class="fa fa-star-o"></i> ';
			}
	}	


}


