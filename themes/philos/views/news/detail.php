<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('list'),
	$model->name,
	);

$this->pageTitle=$model->name;
?>
<HR>
<!-- Main Container -->
<section class="blog_post">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-9">
				<div class="entry-detail">
					<div class="page-title">
						<h1><?php echo $model->name; ?></h1>
					</div>
					<div class="entry-meta-data"> 
						<span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#"><?php echo $model->Category->name; ?></a></span> 
					</div>
					<div class="content-text clearfix">
						<?php echo $model->description; ?>
					</div>
				</div>
				<!-- Related Posts -->
				<div class="single-box">
					<h4>Terkait</h4>
					<div class="slider-items-products">
						<div id="related-posts" class="product-flexslider hidden-buttons">
							<div class="slider-items slider-width-col4 fadeInUp">
								<?php foreach (News::getNews() as $data) { ?> 
									<div class="product-item">
										<article class="entry">
										<div class="entry-thumb"> <img src="<?php echo YII::app()->baseUrl."/image/news/middle/".$data['image']; ?>" alt="<?php echo $data['name']; ?>"> </div>
											<div class="entry-info">
												<h4 class="entry-title"><a href="<?php echo YII::app()->baseUrl."/index.php?r=news/detail&id=".$data['id_news']; ?>"><?php echo $data['name']; ?></a></h4>
											</div>
										</article>
									</div>
									<?php } ?> 

								</div>
							</div>
						</div>
					</div>
					<!-- ./Related Posts --> 

				</div>
				<!-- right colunm -->
				<aside class="sidebar col-xs-12 col-sm-3"> 

					<!-- tags -->
					<div class="popular-tags-area block">
						<div class="sidebar-bar-title">
							<h3>Kategori</h3>
						</div>
						<div class="tag">
							<ul>
							<?php foreach (Category::getCategory() as $data) { ?> 
								<li><a href="<?php echo YII::app()->baseUrl."/index.php?r=category/news&name=".$data['name']; ?>"><?php echo $data['name']; ?></a></li>
							<?php } ?> 
							</ul>
						</div>
					</div>

					<!-- ./tags --> 

				</aside>
				<!-- ./right colunm --> 
			</div>
		</div>
	</section>
	<!-- Main Container End --> 