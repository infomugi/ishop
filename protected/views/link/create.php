<?php
/* @var $this LinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Links'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Link';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>