<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Product - '.$model->name;
?>


<?php echo CHtml::link('Add',
	array('create'),
	array('class' => 'btn btn-success','title'=>'Add Product'));
	?>
	<?php echo CHtml::link('Add Image',
		array('image/create', 'product'=>$model->id_product),
		array('class' => 'btn btn-success','title'=>'Add Product'));
		?>		
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Product'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Product'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_product,
						), array('class' => 'btn btn-info', 'title'=>'Edit Product'));
						?>
						<?php echo CHtml::link('Image', 
							array('image', 'id'=>$model->id_product,
								), array('class' => 'btn btn-info', 'title'=>'Edit Image'));
								?>
								<?php echo CHtml::link('Delete', 
									array('delete', 'id'=>$model->id_product,
										),  array('class' => 'btn btn-warning', 'title'=>'Hapus Product'));
										?>
										<?php echo CHtml::link('View', 
											array('detail', 'id'=>$model->id_product,
												),  array('class' => 'btn btn-danger', 'title'=>'View Product'));
												?>

												<HR>
													<div class="col-md-8"> 
														<h3><i class="fa fa-archive"/></i> Info</h3>
														<?php $this->widget('zii.widgets.CDetailView', array(
															'data'=>$model,
															'htmlOptions'=>array("class"=>"table"),
															'attributes'=>array(
																'code',
																'name',
																'description',
																array('name'=>'category_id','value'=>$model->Category->name),
																array('name'=>'sub_category_id','value'=>$model->Tag->name),
																array(
																	'label'=>'Price',
																	'type'=>'raw',
																	'value'=>Yii::app()->numberFormatter->format("Rp ###,###,###",$model->price),
																	),
																'discount',
																'keyword',
																'abstrack',
																),
																)); ?>
															</div>
															<div class="col-md-4"> 
																<h3><i class="fa fa-image"/></i> Image</h3>
																<img src="<?php echo YII::app()->baseUrl."/image/product/small/".$model->image; ?>"/>
															</div>
															<div class="col-md-12"> 
																<h3><i class="fa fa-eye"/></i> Spesification</h3>
																<?php $this->widget('zii.widgets.CDetailView', array(
																	'data'=>$model,
																	'htmlOptions'=>array("class"=>"table"),
																	'attributes'=>array(
																		array('name'=>'color','value'=>Product::model()->color($model->color)),
																		array('name'=>'status','value'=>Product::model()->status($model->status)),
																		'stock',
																		'spesification',
																		array('name'=>'weight','value'=>$model->weight . " KG"),
																		array('name'=>'brand_id','value'=>$model->Brand->name),
																		),
																		)); ?>	
																	</div>

																	<div class="col-md-6"> 
																		<h3><i class="fa fa-bar-chart"/></i> Statistik</h3>
																		<?php $this->widget('zii.widgets.CDetailView', array(
																			'data'=>$model,
																			'htmlOptions'=>array("class"=>"table"),
																			'attributes'=>array(
																				'views',
																				'likes',
																				'sales',
																				'rate',
																				),
																				)); ?>															
																			</div>							
																			<div class="col-md-6"> 
																				<h3><i class="fa fa-user"/></i> Detail</h3>
																				<?php $this->widget('zii.widgets.CDetailView', array(
																					'data'=>$model,
																					'htmlOptions'=>array("class"=>"table"),
																					'attributes'=>array(
	// 'id_product',
																						array('name'=>'created_id','value'=>Employee::model()->fullname($model->created_id)),
																						array('name'=>'update_id','value'=>Employee::model()->fullname($model->update_id)),
																						'created_date',
																						'update_date',
																						),
																						)); ?>		
																					</div>		

																					<?php
																					$thumbSmall=Yii::app()->phpThumb->create(Yii::getPathOfAlias('webroot')."/image/product/big/".$model->image);
																					$thumbSmall->resize(255,255);
																					$thumbSmall->save(Yii::getPathOfAlias('webroot')."/image/product/small/".$model->image);

																					$thumbMiddle=Yii::app()->phpThumb->create(Yii::getPathOfAlias('webroot')."/image/product/big/".$model->image);
																					$thumbMiddle->resize(500,500);
																					$thumbMiddle->save(Yii::getPathOfAlias('webroot')."/image/product/middle/".$model->image);
																					?>							


																					<STYLE>
																						th{width:150px;}
																					</STYLE>

