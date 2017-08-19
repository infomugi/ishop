<?php
/* @var $this BankDestinationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bank Destinations',
	);

$this->pageTitle='List Bank Tujuan';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Add Bank Tujuan',
		array('create'),
		array('class' => 'btn btn-success'));
		?>
		<?php echo CHtml::link('Manage Bank Tujuan',
			array('admin'),
			array('class' => 'btn btn-success'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view',
					)); ?>

				</section>