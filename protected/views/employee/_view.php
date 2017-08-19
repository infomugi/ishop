<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

			<?php echo CHtml::link(CHtml::encode(ucwords($data->fullname)), array('view', 'id'=>$data->id_employee)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'fullname',
						'phone',
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
			<STYLE>
				th{width:150px;}
			</STYLE>
