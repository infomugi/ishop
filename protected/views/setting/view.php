<?php
/* @var $this SettingController */
/* @var $model Setting */

$this->breadcrumbs=array(
	'Settings'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Setting';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Site', 
		array('update', 'id'=>$model->id_site,
			), array('class' => 'btn btn-success', 'title'=>'Basic Setting'));
			?>

			<?php echo CHtml::link('Logo', 
				array('logo', 'id'=>$model->id_site,
					), array('class' => 'btn btn-success', 'title'=>'Logo'));
					?>

					<?php echo CHtml::link('Favicon', 
						array('favicon', 'id'=>$model->id_site,
							), array('class' => 'btn btn-success', 'title'=>'Favicon'));
							?>

							<?php echo CHtml::link('Seo', 
								array('seo', 'id'=>$model->id_site,
									), array('class' => 'btn btn-success', 'title'=>'Seo'));
									?>

									<?php echo CHtml::link('Social Media', 
										array('socialmedia', 'id'=>$model->id_site,
											), array('class' => 'btn btn-success', 'title'=>'Social Media'));
											?>			

											<HR>
												<h2><i class="fa fa-info"/></i> Site</h2>
												<?php $this->widget('zii.widgets.CDetailView', array(
													'data'=>$model,
													'htmlOptions'=>array("class"=>"table"),
													'attributes'=>array(
														'name',
														'address',
														'phone',
														'email',
														),
														)); ?>

														<h2><i class="fa fa-globe"/></i> SEO</h2>
														<?php $this->widget('zii.widgets.CDetailView', array(
															'data'=>$model,
															'htmlOptions'=>array("class"=>"table"),
															'attributes'=>array(
																'description',
																'keywords',
																),
																)); ?>

																<h2><i class="fa fa-facebook"/></i> Social Media</h2>
																<?php $this->widget('zii.widgets.CDetailView', array(
																	'data'=>$model,
																	'htmlOptions'=>array("class"=>"table"),
																	'attributes'=>array(
																		'facebook',
																		'instagram',
																		'twitter',
																		),
																		)); ?>	

																		<h2><i class="fa fa-image"/></i> Logo & Favicon</h2>
																		<?php $this->widget('zii.widgets.CDetailView', array(
																			'data'=>$model,
																			'htmlOptions'=>array("class"=>"table"),
																			'attributes'=>array(
																				'logo',
																				'favicon',
																				),
																				)); ?>																											

																			</section>

																			<STYLE>
																				th{width:150px;}
																			</STYLE>

