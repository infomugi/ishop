<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->id_employee,
	);

$this->pageTitle='Detail Employee - '.$model->fullname;
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Employee'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Employee'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Employee'));
				?>
				<?php echo CHtml::link('Edit Profile', 
					array('profile', 'id'=>$model->id_employee,
						), array('class' => 'btn btn-info', 'title'=>'Edit Employee'));
						?>
						

						<HR>
							<h2><i class="fa fa-github-alt"/></i> Profil</h2>
							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$model,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(
									'created_date',
									'fullname',
									array('name'=>'gender','value'=>User::model()->gender($model->gender)),
									'birth',
									'address',
									'zip',
									'phone',
									array('name'=>'division_id','value'=>$model->Division->name),
									array('name'=>'status','value'=>User::model()->status($model->status)),
									),
									)); ?>

									<h2><i class="fa fa-user"/></i> Account</h2>
									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$user,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											'create_time',
											'update_time',
											'visit_time',
											'fullname',
											'gender',
											'birth',
											'email',
											'username',
											'password',
											'level',
											'division',
											'image',
											'ipaddress',
											'active',
											'status',
											),
											)); ?>


										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

