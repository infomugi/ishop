<?php
/* @var $this SlideController */
/* @var $model Slide */

$this->breadcrumbs=array(
	'Slides'=>array('index'),
	$model->name=>array('view','id'=>$model->id_setting_slide),
	'Edit Slide',
	);

	$this->pageTitle='Edit Image Slide';
	?>

	<?php echo $this->renderPartial('_form_image', array('model'=>$model)); ?>