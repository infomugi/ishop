<?php
/* @var $this customerController */
/* @var $customer customer */
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
     <?php echo $form->error($customer,'fullname'); ?>
     <?php echo $form->textField($customer,'fullname',array('size'=>60,'maxlength'=>255,'class'=>'form-control input-lg','placeholder'=>'Nama Lengkap')); ?>
   </div>
 </div>


 <div class="form-group">
  <div class="col-md-12">
   <?php echo $form->error($model,'email'); ?>
   <?php echo $form->textField($model,'email',array('class'=>'form-control input-lg','placeholder'=>'Alamat Email')); ?>
 </div>  
</div>

<div class="form-group">
  <div class="col-md-12">
   <?php echo $form->error($model,'username'); ?>
   <?php echo $form->textField($model,'username',array('class'=>'form-control input-lg','placeholder'=>'Username')); ?>
 </div>  
</div>  

<div class="form-group">
  <div class="col-md-12">
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
      width: 90px;
      float: inline-start;
      '),
     'style'=>'float:left;',
     ));
     ?>
     <BR>
     </div>
   </div>      

          <!-- 
          <div class="form-group">
            <div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
              <?php echo $form->labelEx($customer,'province_id'); ?>
            </div>
            <div class="col-md-12">
              <?php echo $form->error($customer,'province_id'); ?>
              <?php                                   
              echo CHtml::dropDownList('province_id','', 
                CHtml::listData(Provinces::model()->findAll(array('condition'=>'','order'=>'name ASC')),
                  'id', 'name'
                  ),
                array(
                  'prompt'=>'-- Pilih Provinsi --.',
                  'class'=>'form-control input-lg selectz',
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
              <div class="col-md-12">
                <?php echo $form->error($customer,'regency_id'); ?>
                <?php echo $form->dropDownList($customer, "regency_id",
                  array(),
                  array("empty"=>"-- Pilih Kota / Kab --", 'class'=>'form-control input-lg')
                  ); ?> 
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
                  <?php echo $form->labelEx($customer,'district_id'); ?>
                </div>
                <div class="col-md-12">
                  <?php echo $form->error($customer,'district_id'); ?>
                  <?php echo $form->textField($customer,'district_id',array('class'=>'form-control input-lg')); ?>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-6 col-md-4 col-xs-12 col-lg-12">
                  <?php echo $form->labelEx($customer,'village_id'); ?>
                </div>
                <div class="col-md-12">
                  <?php echo $form->error($customer,'village_id'); ?>
                  <?php echo $form->textField($customer,'village_id',array('class'=>'form-control input-lg')); ?>
                </div>
              </div> 
            -->

            <div class="form-group">
             <div class="col-md-12">
              <?php echo $form->error($customer,'birth'); ?>
              <?php echo $form->textField($customer,'birth',array('class'=>'form-control input-lg datepicker','placeholder'=>'Birthday','data-mask'=>"99-99-9999")); ?>


            </div>
          </div>

          <div class="form-group">
          	<div class="col-md-12">
          		<?php echo $form->error($customer,'phone'); ?>
          		<?php echo $form->textField($customer,'phone',array('class'=>'form-control input-lg','onkeyup'=>"validAngka(this)",'maxlength'=>12,'placeholder'=>'Mobile Phone'
          		)); ?>
          	</div>
          </div>


          <div class="form-group">
          	<div class="col-md-12">
          		<?php echo $form->error($customer,'zip'); ?>
          		<?php echo $form->textField($customer,'zip',array('class'=>'form-control input-lg','onkeyup'=>"validAngka(this)",'maxlength'=>12,'placeholder'=>'Kode POS'
          		)); ?>
          	</div>
          </div>


          <div class="form-group">
          	<div class="col-md-12">
          		<?php echo $form->error($customer,'address'); ?>
          		<?php echo $form->textArea($customer,'address',array('rows'=>5, 'cols'=>50,'class'=>'form-control')); ?>

          	</div>
          </div>


          <div class="form-group">
            <div class="col-md-12">

             <?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>


           </div>
         </div>


         <?php $this->endWidget(); ?>

         <script type="text/javascript">
           function validAngka(a)
           {
            if(!/^[0-9.]+$/.test(a.value))
            {
             a.value = a.value.substring(0,a.value.length-1000);
           }
         }
       </script>