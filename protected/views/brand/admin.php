<?php
/* @var $this BrandController */
/* @var $model Brand */

$this->breadcrumbs=array(
	'Brands'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Brand';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Add Brand',
		array('create'),
		array('class' => 'btn btn-success'));
		?>
		<?php echo CHtml::link('List Brand',
			array('index'),
			array('class' => 'btn btn-success'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'brand-grid',
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
						'description',

						array(
							'header'=>'Action',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>

					</section>