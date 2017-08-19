<?php
/* @var $this ReviewController */
/* @var $review Review */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-12 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'review-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($review, null, null, array('class' => 'alert alert-warning')); ?> 
			
			<div class="form-group">
				
				<div class="col-lg-2 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($review,'price'); ?>
				</div>   

				<div class="col-lg-10 col-md-9 col-xs-12">
					<?php echo $form->error($review,'price'); ?>
					<?php
					echo $form->radioButtonList($review,'price',
						array('1'=>'1 Star','2'=>'2 Stars','3'=>'3 Starts','4'=>'4 Starts','5'=>'5 Starts'),
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

					<div class="col-lg-2 col-md-3 col-xs-12 control-label">
						<?php echo $form->labelEx($review,'value'); ?>
					</div>   

					<div class="col-lg-10 col-md-9 col-xs-12">
						<?php echo $form->error($review,'value'); ?>
						<?php
						echo $form->radioButtonList($review,'value',
							array('1'=>'1 Star','2'=>'2 Stars','3'=>'3 Starts','4'=>'4 Starts','5'=>'5 Starts'),
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

						<div class="col-lg-2 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($review,'quality'); ?>
						</div>   

						<div class="col-lg-10 col-md-9 col-xs-12">
							<?php echo $form->error($review,'quality'); ?>
							<?php
							echo $form->radioButtonList($review,'quality',
								array('1'=>'1 Star','2'=>'2 Stars','3'=>'3 Starts','4'=>'4 Starts','5'=>'5 Starts'),
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

							<div class="col-lg-2 col-md-3 col-xs-12 control-label">
								<?php echo $form->labelEx($review,'summary'); ?>
							</div>   

							<div class="col-lg-10 col-md-9 col-xs-12">
								<?php echo $form->error($review,'summary'); ?>
								<?php
								echo $form->radioButtonList($review,'summary',
									array('1'=>'Biasa','2'=>'Bagus','3'=>'Sangat Bagus'),
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

								<div class="col-lg-2 col-md-3 col-xs-12 control-label">
									<?php echo $form->labelEx($review,'description'); ?>
								</div>   

								<div class="col-lg-10 col-md-9 col-xs-12">
									<?php echo $form->error($review,'description'); ?>
									<?php echo $form->textArea($review,'description',array('class'=>'form-control')); ?>
								</div>

							</div>   

							<div class="form-group">
								<div class="col-md-12">  
								</br></br>
								<?php echo CHtml::submitButton($review->isNewRecord ? 'Kirim Review' : 'Edit', array('class' => 'btn btn-info pull-right')); ?>
							</div>
						</div>

						<?php $this->endWidget(); ?>

					</div>
</div><!-- form -->