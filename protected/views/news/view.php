<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Newss'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail News';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add News'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List News'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage News'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_news,
						), array('class' => 'btn btn-info', 'title'=>'Edit News'));
						?>
						<?php echo CHtml::link('Image', 
							array('image', 'id'=>$model->id_news,
								), array('class' => 'btn btn-info', 'title'=>'Image News'));
								?>						
								<?php echo CHtml::link('Delete', 
									array('delete', 'id'=>$model->id_news,
										),  array('class' => 'btn btn-warning', 'title'=>'Hapus News'));
										?>

										<HR>

											<?php $this->widget('zii.widgets.CDetailView', array(
												'data'=>$model,
												'htmlOptions'=>array("class"=>"table"),
												'attributes'=>array(
													'name',
													'description',
													'image',
													array('name'=>'category_id','value'=>$model->Category->name),
													array('name'=>'status','value'=>User::model()->status($model->status)),
													),
													)); ?>

											<?php
											$thumbSmall=Yii::app()->phpThumb->create(Yii::getPathOfAlias('webroot')."/image/news/big/".$model->image);
											$thumbSmall->cropFromCenter(125,125);
											$thumbSmall->save(Yii::getPathOfAlias('webroot')."/image/news/small/".$model->image);

											$thumbMiddle=Yii::app()->phpThumb->create(Yii::getPathOfAlias('webroot')."/image/news/big/".$model->image);
											$thumbMiddle->cropFromCenter(320,320);
											$thumbMiddle->save(Yii::getPathOfAlias('webroot')."/image/news/middle/".$model->image);
											?>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

