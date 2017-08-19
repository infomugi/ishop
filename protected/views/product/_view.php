<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="col-xs-4">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->code), array('view', 'id'=>$data->id_product)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						array('name'=>'category_id','value'=>$data->Category->name),
						array('name'=>'sub_category_id','value'=>$data->Tag->name),
						array(
							'label'=>'Price',
							'type'=>'raw',
							'value'=>Yii::app()->numberFormatter->format("Rp ###,###,###",$data->price),
							),
						),
						)); ?>

						<img class="img-responsive img-thumbnail" src="<?php echo YII::app()->baseUrl."/image/product/middle/".$data->image; ?>"/>


					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
