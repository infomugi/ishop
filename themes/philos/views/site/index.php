<?php
$baseUrl = Yii::app()->theme->baseUrl; 
$url = Yii::app()->baseUrl."/"; 

$this->breadcrumbs=array(
  YII::app()->name,
  );
  ?>   

  <!-- Intro -->
  <section id="intro" class="intro">
    <!-- Revolution Slider -->
    <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="background-color: transparent; padding: 0px;">
     <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
     <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display: none;" data-version="5.3.0.2">
      <ul>

       <?php foreach (Slide::getSlide() as $data) { ?> 

         <li class="dark-bg" data-index="rs-<?php echo $data['id_setting_slide']; ?>" data-transition="random" data-slotamount="7" data-masterspeed="500" data-thumb="" data-saveperformance="off" data-title="01">
          <!-- Main Image Layer 0-->
          <img src="<?php echo $url;?>/image/slider/<?php echo $data['image']; ?>" alt="h" title="home-1-slide-1" width="1920" height="1100" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina />

        </li>

        <?php } ?>

      </ul>
    </div>
  </div>

  <!-- End Revolution Slider -->
</section>
<!-- End Intro -->

<!-- Promo Box -->
<section id="promo" class="section-padding-sm promo ">
 <div class="container">
  <div class="promo-box row">
   <div class="col-md-4 mtb-sm-30 promo-item">
    <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
    <div class="info">
     <a href="#">
      <h6 class="normal">Delivery Free</h6>
    </a>
    <p>On Order Over $150</p>
  </div>
</div>
<div class="col-md-4 mtb-sm-30 promo-item">
  <div class="icon"><i class="fa fa-repeat" aria-hidden="true"></i></div>
  <div class="info">
   <a href="#">
    <h6 class="normal">Exchange or Return</h6>
  </a>
  <p>30 Day Money Back Guarantee</p>
</div>
</div>
<div class="col-md-4 mtb-sm-30 promo-item">
  <div class="icon"><i class="fa fa-headphones" aria-hidden="true"></i></div>
  <div class="info">
   <a href="#">
    <h6 class="normal">Support</h6>
  </a>
  <p>24/7 Online Support</p>
</div>
</div>
</div>
</div>
</section>
<!-- End Promo Box -->

<!-- Promo Banner -->
<section id="promo-banner" class="section-padding-b">
  <div class="container">
    <div class="row">
      <!--Left Side-->
      <div class="col-md-6">
        <div class="row">

         <?php foreach (Category::getCategoryId(1) as $data) { ?> 
          <div class="col-12 mb-30">
            <div class="promo-banner-wrap">
              <a href="#" class="promo-image-wrap">
                <img src="<?php echo $url;?>/image/category/big/<?php echo $data['image']; ?>" alt="<?php echo $data['name']; ?>" />
              </a>
            </div>
          </div>
          <?php } ?> 

          <?php foreach (Category::getCategoryId(3) as $data) { ?> 
            <div class="col-12 mb-30">
              <div class="promo-banner-wrap">
                <a href="#" class="promo-image-wrap">
                  <img src="<?php echo $url;?>/image/category/big/<?php echo $data['image']; ?>" alt="<?php echo $data['name']; ?>" />
                </a>
              </div>
            </div>
            <?php } ?> 


          </div>
        </div>

        <!--Right Side-->
        <div class="col-md-6">
          <div class="row">

           <?php foreach (Category::getCategoryId(2) as $data) { ?> 
            <div class="col-12 mb-30">
              <div class="promo-banner-wrap">
                <a href="#" class="promo-image-wrap">
                  <img src="<?php echo $url;?>/image/category/big/<?php echo $data['image']; ?>" alt="<?php echo $data['name']; ?>" />
                </a>
              </div>
            </div>
            <?php } ?> 

            <?php foreach (Category::getCategoryId(4) as $data) { ?> 
              <div class="col-12 mb-30">
                <div class="promo-banner-wrap">
                  <a href="#" class="promo-image-wrap">
                    <img src="<?php echo $url;?>/image/category/big/<?php echo $data['image']; ?>" alt="<?php echo $data['name']; ?>" />
                  </a>
                </div>
              </div>
              <?php } ?> 


            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Promo Banner -->


    <!-- Footer Section -------------->
    <footer class="footer section-padding">
      <!-- Footer Info -->
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 mb-sm-45">
            <div class="footer-block about-us-block">
              <img src="<?php echo $baseUrl;?>/frontend/img/logo_white.png" width="125" alt="">
              <p>Gumbo beet greens corn soko endive gum gourd. Parsley allot courgette tatsoi pea sprouts fava bean soluta nobis est ses eligendi optio.</p>
              <ul class="footer-social-icon list-none-ib">
                <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4 mb-sm-45">
            <div class="footer-block information-block">
              <h6>Information</h6>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Delivery Information</a></li>
                <li><a href="#">Discount</a></li>
                <li><a href="#">Latest News</a></li>
                <li><a href="#">Our Sitemap</a></li>
                <li><a href="#">Terms &amp; Condition</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4 mb-sm-45">
            <div class="footer-block links-block">
              <h6>Our Links</h6>
              <ul>
                <li><a href="#">Brands</a></li>
                <li><a href="#">Gift Vouchers</a></li>
                <li><a href="#">Affiliates</a></li>
                <li><a href="#">Special Event</a></li>
                <li><a href="#">Retunrs</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4 mb-sm-45">
            <div class="footer-block extra-block">
              <h6>Extra</h6>
              <ul>
                <li><a href="#">New Collection</a></li>
                <li><a href="#">Women Dresses</a></li>
                <li><a href="#">Kids Collection</a></li>
                <li><a href="#">Mens Collection</a></li>
                <li><a href="#">Custom Service</a></li>
                <li><a href="#">Shipping policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="footer-block contact-block">
              <h6>Contact</h6>
              <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo Setting::model()->address(); ?></li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo Setting::model()->email(); ?>"><?php echo Setting::model()->email(); ?></a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo Setting::model()->phone(); ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer Info -->

      <!-- Footer Newsletter -->
      <div class="container">
       <div class="footer-newsletter">
        <h4>Subscribe Newsletter</h4>
        <form class="footer-newslettr-inner">
         <input class="input-md fancy" name="footeremail" title="Enter Email Address.." placeholder="Enter Email Address.." type="text">
         <button class="btn btn-md btn-color fancy">Sing Up</button>
       </form>
     </div>
   </div>
   <!-- End Footer Newsletter -->

   <!-- Footer Copyright -->
   <div class="container">
     <div class="copyrights">
      <p class="copyright">&copy; Created by <a href="#" target="_blank">Infomugi Media</a>. <?php echo YII::app()->name; ?></p>
      <p class="payment">
       <img src="<?php echo $baseUrl;?>/frontend/img/payment_logos.png" alt="payment">
     </p>
   </div>
 </div>
 <!-- End Footer Copyright -->
</footer>
<!-- End Footer Section -------------->
