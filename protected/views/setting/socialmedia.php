<?php
/* @var $this SettingController */
/* @var $model Setting */

$this->breadcrumbs=array(
	'Settings'=>array('index'),
	$model->name=>array('view','id'=>$model->id_site),
	'Edit',
	);

	$this->pageTitle='Edit Social Media';
	?>

	<?php echo $this->renderPartial('_form_socialmedia', array('model'=>$model)); ?>