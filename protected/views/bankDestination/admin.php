<?php
/* @var $this BankDestinationController */
/* @var $model BankDestination */

$this->breadcrumbs=array(
	'Bank Destinations'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Bank Tujuan';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Add Bank Tujuan',
		array('create'),
		array('class' => 'btn btn-success'));
		?>
		<?php echo CHtml::link('List Bank Tujuan',
			array('index'),
			array('class' => 'btn btn-success'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'bank-destination-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						'code',
						'bank_name',
						'name',
						'branch',
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