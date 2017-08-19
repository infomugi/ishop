<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Category - '.$model->name;
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Category'));
		?>
		<?php echo CHtml::link('Add Tag',
			array('tag/create', 'id'=>$model->id_category),
			array('class' => 'btn btn-success','title'=>'Add Tag'));
			?>		
			<?php echo CHtml::link('List',
				array('index'),
				array('class' => 'btn btn-success', 'title'=>'List Category'));
				?>
				<?php echo CHtml::link('Manage',
					array('admin'),
					array('class' => 'btn btn-success','title'=>'Manage Category'));
					?>
					<?php echo CHtml::link('Edit', 
						array('update', 'id'=>$model->id_category,
							), array('class' => 'btn btn-info', 'title'=>'Edit Category'));
							?>
							<?php echo CHtml::link('Image', 
								array('image', 'id'=>$model->id_category,
									), array('class' => 'btn btn-info', 'title'=>'Edit Image'));
									?>							

									<HR>


										<?php $this->widget('zii.widgets.grid.CGridView', array(
											'id'=>'tag-grid',
											'dataProvider'=>$dataProvider,
											'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
											'columns'=>array(



												array('name'=>'category_id','value'=>'$data->Category->name'),
												'name',
												array('name'=>'status','value'=>'User::model()->status($data->status)'),
												),
												)); ?>

											</section>

											<STYLE>
												th{width:150px;}
											</STYLE>

