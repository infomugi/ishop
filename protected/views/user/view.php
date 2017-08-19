<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$customer->fullname,
	);

$this->pageTitle='Profile - '.$customer->fullname;
?>
<section class="col-xs-12">
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Customer'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Customer'));
				?>
				<?php echo CHtml::link('Edit Profile', 
					array('profile', 'id'=>$model->id_user,
						), array('class' => 'btn btn-info', 'title'=>'Edit Customer'));
						?>
						<HR>
							<h2><i class="fa fa-github-alt"/></i> Profil</h2>
							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$customer,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(
									'created_date',
									'fullname',
									array('name'=>'gender','value'=>User::model()->gender($customer->gender)),
									'birth',
									'address',
									'zip',
									'phone',
									array('name'=>'status','value'=>User::model()->status($customer->status)),
									),
									)); ?>

									<h2><i class="fa fa-user"/></i> Account</h2>
									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											'create_time',
											'update_time',
											'visit_time',
											'email',
											'username',
											'password',
											'level',
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

