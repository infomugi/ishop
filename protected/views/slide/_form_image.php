<?php
/* @var $this SlideController */
/* @var $model Slide */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">

	<div class="col-xs-12"> 
		<div class="form-group">
			<div class="col-md-12">  
				<img src="<?php echo YII::app()->baseUrl."/image/slider/".$model->image;?>" class="img-responsive" alt="<?php echo $model->name; ?>" title="<?php echo $model->name; ?>">
				<div class="alert alert-info">(Rekomendasi Ukuran Gambar : <code>1920px</code> X <code>530px</code>)</div>

			</div>
		</div>
	</div>

	<div class="col-lg-10 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'slide-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-info',
			'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>


			
			<div class="form-group">

				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'image'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'image'); ?>
					<?php echo $form->fileField($model,'image',array('class'=>'btn btn-info')); ?>
				</div>

			</div>  

			<div class="form-group">
				<div class="col-md-12">  

					<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->