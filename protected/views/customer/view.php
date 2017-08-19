<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->id_customer,
	);

$this->pageTitle='Detail Customer - '.$model->fullname;
?>


<section class="col-xs-12">

		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Customer'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Customer'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_customer,
						), array('class' => 'btn btn-info', 'title'=>'Edit Customer'));
						?>
						<?php echo CHtml::link('Delete', 
							array('delete', 'id'=>$model->id_customer,
								),  array('class' => 'btn btn-warning', 'title'=>'Hapus Customer'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											// 'user_id',
											'fullname',
											'gender',
											'birth',
											// 'province_id',
											// 'regency_id',
											// 'district_id',
											// 'village_id',
											'address',
											'zip',
											'phone',
											'status',
											'regsiter_date',
											),
											)); ?>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

