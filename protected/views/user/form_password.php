<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation' => true,
	'clientOptions' => array(
		'validateOnSubmit' => true,
		),
	'errorMessageCssClass' => 'label label-warning',
	'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
	)); ?>

	<div class="form-group">
		<div class="col-md-12">
			<?php echo $form->error($model,'password'); ?>
			<?php echo $form->passwordField($model,'password',array('class'=>'form-control input-lg','placeholder'=>'Password')); ?>
			<span class="label label-warning" id="passstrength"></span>
		</div>  
	</div>



	<div class="form-group">
		<div class="col-md-12">  
		</br></br>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
	</div>
</div>

<?php $this->endWidget(); ?>


<script type="text/javascript">
	$('#User_password').keyup(function(e) {
		var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
		var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
		var enoughRegex = new RegExp("(?=.{6,}).*", "g");
		if (false == enoughRegex.test($(this).val())) {
			$('#passstrength').html('Tambahkan lebih karakter');
		} else if (strongRegex.test($(this).val())) {
			$('#passstrength').className = 'ok';
			$('#passstrength').html('Strong!');
		} else if (mediumRegex.test($(this).val())) {
			$('#passstrength').className = 'alert';
			$('#passstrength').html('Medium!');
		} else {
			$('#passstrength').className = 'error';
			$('#passstrength').html('Weak!');
		}
		return true;
	});
</script>