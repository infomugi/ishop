<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs=array(
	'Promotions'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Promotion';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>