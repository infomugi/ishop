<?php
/* @var $this SettingController */
/* @var $model Setting */

$this->breadcrumbs=array(
	'Settings'=>array('index'),
	$model->name=>array('view','id'=>$model->id_site),
	'SEO',
	);

	$this->pageTitle='Edit SEO';
	?>

	<?php echo $this->renderPartial('_form_seo', array('model'=>$model)); ?>