<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id_news)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
				<?php echo CHtml::encode($data->Category->name); ?>
				<br />

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
