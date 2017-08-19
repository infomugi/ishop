<?php
/* @var $this LinkSubController */
/* @var $model LinkSub */

$this->breadcrumbs=array(
	'Link Subs'=>array('index'),
	$model->name=>array('view','id'=>$model->id_link_sub),
	'Edit',
	);

	$this->pageTitle='Edit LinkSub';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>