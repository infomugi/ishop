<?php
/* @var $this BankDestinationController */
/* @var $model BankDestination */

$this->breadcrumbs=array(
	'Bank Destinations'=>array('index'),
	$model->name=>array('view','id'=>$model->id_bank_destination),
	'Edit',
	);

	$this->pageTitle='Edit BankDestination';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>