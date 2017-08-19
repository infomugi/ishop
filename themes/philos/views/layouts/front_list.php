<?php include_once('front/tpl_header.php');?>

<?php include_once('front/tpl_navigation.php');?>


<!-- Page Content Wraper -->
<div class="page-content-wraper">
	<!-- Bread Crumb -->
	<section class="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="breadcrumb-link">
						<a href="#">Home</a>
						<a href="#">Categories</a>
						<span><?php echo $this->pageTitle; ?></span>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- Bread Crumb -->

	<!-- Page Content -->
	<section class="content-page">
		<div class="container">
			<div class="row">

				
				<?php echo $content; ?>

				<!-- Sidebar -->
				<div class="sidebar-container col-md-3 pull-md-9">

					<!-- Categories -->
					<div class="widget-sidebar">
						<h6 class="widget-title">Kategori</h6>
						<ul class="widget-content widget-product-categories jq-accordian">
							<li>
								<a href="#">Accessories</a>
							</li>
							<li>
								<a>Clothings</a>
								<ul class="children">
									<li><a href="#">All</a></li>
									<li><a href="#">Coats & Jackets</a></li>
									<li><a href="#">Shirts</a></li>
									<li><a href="#">Sportswear</a></li>
									<li><a href="#">Swimwear</a></li>
									<li><a href="#">Trousers</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Man</a>
								<ul>
									<li><a href="#">All</a></li>
									<li><a href="#">Coats & Jackets</a></li>
									<li><a href="#">Shirts</a></li>
									<li><a href="#">Sportswear</a></li>
									<li><a href="#">Swimwear</a></li>
									<li><a href="#">Trousers</a></li>
								</ul>
							</li>
							<li><a href="#">Jacket</a></li>
							<li><a href="#">New arrivals</a></li>
							<li><a href="#">Shoes</a></li>
							<li><a href="">Socks</a></li>
						</ul>
					</div>


					<!-- Widget Product -->
					<div class="widget-sidebar widget-product">
						<h6 class="widget-title">Terpopuler</h6>
						<ul class="widget-content">

							<!--Item-->
							<?php foreach (Product::getBestseller() as $data) { ?>  

								<li>
									<a class="product-img" href="#">
										<img src="<?php echo Yii::app()->baseUrl; ?>/image/product/small/<?php echo $data["image"]; ?>" alt="<?php echo $data["name"]; ?>" title="<?php echo $data["name"]; ?>">
									</a>
									<div class="product-content">
										<a class="product-link" href="#"><?php echo $data["name"]; ?></a>
										<div class="star-rating">
											<span style="width: 80%;"></span>
										</div>
										<span class="product-amount"><?php echo Product::model()->rupiah($data["price"]); ?></span>
									</div>
								</li>

								<?php } ?>
							</ul>
						</div>


					</div>
					<!-- End Sidebar -->


				</div>
			</div>
		</section>
		<!-- End Page Content -->

	</div>
	<!-- End Page Content Wraper -->

	<?php include_once('front/tpl_footer.php');?>
