<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Newss'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add News';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>