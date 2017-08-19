<?php
/* @var $this BankDestinationController */
/* @var $model BankDestination */

$this->breadcrumbs=array(
	'Bank Destinations'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Bank Tujuan';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Bank Tujuan'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Bank Tujuan'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Bank Tujuan'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_bank_destination,
						), array('class' => 'btn btn-info', 'title'=>'Edit Bank Tujuan'));
						?>
						<?php echo CHtml::link('Delete', 
							array('delete', 'id'=>$model->id_bank_destination,
								),  array('class' => 'btn btn-warning', 'title'=>'Hapus Bank Tujuan'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											// 'id_bank_destination',
											'code',
											'bank_name',
											'name',
											'branch',
											array('name'=>'status','value'=>User::model()->status($model->status)),
											),
											)); ?>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

