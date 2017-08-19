<?php
/* @var $this customerController */
/* @var $customer customer */
/* @var $form CActiveForm */
?>

<div class="col-md-2">
</div> 
<div class="form-normal form-horizontal clearfix">
	<div class="col-md-8"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'user-form',
			'enableAjaxValidation'=>true,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-success',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form'),
			)); ?>


			<div class="form-group">
				<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
					<?php echo $form->labelEx($customer,'fullname'); ?>
				</div>
				<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
					<?php echo $form->error($customer,'fullname'); ?>
					<?php echo $form->textField($customer,'fullname',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
					<?php echo $form->labelEx($model,'username'); ?>
				</div>
				<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
					<?php echo $form->error($model,'username'); ?>
					<?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
				</div>  
			</div>  

			<div class="form-group">
				<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
					<?php echo $form->labelEx($model,'password'); ?>
				</div>
				<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
					<?php echo $form->error($model,'password'); ?>
					<?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
				</div>  
			</div>  

			<div class="form-group">
				<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
					<?php echo $form->labelEx($customer,'gender'); ?>
				</div>
				<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
					<?php echo $form->error($customer,'gender'); ?>
					<?php echo $form->dropDownList($customer, 'gender',
						array('1'=>'Laki-laki','0'=>'Perempuan'),
						array('class'=>'select2 form-control')
						); 
						?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
						<?php echo $form->labelEx($customer,'birth'); ?>
					</div>
					<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
						<?php echo $form->error($customer,'birth'); ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>		
							<?php
							$this->widget('zii.widgets.jui.CJuiDatePicker',array(
								'model' => $customer,
								'attribute' => 'birth',
								'id'=>'birth',
								'value'=>Yii::app()->dateFormatter->format("yy-mm-dd",strtotime($customer->birth)),
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
						<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
							<?php echo $form->labelEx($model,'email'); ?>
						</div>
						<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
							<?php echo $form->error($model,'email'); ?>
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
							</div>
						</div>  

					</div>
					<!-- 
					<div class="form-group">
						<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
							<?php echo $form->labelEx($customer,'province_id'); ?>
						</div>
						<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
							<?php echo $form->error($customer,'province_id'); ?>
							<?php                                   
							echo CHtml::dropDownList('province_id','', 
								CHtml::listData(Provinces::model()->findAll(array('condition'=>'','order'=>'name ASC')),
									'id', 'name'
									),
								array(
									'prompt'=>'-- Pilih Provinsi --.',
									'class'=>'form-control selectz',
									'ajax' => array(
										'type'=>'POST', 
										'url'=>Yii::app()->createUrl('setting/regencies'), 
										'update'=>'#User_regency_id', 
										'data'=>array('regency_id'=>'js:this.value'),
										))
								); 

								?>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
								<?php echo $form->labelEx($customer,'regency_id'); ?>
							</div>
							<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
								<?php echo $form->error($customer,'regency_id'); ?>
								<?php echo $form->dropDownList($customer, "regency_id",
									array(),
									array("empty"=>"-- Pilih Kota / Kab --", 'class'=>'form-control')
									); ?> 
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
									<?php echo $form->labelEx($customer,'district_id'); ?>
								</div>
								<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
									<?php echo $form->error($customer,'district_id'); ?>
									<?php echo $form->textField($customer,'district_id',array('class'=>'form-control')); ?>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
									<?php echo $form->labelEx($customer,'village_id'); ?>
								</div>
								<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
									<?php echo $form->error($customer,'village_id'); ?>
									<?php echo $form->textField($customer,'village_id',array('class'=>'form-control')); ?>
								</div>
							</div> 
							 -->

							<div class="form-group">
								<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
									<?php echo $form->labelEx($customer,'address'); ?>
								</div>
								<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
									<?php echo $form->error($customer,'address'); ?>
									<?php echo $form->textArea($customer,'address',array('rows'=>5, 'cols'=>50,'class'=>'form-control')); ?>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
									<?php echo $form->labelEx($customer,'zip'); ?>
								</div>
								<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
									<?php echo $form->error($customer,'zip'); ?>
									<?php echo $form->textField($customer,'zip',array('size'=>10,'maxlength'=>10,'class'=>'form-control'
									,'onkeyup'=>"validAngka(this)")); ?>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
									<?php echo $form->labelEx($customer,'phone'); ?>
								</div>
								<div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
									<?php echo $form->error($customer,'phone'); ?>
									<div class="input-group">
										<span class="input-group-addon">+62</span>
										<?php echo $form->textField($customer,'phone',array('class'=>'form-control'
											,'onkeyup'=>"validAngka(this)"
											,'maxlength'=>12,
											)); ?>
										</div>
									</div>
								</div>

								<div class="button">
									<?php echo CHtml::submitButton($customer->isNewRecord ? 'Daftar' : 'Save',array('class'=>'btn btn-primary pull-right')); ?>
								</div>

								<?php $this->endWidget(); ?>
							</div>
						</div><!-- form -->

						<script language='javascript'>
							function validAngka(a)
							{
								if(!/^[0-9.]+$/.test(a.value))
								{
									a.value = a.value.substring(0,a.value.length-1000);
								}
							}
						</script>