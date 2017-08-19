<?php

/**
 * This is the model class for table "transaction".
 *
 * The followings are the available columns in table 'transaction':
 * @property integer $id_transaction
 * @property string $code
 * @property string $date_order
 * @property string $date_confirmation
 * @property string $date_verification
 * @property integer $customer_id
 * @property integer $confirmation_id
 * @property integer $verification_id
 * @property integer $verification_status
 * @property integer $payment_method
 * @property integer $payment_total
 * @property string $payment_file
 * @property integer $payment_bank_id
 * @property integer $payment_bank_sender_id
 * @property string $payment_bank_name
 * @property integer $payment_bank_code
 * @property integer $payment_bank_branch
 * @property integer $payment_bank_pay
 * @property integer $shipping_id
 * @property string $shipping_date
 * @property integer $shipping_type
 * @property integer $shipping_brand
 * @property integer $shipping_code
 * @property integer $status
 */
class Transaction extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, date_order, customer_id, confirmation_id, verification_id, payment_method, payment_total, payment_file, shipping_type, shipping_brand, shipping_code, status', 'required','on'=>'create'),
			array('confirmation_id, payment_file, date_confirmation, payment_bank_id, payment_bank_name, payment_bank_code, payment_bank_branch, payment_bank_pay, payment_bank_sender_id', 'required','on'=>'confirmation'),
			array('payment_method, payment_total, date_order, payment_bank_id, shipping_address', 'required','on'=>'checkout'),
			array('verification_id, date_verification, verification_status', 'required','on'=>'verification'),
			array('status', 'required','on'=>'confirmationreceipt'),
			array('shipping_id, shipping_date, shipping_type, shipping_brand, shipping_code', 'required','on'=>'shipping'),
			array('customer_id, confirmation_id, verification_id, payment_method, payment_total, shipping_type, shipping_brand, status, payment_bank_id, verification_status', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>25),
			array('shipping_code', 'length', 'max'=>35),
			array('payment_bank_code, payment_bank_branch, payment_bank_name', 'length', 'max'=>50),
			array('payment_file, token, shipping_address', 'length', 'max'=>255),
			array('payment_file', 'file', 'allowEmpty'=>true, 'types'=>'jpg, gif, png', 'on'=>'confirmation'), 
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_transaction, code, date_order, date_confirmation, date_verification, customer_id, confirmation_id, verification_id, payment_method, payment_total, payment_file, shipping_type, shipping_brand, shipping_code, status', 'safe', 'on'=>'search'),
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
			'CustomerAccount'=>array(self::BELONGS_TO,'user','customer_id'),

			'Customer'=>array(self::BELONGS_TO,'user','customer_id'),

			//Konfirmasi Order
			'Confirmation'=>array(self::BELONGS_TO,'user','confirmation_id'),
			
			//Verifikasi
			'Verification'=>array(self::BELONGS_TO,'user','verification_id'),

			//Bank Pengirim
			'Sender'=>array(self::BELONGS_TO,'BankSender','payment_bank_sender_id'),
			
			//Bank Penerima
			'Destination'=>array(self::BELONGS_TO,'BankDestination','payment_bank_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_transaction' => 'Id Transaction',
			'code' => 'Kode Transaksi',
			'date_order' => 'Tanggal Order',
			'date_confirmation' => 'Tanggal Konfirmasi Pembayaran',
			'date_verification' => 'Tanggal Verifikasi Transaksi',
			'customer_id' => 'Pelanggan',
			'confirmation_id' => 'Dikonfirmasi Oleh',
			'verification_id' => 'Diverifikasi Oleh',
			'verification_status' => 'Status Pembayaran',
			'payment_method' => 'Metode Pembayaran',
			'payment_total' => 'Total Tagihan',
			'payment_file' => 'Bukti Transfer',
			'payment_bank_id' => 'Tujuan Bank',
			'payment_bank_sender_id' => 'Bank Pengirim',
			'payment_bank_name' => 'Rekening Atas Nama',
			'payment_bank_code' => 'Nomor Rekening',
			'payment_bank_branch' => 'Cabang Bank',
			'payment_bank_pay' => 'Jumlah Transfer',
			'shipping_date' => 'Tanggal Pengiriman',
			'shipping_type' => 'Metode Pengiriman',
			'shipping_brand' => 'Kurir Pengiriman',
			'shipping_code' => 'NO Resi Pengiriman',
			'shipping_address' => 'Alamat Lengkap Pengiriman',
			'status' => 'Status Transaksi',
			'receiver' => 'Informasi Penerima',
			'sender' => 'Informasi Pengirim',
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

		$criteria->compare('id_transaction',$this->id_transaction);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('date_order',$this->date_order,true);
		$criteria->compare('date_confirmation',$this->date_confirmation,true);
		$criteria->compare('date_verification',$this->date_verification,true);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('confirmation_id',$this->confirmation_id);
		$criteria->compare('verification_id',$this->verification_id);
		$criteria->compare('payment_method',$this->payment_method);
		$criteria->compare('payment_total',$this->payment_total);
		$criteria->compare('payment_file',$this->payment_file,true);
		$criteria->compare('shipping_type',$this->shipping_type);
		$criteria->compare('shipping_brand',$this->shipping_brand);
		$criteria->compare('shipping_code',$this->shipping_code);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function total(){
		$criteria= new CDbCriteria();
		$criteria->distinct = true;
		$criteria->group = 'product_id';
		$criteria->order = 'product_id';
		$criteria->condition = 'status=0 AND customer_id='.YII::app()->user->id;
		$totalBeli=new CActiveDataProvider('Order', array(
			'criteria'=>$criteria,
			'pagination'=>false,
			));

		$beli =  $totalBeli->totalItemCount;
		$total=0;
		for ($i=0; $i < $beli; $i++) { 
			$total = Yii::app()->db->createCommand('
				SELECT SUM((orders.quantity*product.price)-(product.price*product.discount/100)) FROM transaction_detail as orders LEFT JOIN product ON orders.product_id=product.id_product WHERE orders.status=0 AND orders.customer_id='.YII::app()->user->id.'
				')->queryScalar();
		}

		if($total==null){
			return "0";
		}else{
			return $total;
		}

	}

	public function grandtotal($data){
		$criteria= new CDbCriteria();
		$criteria->distinct = true;
		$criteria->group = 'product_id';
		$criteria->order = 'product_id';
		$criteria->condition = 'transaction_id='.$data;
		$totalBeli=new CActiveDataProvider('Order', array(
			'criteria'=>$criteria,
			'pagination'=>false,
			));

		$beli =  $totalBeli->totalItemCount;
		$total=0;
		for ($i=0; $i < $beli; $i++) { 
			$total = Yii::app()->db->createCommand('
				SELECT SUM((orders.quantity*product.price)-(product.price*product.discount/100)) as Jumlah FROM transaction_detail as orders LEFT JOIN product ON orders.product_id=product.id_product WHERE orders.transaction_id='.$data.'
				')->queryScalar();
		}

		if($total==null){
			return "0";
		}else{
			return $total;
		}

	}	

	public function status($data){
		if($data==0){
			return "Unpaid";
		}else if($data==1){
			return "Telah di Transfer";
		}else if($data==2){
			return "Sudah di Verifikasi";
		}else if($data==3){
			return "Proses Pengiriman Barang";
		}else if($data==4){
			return "Barang di Terima";			
		}else{
			return "Tidak di Ketahui";
		}
	}

	public function method($data){
		if($data==1){
			return "Transfer via Bank";
		}else{
			return "Belum di Kirim";
		}
	}

	public function bank($data){
		if($data==1){
			return "Bank BCA";
		}else if($data==2){
			return "Bank Mandiri";
		}else{
			return "Bank BNI";
		}
	}	


	public function color($data){
		if($data==1){
			return "warning";
		}else if($data==2){
			return "info";
		}else if($data==3){
			return "success";
		}else{
			return "danger";
		}
	}	

	public function verification($data){
		if($data==1){
			return "Valid";
		}else{
			return "Tidak Valid";
		}
	}	

	public function coureer($data){
		if($data==1){
			return "JNE";
		}else if($data==2){
			return "TIKI";
		}else if($data==3){
			return "POS-Indonesia";
		}else{
			return "Belum di Kirim";
		}
	}	

	public function yearReport($data){
		$nilai = Yii::app()->db->createCommand('
			SELECT sum(payment_total) FROM (transaction) WHERE status IN (3,4) AND (Month(date_order)='.$data.') AND (YEAR(date_order)='.date('Y').') GROUP BY (Month(date_order)='.$data.')
			')->queryScalar();

		if($nilai==""){
			return "0";
		}else{
			return $nilai;
		}
	}

	public function monthReport($data){
		$nilai = Yii::app()->db->createCommand('
			SELECT sum(transaction_detail.quantity) FROM (transaction_detail) 
			LEFT JOIN transaction 
			ON transaction_detail.transaction_id = transaction.id_transaction
			WHERE transaction.status IN (3,4) 
			AND (Month(transaction.date_order)='.$data.') 
			AND (YEAR(transaction.date_order)='.date('Y').') 
			GROUP BY (Month(transaction.date_order)='.$data.')
			')->queryScalar();

		if($nilai==""){
			return "0";
		}else{
			return $nilai;
		}
	}

	public function quantity($data){
		return $jumlahbeli = Yii::app()->db->createCommand('
			SELECT SUM(quantity) 
			FROM transaction_detail 
			WHERE STATUS = 0 
			AND customer_id='.YII::app()->user->id.' 
			AND product_id='.$data.' 
			GROUP by product_id
			')->queryScalar();
	}

	public function quantityTransaction($product,$customer){
		return $jumlahbeli = Yii::app()->db->createCommand('
			SELECT SUM(quantity) 
			FROM transaction_detail 
			WHERE STATUS = 1 
			AND customer_id='.$customer.' 
			AND product_id='.$product.' 
			GROUP by product_id
			')->queryScalar();
	}		

	public function subtotal($price,$quantity){
		return $price * $quantity;
	}				
}
