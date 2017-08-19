<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Employee';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model,'user'=>$user)); ?>