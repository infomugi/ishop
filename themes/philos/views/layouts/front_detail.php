<?php include_once('front/tpl_header.php');?>

<?php include_once('front/tpl_navigation.php');?>

<!-- Bread Crumb -->
<section class="breadcrumb">
	<div class="container hidden-xs">
		<div class="row">
			<div class="col-12">
				<nav class="breadcrumb-link">
					<a href="<?php echo $url."site"; ?>">Beranda</a>
					<span><?php echo $this->pageTitle; ?></span>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- Bread Crumb -->

<!-- Page Content Wraper -->
<div class="page-content-wraper">

	<!-- Page Content -->
	<section class="content-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<?php echo $content; ?>

				</div>
			</div>
		</section>
		<!-- End Page Content -->
	</div>
</section>

</div>
<!-- End Page Content Wraper -->

<?php include_once('front/tpl_footer.php');?>
