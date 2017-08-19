<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->id_employee=>array('view','id'=>$model->id_employee),
	'Edit',
	);

	$this->pageTitle='Edit Employee';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model,'user'=>$user)); ?>