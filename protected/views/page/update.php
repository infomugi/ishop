<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->title=>array('view','id'=>$model->id_page),
	'Edit',
	);

	$this->pageTitle='Edit Page';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>