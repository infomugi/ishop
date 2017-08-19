<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
  'Product'=>array('list'),
  'List',
  );

$this->pageTitle='Product';
?>

<!-- Product Content -->
<div class="col-md-9 push-md-3">


  <!-- Product Filter -->
  <div class="product-filter-content">
    <div class="product-filter-content-inner">

      <!-- Title -->
      <div class="list-page-title">
        <h2 class=""><?php echo $this->pageTitle; ?> <small>120 Products</small></h2>
      </div>
      <!-- End Title -->

      <!--Product List/Grid Icon-->
      <div class="product-view-switcher">
        <label>View</label>
        <div class="product-view-icon product-grid-switcher product-view-icon-active">
          <a class="" href="#"><i class="fa fa-th" aria-hidden="true"></i></a>
        </div>
        <div class="product-view-icon product-list-switcher">
          <a class="" href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
        </div>
      </div>

    </div>
  </div>
  <!-- End Product Filter -->




  <!-- Product Grid -->
  <div class="row product-list-item">

   <?php foreach (Product::getLastest() as $data) { ?>   

    <!-- item.1 -->
    <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
      <!--Product Item-->
      <div class="product-item">
        <div class="product-item-inner">
          <div class="product-img-wrap">
            <img src="<?php echo Yii::app()->baseUrl; ?>/image/product/big/<?php echo $data["image"]; ?>" alt="">
          </div>
          <div class="product-button">
            <a href="<?php echo Yii::app()->baseUrl; ?>/order/create/id/<?php echo $data["id_product"]; ?>" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
            <a href="<?php echo Yii::app()->baseUrl; ?>/product/likes/id/<?php echo $data["id_product"]; ?>" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
            <a href="<?php echo Yii::app()->baseUrl; ?>/product/detail/id/<?php echo $data["id_product"]; ?>" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
          </div>
        </div>
        <div class="product-detail">
          <a class="tag" href="#"><?php echo $data["category"]; ?></a>
          <p class="product-title"><a href="#"><?php echo $data["name"]; ?></a></p>
          <div class="product-rating">
            <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
              <span style="width: 60%"></span>
            </div>
            <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
          </div>
          <p class="product-description">
            <?php echo $data["description"]; ?>
          </p>
          <h5 class="item-price"><?php echo Product::model()->rupiah(Product::model()->realPrice($data["id_product"])); ?></h5>
        </div>
      </div>
      <!-- End Product Item-->
    </div>

    <?php } ?>

  </div>
  <!-- End Product Grid -->

  <div class="pagination-wraper">
    <p>Showing 1 - 15 of 120 results</p>
    <div class="pagination">
      <ul class="pagination-numbers">
                    <!--<li>
                        <a href="#" class="prev page-number"><i class="fa fa-angle-double-left"></i></a>
                      </li>-->
                      <li>
                        <a href="#" class="page-number current">1</a>
                      </li>
                      <li>
                        <a href="#" class="page-number">2</a>
                      </li>
                      <li>
                        <a href="#" class="page-number">3</a>
                      </li>
                      <li>
                        <span class="page-number dots">...</span>
                      </li>
                      <li>
                        <a href="#" class="page-number">29</a>
                      </li>
                      <li>
                        <a href="#" class="next page-number"><i class="fa fa-angle-double-right"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
              <!-- End Product Content -->

