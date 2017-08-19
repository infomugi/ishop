<?php
/* @var $this CategoryController */
/* @var $data Category */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode("Banner ".$data->name), array('view', 'id'=>$data->id_category)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<img class="img-responsive img-thumbnail" src="<?php echo YII::app()->baseUrl."/image/category/big/".$data->image; ?>">       

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
