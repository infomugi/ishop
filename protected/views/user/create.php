<?php
/* @var $this CustomerController */
/* @var $model Customer */
$this->breadcrumbs=array(
  'Users'=>array('index'),
  'Register',
  );

$this->pageTitle='Signup';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model,'customer'=>$customer)); ?>
