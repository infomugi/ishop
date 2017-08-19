<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('profile'),
	$customer->fullname,
	);

$this->pageTitle='Profile - '.$customer->fullname;
?>

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
		
		),
		)); ?>

		<?php if(YII::app()->user->record->level==1): ?>
			<h2><i class="fa fa-info"/></i> Account</h2>
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
					'email',
					'username',
					array('name'=>'level','value'=>User::model()->level($model->level)),
					array('name'=>'active','value'=>User::model()->status($model->active)),
					'ipaddress',
					),
					)); ?>
				<?php endif; ?>

				<STYLE>
					th{width:150px;}
				</STYLE>

