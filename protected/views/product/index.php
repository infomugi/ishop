<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Products',
	);

$this->pageTitle='List Product';
?>


<?php echo CHtml::link('Add Product',
	array('create'),
	array('class' => 'btn btn-success'));
	?>
	<?php echo CHtml::link('Manage Product',
		array('admin'),
		array('class' => 'btn btn-success'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				)); ?>

