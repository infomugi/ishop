<?php
/* @var $this BankReceiptController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bank Receipts',
	);

$this->pageTitle='List Bank Pengirim';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Add Bank Pengirim',
		array('create'),
		array('class' => 'btn btn-success'));
		?>
		<?php echo CHtml::link('Manage Bank Pengirim',
			array('admin'),
			array('class' => 'btn btn-success'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view',
					)); ?>

				</section>