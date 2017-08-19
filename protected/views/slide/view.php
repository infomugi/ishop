<?php
/* @var $this SlideController */
/* @var $model Slide */

$this->breadcrumbs=array(
	'Slides'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Slide';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Slide'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Slide'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Slide'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_setting_slide,
						), array('class' => 'btn btn-info', 'title'=>'Edit Slide'));
						?>
						<?php echo CHtml::link('Image', 
							array('image', 'id'=>$model->id_setting_slide,
								), array('class' => 'btn btn-info', 'title'=>'Edit Image Slide'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											'name',
											'description',
											'image',
											array('name'=>'status','value'=>User::model()->status($model->status)),
											),
											)); ?>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

