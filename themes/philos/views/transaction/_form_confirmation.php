<?php

/* @var $this TransactionController */

/* @var $model Transaction */

/* @var $form CActiveForm */

?>



<div class="form-normal form-horizontal clearfix">

	<div class="col-lg-12 col-xs-12"> 



		<?php $form=$this->beginWidget('CActiveForm', array(

			'id'=>'transaction-form',

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

					<?php echo $form->labelEx($model,'payment_bank_id'); ?>

				</div>   



				<div class="col-lg-8 col-md-9 col-xs-12">

					<?php echo $form->error($model,'payment_bank_id'); ?>

					<?php

						$Criteria = new CDbCriteria();
						$Criteria->condition = "status = 1";
						$dropDownData = CHtml::listData(BankDestination::model()->findAll($Criteria), 'id_bank_destination', function($size) {
						return CHtml::encode('Bank '.$size->name . ' - No. Rekening '. $size->code);

					});

					echo $form->radioButtonList($model,'payment_bank_id',

						$dropDownData,

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



					<div class="col-lg-4 col-md-3 col-xs-12 control-label">

						<?php echo $form->labelEx($model,'payment_total'); ?>

					</div>   



					<div class="col-lg-8 col-md-9 col-xs-12">

						<p> <?php echo Yii::app()->numberFormatter->format("Rp ###,###,###",$model->payment_total); ?>

						</div>



					</div>	







					<div class="form-group">



						<div class="col-lg-4 col-md-3 col-xs-12 control-label">

							<?php echo $form->labelEx($model,'payment_bank_sender_id'); ?>

						</div>   



						<div class="col-lg-8 col-md-9 col-xs-12">

							<?php echo $form->error($model,'payment_bank_sender_id'); ?>

							<?php 

							$BankSender = CHtml::listData(BankSender::model()->findAll(), 'id_bank_sender', function($size) {

								return CHtml::encode('Kode '.$size->code . ' - '. $size->name);

							});

							echo $form->dropDownList($model, "payment_bank_sender_id",

								$BankSender,

								array(

									'prompt'=>'-- Bank Pengirim --.',

									'class'=>'form-control selectz',

									)

								); 

								?> 	

							</div>



						</div>								



						<div class="form-group">



							<div class="col-lg-4 col-md-3 col-xs-12 control-label">

								<?php echo $form->labelEx($model,'payment_bank_name'); ?>

							</div>   



							<div class="col-lg-8 col-md-9 col-xs-12">

								<?php echo $form->error($model,'payment_bank_name'); ?>

								<?php echo $form->textField($model,'payment_bank_name',array('class'=>'form-control')); ?>

							</div>



						</div> 





						<div class="form-group">



							<div class="col-lg-4 col-md-3 col-xs-12 control-label">

								<?php echo $form->labelEx($model,'payment_bank_branch'); ?>

							</div>   



							<div class="col-lg-8 col-md-9 col-xs-12">

								<?php echo $form->error($model,'payment_bank_branch'); ?>

								<?php echo $form->textField($model,'payment_bank_branch',array('class'=>'form-control','onkeyup'=>"validAngka(this)",'maxlength'=>12)); ?>

							</div>



						</div> 



						<div class="form-group">



							<div class="col-lg-4 col-md-3 col-xs-12 control-label">

								<?php echo $form->labelEx($model,'payment_bank_code'); ?>

							</div>   



							<div class="col-lg-8 col-md-9 col-xs-12">

								<?php echo $form->error($model,'payment_bank_code'); ?>

								<div class="input-group">

									<span class="input-group-addon"><i class="fa fa-barcode"></i></span>

									<?php echo $form->textField($model,'payment_bank_code',array('class'=>'form-control','onkeyup'=>"validAngka(this)",'maxlength'=>12)); ?>

								</div>    

							</div>



						</div> 	

						





						<div class="form-group">



							<div class="col-lg-4 col-md-3 col-xs-12 control-label">

								<?php echo $form->labelEx($model,'payment_bank_pay'); ?>

							</div>   



							<div class="col-lg-8 col-md-9 col-xs-12">

								<?php echo $form->error($model,'payment_bank_pay'); ?>

								<div class="input-group">

									<span class="input-group-addon">Rp.</span>

									<?php echo $form->textField($model,'payment_bank_pay',array('class'=>'form-control','onkeyup'=>"validAngka(this)",'maxlength'=>12)); ?>

								</div>    

							</div>



						</div> 				



						<div class="form-group">



							<div class="col-lg-4 col-md-3 col-xs-12 control-label">

								<?php echo $form->labelEx($model,'payment_file'); ?>

							</div>   



							<div class="col-lg-8 col-md-9 col-xs-12">

								<?php echo $form->error($model,'payment_file'); ?>

								<?php echo $form->fileField($model,'payment_file',array('class'=>'btn btn-info')); ?>

							</div>



						</div>  			





						<div class="form-group">

							<div class="col-md-12">  

							</br></br>

							<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Upload', array('class' => 'btn btn-info pull-right')); ?>

						</div>

					</div>



					<?php $this->endWidget(); ?>



</div></div><!-- form -->