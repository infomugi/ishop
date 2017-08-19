<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs=array(
	'Promotions'=>array('index'),
	$model->name=>array('view','id'=>$model->id_promotion),
	'Edit',
	);

	$this->pageTitle='Edit Image Promotion';
	?>

	<?php echo $this->renderPartial('_form_image', array('model'=>$model)); ?>