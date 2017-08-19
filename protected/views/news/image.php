<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Newss'=>array('index'),
	$model->name=>array('view','id'=>$model->id_news),
	'Image',
	);

	$this->pageTitle='Image News';
	?>

	<?php echo $this->renderPartial('_form_image', array('model'=>$model)); ?>