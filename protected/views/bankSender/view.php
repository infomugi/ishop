<?php
/* @var $this BankReceiptController */
/* @var $model BankReceipt */

$this->breadcrumbs=array(
	'Bank Receipts'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Bank Pengirim';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Bank Pengirim'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Bank Pengirim'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Bank Pengirim'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_bank_sender,
						), array('class' => 'btn btn-info', 'title'=>'Edit Bank Pengirim'));
						?>
						<?php echo CHtml::link('Delete', 
							array('delete', 'id'=>$model->id_bank_sender,
								),  array('class' => 'btn btn-warning', 'title'=>'Hapus Bank Pengirim'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											'name',
											'code',
											array('name'=>'status','value'=>User::model()->status($model->status)),
											),
											)); ?>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

