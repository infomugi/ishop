<?php
/* @var $this CustomerController */
/* @var $data Customer */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->fullname), array('view', 'id'=>$data->id_customer)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
				<?php echo CHtml::encode($data->fullname); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
				<?php echo CHtml::encode($data->gender); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('birth')); ?>:</b>
				<?php echo CHtml::encode($data->birth); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('province_id')); ?>:</b>
				<?php echo CHtml::encode($data->province_id); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('regency_id')); ?>:</b>
				<?php echo CHtml::encode($data->regency_id); ?>
				<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('district_id')); ?>:</b>
	<?php echo CHtml::encode($data->district_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('village_id')); ?>:</b>
	<?php echo CHtml::encode($data->village_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
	<?php echo CHtml::encode($data->zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regsiter_date')); ?>:</b>
	<?php echo CHtml::encode($data->regsiter_date); ?>
	<br />

	*/ ?>


</div><!-- /.box-body -->
</div><!-- /.box -->
</div>
