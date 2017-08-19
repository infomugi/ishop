  <?php
  $baseUrl = Yii::app()->theme->baseUrl; 
  $url = Yii::app()->baseUrl."/"; 
  $cs = Yii::app()->getClientScript();
  Yii::app()->clientScript->registerCoreScript('jquery');
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo Setting::model()->name(); ?></title>
  	<meta name="description" content="Philos Template" />
  	<meta name="keywords" content="philos, WooCommerce, bootstrap, html template, philos template">
  	<meta name="author" content="philos" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <?php include_once('tpl_asset_header.php');?>

  </head>
  <body>

  	<!-- Sidebar Menu (Cart Menu) ------------------------------------------------>
  	<section id="sidebar-right" class="sidebar-menu sidebar-right">
  		<div class="cart-sidebar-wrap">

  			<!-- Cart Headiing -->
  			<div class="cart-widget-heading">
  				<h4>Shopping Cart</h4>
  				<!-- Close Icon -->
  				<a href="javascript:void(0)" id="sidebar_close_icon" class="close-icon-white"></a>
  				<!-- End Close Icon -->
  			</div>
  			<!-- End Cart Headiing -->

  			<!-- Cart Product Content -->
  			<div class="cart-widget-content">
  				<div class="cart-widget-product ">

  					<!-- Empty Cart -->
  					<div class="cart-empty">
  						<p>You have no items in your shopping cart.</p>
  					</div>
  					<!-- EndEmpty Cart -->

  					<!-- Cart Products -->
  					<ul class="cart-product-item">

  						<!-- Item -->
  						<li>
  							<!--Item Image-->
  							<a href="#" class="product-image">
  								<img src="<?php echo $baseUrl;?>/frontend/img/product-img/small/product_12547554.jpg" alt="" /></a>

  								<!--Item Content-->
  								<div class="product-content">
  									<!-- Item Linkcollateral -->
  									<a class="product-link" href="#">Alpha Block Black Polo T-Shirt</a>

  									<!-- Item Cart Totle -->
  									<div class="cart-collateral">
  										<span class="qty-cart">1</span>&nbsp;<span>&#215;</span>&nbsp;<span class="product-price-amount"><span class="currency-sign">$</span>399.00</span>
  									</div>

  									<!-- Item Remove Icon -->
  									<a class="product-remove" href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
  								</div>
  							</li>

  							<!-- Item -->
  							<li>
  								<!--Item Image-->
  								<a href="#" class="product-image">
  									<img src="<?php echo $baseUrl;?>/frontend/img/product-img/small/product_12547555.jpg" alt="" /></a>

  									<!--Item Content-->
  									<div class="product-content">
  										<!-- Item Linkcollateral -->
  										<a class="product-link" href="#">Red Printed Round Neck T-Shirt</a>

  										<!-- Item Cart Totle -->
  										<div class="cart-collateral">
  											<span class="qty-cart">2</span>&nbsp;<span>&#215;</span>&nbsp;<span class="product-price-amount"><span class="currency-sign">$</span>299.00</span>
  										</div>

  										<!-- Item Remove Icon -->
  										<a class="product-remove" href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
  									</div>
  								</li>

  							</ul>
  							<!-- End Cart Products -->

  						</div>
  					</div>
  					<!-- End Cart Product Content -->

  					<!-- Cart Footer -->
  					<div class="cart-widget-footer">
  						<div class="cart-footer-inner">

  							<!-- Cart Total -->
  							<h4 class="cart-total-hedding normal"><span>Total :</span><span class="cart-total-price">$698.00</span></h4>
  							<!-- Cart Total -->

  							<!-- Cart Buttons -->
  							<div class="cart-action-buttons">
  								<a href="#" class="view-cart btn btn-md btn-gray">View Cart</a>
  								<a href="#" class="checkout btn btn-md btn-color">Checkout</a>
  							</div>
  							<!-- End Cart Buttons -->

  						</div>
  					</div>
  					<!-- Cart Footer -->
  				</div>
  			</section>
  			<!--Overlay-->
  			<div class="sidebar_overlay"></div>
  			<!-- End Sidebar Menu (Cart Menu) -------------------------------------------->

    <!-- Search Overlay Menu ----------------------------------------------------->
    <section class="search-overlay-menu">
    	<!-- Close Icon -->
    	<a href="javascript:void(0)" class="search-overlay-close"></a>
    	<!-- End Close Icon -->
    	<div class="container">
    		<!-- Search Form -->
    		<form role="search" id="searchform" action="http://theme.nileforest.com/search" method="get">
    			<div class="search-icon-lg">
    				<img src="<?php echo $baseUrl;?>/frontend/img/search-icon-lg.png" alt="" />
    			</div>
    			<label class="h6 normal search-input-label" for="search-query">Enter keywords to Search Product</label>
    			<input value="" name="q" type="search" placeholder="Search..." />
    			<button type="submit">
    				<img src="<?php echo $baseUrl;?>/frontend/img/search-lg-go-icon.png" alt="" />
    			</button>
    		</form>
    		<!-- End Search Form -->

    	</div>
    </section>
    <!-- End Search Overlay Menu ------------------------------------------------>

    <!--==========================================-->
    <!-- wrapper -->
    <!--==========================================-->
    <div class="wraper">
