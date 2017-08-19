<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Newss'=>array('index'),
	$model->name=>array('view','id'=>$model->id_news),
	'Edit',
	);

	$this->pageTitle='Edit News';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>