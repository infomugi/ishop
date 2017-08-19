<?php
/* @var $this BankReceiptController */
/* @var $model BankReceipt */

$this->breadcrumbs=array(
	'Bank Receipts'=>array('index'),
	$model->name=>array('view','id'=>$model->id_bank_sender),
	'Edit',
	);

	$this->pageTitle='Edit Bank Pengirim';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>