<?php
/* @var $this LinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Links'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Link';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Link'));
		?>
		<?php echo CHtml::link('Add Sub Link', 
			array('linksub/create', 'id'=>$model->id_link,
				), array('class' => 'btn btn-info', 'title'=>'Add Sub Link'));
				?>		
				<?php echo CHtml::link('List',
					array('index'),
					array('class' => 'btn btn-success', 'title'=>'List Link'));
					?>
					<?php echo CHtml::link('Manage',
						array('admin'),
						array('class' => 'btn btn-success','title'=>'Manage Link'));
						?>
						<?php echo CHtml::link('Edit', 
							array('update', 'id'=>$model->id_link,
								), array('class' => 'btn btn-info', 'title'=>'Edit Link'));
								?>
								<?php echo CHtml::link('Delete', 
									array('delete', 'id'=>$model->id_link,
										),  array('class' => 'btn btn-warning', 'title'=>'Hapus Link'));
										?>

										<HR>

											<?php $this->widget('zii.widgets.CDetailView', array(
												'data'=>$model,
												'htmlOptions'=>array("class"=>"table"),
												'attributes'=>array(
													'name',
													'url',
													array('name'=>'type','value'=>Link::model()->type($model->type)),
													array('name'=>'status','value'=>User::model()->status($model->status)),
													),
													)); ?>

											<?php $this->widget('zii.widgets.grid.CGridView', array(
												'id'=>'link-sub-grid',
												'dataProvider'=>$dataProvider,
												'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
												'columns'=>array(


													'name',
													'url',

													array('name'=>'status','value'=>'User::model()->status($data->status)'),
													array(
														'class'=>'CButtonColumn',
														'template'=>'{update}{delete}',
														'buttons'=>array(
															'update'=>array('url'=>'Yii::app()->createUrl("linksub/update", array("id"=>$data->id_link_sub))'), 
															'delete'=>array('url'=>'Yii::app()->createUrl("linksub/delete", array("id"=>$data->id_link_sub))'), 
															),
														),
													),
													)); ?>

												</section>

												<STYLE>
													th{width:150px;}
												</STYLE>

