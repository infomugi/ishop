<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Setting::model()->name();
$this->breadcrumbs=array(
  'Login',
  );
  ?>

  <!-- Page Content -->
  <section class="content-page">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form-border-box">

            <div id="alert"></div>

            <?php $form=$this->beginWidget('CActiveForm', array(
              'id'=>'login-form',
              'enableAjaxValidation'=>true,
              'enableClientValidation' => true,
              'clientOptions' => array(
                'validateOnSubmit' => true,
                ),
              'errorMessageCssClass' => 'label label-success',
              'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form'),
              )); ?>

              <h2 class="normal"><span>Login</span></h2>

              <?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

              <div class="form-field-wrapper">
                <label>Username <span class="required">*</span></label>
                <?php echo $form->textField($model,'username', array('class' => 'input-md form-full-width', 'placeholder'=>'Username','autofocus'=>true,'id'=>'author-email')); ?>
              </div>
              <div class="form-field-wrapper">
                <label>Password <span class="required">*</span></label>
                <?php echo $form->passwordField($model,'password', array('class' => 'input-md form-full-width','placeholder'=>'Password','id'=>'author-pass')); ?> 
              </div>
              <div class="form-field-wrapper">
                <input name="submit" id="submit" class="submit btn btn-md btn-black" value="Login" type="submit">
              </div>

              <?php $this->endWidget(); ?>  

            </div>
          </div>

          <div class="col-md-6">

            <div class="form-border-box" id="start">
              <form>
                <h2 class="normal"><span>Belum Punya Akun ?</span></h2>
                <p>Dengan klik daftar, kamu telah menyetujui Aturan Penggunaan dan Kebijakan Privasi dari <?php echo Setting::model()->name(); ?></p>
                <div class="form-field-wrapper">
                  <input class="submit btn btn-md btn-color" value="Create An Account" type="button" data-toggle="modal" data-target="#myModal">
                </div>
              </form>
            </div>


            <div class="form-border-box" id="finish">
              <form>
                <h2 class="normal"><span>Registrasi Berhasil</span></h2>
                <p>Akun anda berhasil di buat, silahkan masukan username dan password untuk masuk ke sistem <?php echo Setting::model()->name(); ?></p>
              </form>
            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- End Page Content -->



    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Daftar akun baru sekarang</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">

            <?php echo $this->renderPartial('_form_register', array('user'=>$user,'customer'=>$customer)); ?>

          </div>
        </div>

      </div>
    </div>
