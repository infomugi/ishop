<?php
/* @var $this customerController */
/* @var $customer customer */
/* @var $form CActiveForm */
?>

<div class="form-normal form-horizontal clearfix">
  <div class="col-md-12"> 

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
        <div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
          <?php echo $form->error($customer,'fullname'); ?>
          <?php echo $form->textField($customer,'fullname',array('size'=>60,'maxlength'=>255,'class'=>'input-md form-full-width','placeholder'=>'Nama Lengkap')); ?>
        </div>
      </div>


      <div class="form-group">
        <div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
          <?php echo $form->error($user,'email'); ?>
          <?php echo $form->textField($user,'email',array('class'=>'input-md form-full-width','placeholder'=>'Alamat Email')); ?>
        </div>  
      </div>

      <div class="form-group">
        <div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
          <?php echo $form->error($user,'username'); ?>
          <?php echo $form->textField($user,'username',array('class'=>'input-md form-full-width','placeholder'=>'Username')); ?>
        </div>  
      </div>  

      <div class="form-group">
        <div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
          <?php echo $form->error($customer,'gender'); ?>
          <?php
          echo $form->radioButtonList($customer,'gender',
            array('1'=>'Laki-laki','0'=>'Perempuan'),
            array(
              'template'=>'{input}{label}',
              'separator'=>'',
              'labelOptions'=>array(
                'style'=> '
                padding-left:10px;
                margin-top:-5px;
                width: 110px;
                float: inline-start;
                '),
              'style'=>'float:left;',
              ));
              ?>
              <BR>
              </div>
            </div>      

            <div class="form-group">
              <div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
                <?php echo $form->error($user,'password'); ?>
                <?php echo $form->passwordField($user,'password',array('class'=>'input-md form-full-width','placeholder'=>'Password')); ?>
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
                  'class'=>'input-md form-full-width selectz',
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
                  array("empty"=>"-- Pilih Kota / Kab --", 'class'=>'input-md form-full-width')
                  ); ?> 
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
                  <?php echo $form->labelEx($customer,'district_id'); ?>
                </div>
                <div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
                  <?php echo $form->error($customer,'district_id'); ?>
                  <?php echo $form->textField($customer,'district_id',array('class'=>'input-md form-full-width')); ?>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
                  <?php echo $form->labelEx($customer,'village_id'); ?>
                </div>
                <div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
                  <?php echo $form->error($customer,'village_id'); ?>
                  <?php echo $form->textField($customer,'village_id',array('class'=>'input-md form-full-width')); ?>
                </div>
              </div> 
            -->

            <div class="form-group">
              <div class="col-sm-6 col-md-8 col-xs-12 col-lg-12">
                <?php echo $form->error($customer,'phone'); ?>
                <?php echo $form->textField($customer,'phone',array('class'=>'input-md form-full-width','onkeyup'=>"validAngka(this)",'maxlength'=>12,'placeholder'=>'Mobile Phone'
                )); ?>
              </div>
            </div>

            <div class="button">

              <?php 
              echo CHtml::ajaxSubmitButton('Daftar', 
               CHtml::normalizeUrl(array('site/ajax')), 
               array(
                'data'=>'js:jQuery(this).parents("user-form").serialize()+
                "&request=added"',       
                'success'=>'function(data){
                  $(".close").click();
                  $("#start").hide();
                  $("#finish").show();
                }'
                ), 
               array(
                'id'=>'ajaxSubmitBtn', 
                'name'=>'ajaxSubmitBtn',
                'class'=>'submit btn btn-md btn-color pull-right'
                )); 
                ?>


              </div>

              <?php $this->endWidget(); ?>
            </div>
          </div><!-- form -->

          <script type="text/javascript">
            $("#start").show();
            $("#finish").hide();
            function validAngka(a)
            {
              if(!/^[0-9.]+$/.test(a.value))
              {
                a.value = a.value.substring(0,a.value.length-1000);
              }
            }
          </script>




