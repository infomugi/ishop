<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-10 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'employee-form',
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
					<?php echo $form->labelEx($model,'fullname'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'fullname'); ?>
					<?php echo $form->textField($model,'fullname',array('class'=>'form-control')); ?>
				</div>

			</div>  

			<div class="form-group">

				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($user,'username'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($user,'username'); ?>
					<?php echo $form->textField($user,'username',array('class'=>'form-control')); ?>
				</div>

			</div>  

			<div class="form-group">

				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($user,'password'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($user,'password'); ?>
					<?php echo $form->passwordField($user,'password',array('class'=>'form-control')); ?>
				</div>

			</div>  

			<div class="form-group">

				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($user,'email'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($user,'email'); ?>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<?php echo $form->textField($user,'email',array('class'=>'form-control')); ?>
					</div>
				</div>

			</div>  									


			<div class="form-group">

				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'gender'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'gender'); ?>
					<?php
					echo $form->radioButtonList($model,'gender',
						array('1'=>'L','0'=>'P'),
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
						<?php echo $form->labelEx($model,'birth'); ?>
					</div>   

					<div class="col-lg-8 col-md-9 col-xs-12">
						<?php echo $form->error($model,'birth'); ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>		
							<?php
							$this->widget('zii.widgets.jui.CJuiDatePicker',array(
								'model' => $model,
								'attribute' => 'birth',
								'id'=>'birth',
								'value'=>Yii::app()->dateFormatter->format("yy-mm-dd",strtotime($model->birth)),
								'options'=>array(
									'dateFormat' => 'yy-mm-dd',
									'showAnim'=>'fadeIn',
									'changeMonth'=>true,
									'changeYear'=>true,
									'yearRange'=>'1960:2000',
									),
								'htmlOptions'=>array(
									'class'=>'form-control',
									),
								));
								?>
							</div>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'address'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'address'); ?>
							<?php echo $form->textArea($model,'address',array('class'=>'form-control')); ?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'zip'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'zip'); ?>
							<?php echo $form->textField($model,'zip',array('class'=>'form-control')); ?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'phone'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'phone'); ?>
							<div class="input-group">
								<span class="input-group-addon">+62</span>
								<?php echo $form->textField($model,'phone',array('class'=>'form-control'
									,'onkeyup'=>"validAngka(this)"
									,'maxlength'=>12,
									)); ?>
								</div>
							</div>

						</div>  


						<div class="form-group">

							<div class="col-lg-4 col-md-3 col-xs-12 control-label">
								<?php echo $form->labelEx($model,'division_id'); ?>
							</div>   

							<div class="col-lg-8 col-md-9 col-xs-12">
								<?php echo $form->error($model,'division_id'); ?>
								<?php 
								echo $form->dropDownList($model, "division_id",
									CHtml::listData(Division::model()->findAll(array('condition'=>'status=1')),
										'id_division', 'name'
										),
									array("empty"=>"-- Divisi --", 'class'=>'select2 form-control')
									); 
									?> 
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