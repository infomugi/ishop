<?php

/**
 * This is the model class for table "link_sub".
 *
 * The followings are the available columns in table 'link_sub':
 * @property integer $id_link_sub
 * @property string $name
 * @property string $url
 * @property integer $link_id
 * @property integer $status
 */
class LinkSub extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'link_sub';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, url, link_id, status', 'required'),
			array('link_id, status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>150),
			array('url', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_link_sub, name, url, link_id, status', 'safe', 'on'=>'search'),
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
			'id_link_sub' => 'Id Link Sub',
			'name' => 'Name',
			'url' => 'Url',
			'link_id' => 'Link',
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

		$criteria->compare('id_link_sub',$this->id_link_sub);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('link_id',$this->link_id);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LinkSub the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getLink($data){
		$sql = "SELECT * FROM link_sub WHERE link_id=".$data." ORDER BY name ASC ";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}	

	public static function getTotalLink($data){
		$sql = "SELECT COUNT(id_link_sub) FROM link_sub WHERE link_id=".$data."";
		return Yii::app()->db->createCommand($sql)->queryScalar();
	}		
}
