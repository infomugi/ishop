<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs=array(
	'Promotions'=>array('index'),
	$model->name=>array('view','id'=>$model->id_promotion),
	'Edit',
	);

	$this->pageTitle='Edit Promotion';
	?>

	<?php echo $this->renderPartial('_form_update', array('model'=>$model)); ?>