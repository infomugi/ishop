<?php
/* @var $this BankDestinationController */
/* @var $model BankDestination */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-10 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'bank-destination-form',
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
					<?php echo $form->labelEx($model,'code'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'code'); ?>
					<?php echo $form->textField($model,'code',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'bank_name'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'bank_name'); ?>
					<?php echo $form->textField($model,'bank_name',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'name'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'name'); ?>
					<?php echo $form->textField($model,'name',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'branch'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'branch'); ?>
					<?php echo $form->textField($model,'branch',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'status'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'status'); ?>
					<?php
					echo $form->radioButtonList($model,'status',
						array('1'=>'Enable','0'=>'Disable'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=>'padding-right:20px;margin-left:15px'),

							)                              
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