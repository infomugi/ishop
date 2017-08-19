<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-10 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'page-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>


			<div class="form-group">

				<div class="col-lg-12 col-md-12 col-xs-12">
					<?php echo $form->error($model,'title'); ?>
					<?php echo $form->textField($model,'title',array('class'=>'form-control form-lg')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-lg-12 col-md-12 col-xs-12">
					<?php echo $form->error($model,'description'); ?>
					<?php echo $form->textArea($model,'description',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-lg-6 col-md-6 col-xs-12">
					<?php echo $form->error($model,'created_date'); ?>
					<?php echo $form->textField($model,'created_date',array('class'=>'form-control','disabled'=>true,'value'=>date('Y-m-d h:i:s'))); ?>
				</div>   

				<div class="col-lg-6 col-md-6 col-xs-12">
					<?php echo $form->error($model,'category_id'); ?>
					<?php 
					echo $form->dropDownList($model, "category_id",
						CHtml::listData(Category::model()->findAll(array('condition'=>'status=1')),
							'id_category', 'name'
							),
						array("empty"=>"-- Category --", 'class'=>'select2 form-control')
						); 
						?> 
					</div>

				</div>  


				<div class="form-group">
					<div class="col-md-12">  
					</br></br>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->