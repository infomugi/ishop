<?php
/* @var $this LinkController */
/* @var $data Link */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id_link)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
				<?php echo CHtml::encode($data->name); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
				<?php echo CHtml::encode($data->url); ?>
				<br />

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
