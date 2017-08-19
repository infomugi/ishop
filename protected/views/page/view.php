<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->title,
	);

$this->pageTitle='Detail Page';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Page'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Page'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Page'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_page,
						), array('class' => 'btn btn-info', 'title'=>'Edit Page'));
						?>
						<?php echo CHtml::link('Delete', 
							array('delete', 'id'=>$model->id_page,
								),  array('class' => 'btn btn-warning', 'title'=>'Hapus Page'));
								?>
								<?php echo CHtml::link('View', 
									array('detail', 'id'=>$model->id_page,
										), array('class' => 'btn btn-info', 'title'=>'View Page'));
										?>

										<HR>
											<h3><?php echo CHtml::encode($model->title); ?></h3>
											<p><?php echo $model->description; ?></p>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

