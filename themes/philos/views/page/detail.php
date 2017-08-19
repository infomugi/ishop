<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->title,
	);

$this->pageTitle=$model->title;
?>
<p><?php echo $model->description; ?></p>


