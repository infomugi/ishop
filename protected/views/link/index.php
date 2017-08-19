<?php
/* @var $this LinkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Links',
	);

$this->pageTitle='List Link';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Add Link',
		array('create'),
		array('class' => 'btn btn-success'));
		?>
		<?php echo CHtml::link('Manage Link',
			array('admin'),
			array('class' => 'btn btn-success'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view',
					)); ?>

				</section>