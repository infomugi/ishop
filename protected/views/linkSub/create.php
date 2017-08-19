<?php
/* @var $this LinkSubController */
/* @var $model LinkSub */

$this->breadcrumbs=array(
	'Link Subs'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add LinkSub';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>