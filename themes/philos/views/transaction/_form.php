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

				

				<div class="col-lg-4 col-md-3 col-xs-12 text-right">

					<?php echo $form->labelEx($model,'payment_method'); ?>

				</div>   



				<div class="col-lg-8 col-md-9 col-xs-12">

					<?php echo $form->error($model,'payment_method'); ?>

					<?php

					echo $form->radioButtonList($model,'payment_method',

						array('1'=>'Transfer via Bank'),

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



					<div class="col-lg-4 col-md-3 col-xs-12 text-right">

						<?php echo $form->labelEx($model,'payment_bank_id'); ?>

					</div>   



					<div class="col-lg-8 col-md-9 col-xs-12">

						<?php echo $form->error($model,'payment_bank_id'); ?>

						<?php
						$Criteria = new CDbCriteria();
						$Criteria->condition = "status = 1";
						$dropDownData = CHtml::listData(BankDestination::model()->findAll($Criteria), 'id_bank_destination', function($size) {
							return CHtml::encode($size->name . ' - '. $size->code);
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



						<div class="col-lg-4 col-md-3 col-xs-12 text-right">

							<?php echo $form->labelEx($model,'payment_total'); ?>

						</div>   



						<div class="col-lg-8 col-md-9 col-xs-12">

							<p> <?php echo Yii::app()->numberFormatter->format("Rp ###,###,###",Transaction::model()->total()); ?>

							</div>



						</div>		





						<div class="form-group">



							<div class="col-lg-4 col-md-3 col-xs-12 control-label">

								<?php echo $form->labelEx($model,'shipping_address'); ?>

							</div>   



							<div class="col-lg-8 col-md-9 col-xs-12">

								<?php echo $form->error($model,'shipping_address'); ?>

								<?php echo $form->textArea($model,'shipping_address',array('class'=>'form-control')); ?>

							</div>



						</div>  





						<div class="form-group">

							<div class="col-md-12">  

							</br></br>

							<?php echo CHtml::submitButton($model->isNewRecord ? 'Lanjutkan ke Pembayaran' : 'Edit', array('class' => 'btn btn-lg btn-warning pull-right')); ?>

						</div>

					</div>



					<?php $this->endWidget(); ?>



</div></div><!-- form -->