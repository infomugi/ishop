<?php
/* @var $this BankReceiptController */
/* @var $model BankReceipt */

$this->breadcrumbs=array(
	'Bank Receipts'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Bank Pengirim';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>