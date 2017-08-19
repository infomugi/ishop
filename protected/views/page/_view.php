<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id_page)); ?>
				<br />

				
			</div>
			<div class="box-body">


				<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
				<?php echo CHtml::encode($data->title); ?>
				<br />


			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
