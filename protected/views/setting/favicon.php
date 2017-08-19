<?php
/* @var $this SettingController */
/* @var $model Setting */

$this->breadcrumbs=array(
	'Settings'=>array('index'),
	$model->name=>array('view','id'=>$model->id_site),
	'Edit',
	);

	$this->pageTitle='Edit Favicon';
	?>

	<?php echo $this->renderPartial('_form_favicon', array('model'=>$model)); ?>