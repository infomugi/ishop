<?php
/* @var $this BankSenderController */
/* @var $model BankSender */

$this->breadcrumbs=array(
	'Bank Sender'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Bank Pengirim';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Add Bank Pengirim',
		array('create'),
		array('class' => 'btn btn-success'));
		?>
		<?php echo CHtml::link('List Bank Pengirim',
			array('index'),
			array('class' => 'btn btn-success'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'bank-sender-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						'name',
						'code',
						array('name'=>'status','value'=>'User::model()->status($data->status)'),

						array(
							'header'=>'Action',
							'template'=>'{view}{update}',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>

					</section>