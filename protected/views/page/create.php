<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Page';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>