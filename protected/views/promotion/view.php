<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs=array(
	'Promotions'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Promotion - '.$model->name;
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Promotion'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Promotion'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Promotion'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_promotion,
						), array('class' => 'btn btn-info', 'title'=>'Edit Promotion'));
						?>
						<?php echo CHtml::link('Image', 
							array('image', 'id'=>$model->id_promotion,
								), array('class' => 'btn btn-info', 'title'=>'Edit Image Promotion'));
								?>						
								<?php echo CHtml::link('Delete', 
									array('delete', 'id'=>$model->id_promotion,
										),  array('class' => 'btn btn-warning', 'title'=>'Hapus Promotion'));
										?>

										<HR>

											<div class="col-xs-12"> 
												<div class="form-group">
													<div class="col-md-12">  
														<img src="<?php echo YII::app()->baseUrl."/image/promotion/big/".$model->image;?>" class="img-responsive" alt="<?php echo $model->name; ?>" title="<?php echo $model->name; ?>">
														<div class="alert alert-info">(Rekomendasi Ukuran Gambar : <code>650px</code> X <code>270px</code>)</div>

													</div>
												</div>
											</div>


											<?php $this->widget('zii.widgets.CDetailView', array(
												'data'=>$model,
												'htmlOptions'=>array("class"=>"table"),
												'attributes'=>array(
													'name',
													'image',
													array('name'=>'status','value'=>User::model()->status($model->status)),
													),
													)); ?>

												</section>

												<STYLE>
													th{width:150px;}
												</STYLE>

