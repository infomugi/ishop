<?php
/* @var $this BankDestinationController */
/* @var $model BankDestination */

$this->breadcrumbs=array(
	'Bank Destinations'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add BankDestination';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>