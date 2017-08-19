<?php
/* @var $this LinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Links'=>array('index'),
	$model->name=>array('view','id'=>$model->id_link),
	'Edit',
	);

	$this->pageTitle='Edit Link';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>