<?php
$baseUrl = Yii::app()->baseUrl; 
$url = Yii::app()->baseUrl."/index.php?r="; 
?>   

<!--lastest-products-->
<div class="container">
  <div class="home-tab">
   <ul class="nav home-nav-tabs home-product-tabs">
    <li class="active"><a href="#featured" data-toggle="tab" aria-expanded="false">Terpopuler</a></li>
    <li class="divider"></li>
    <li> <a href="#top-sellers" data-toggle="tab" aria-expanded="false">Terfavorite</a> </li>
  </ul>
  <div id="productTabContent" class="tab-content">
    <div class="tab-pane active in" id="featured">
      <div class="">
        <div class="special-products-pro">
          <div class="slider-items-products">
            <div id="special-products-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4">

                <?php foreach (Product::getPopular() as $data) { ?>   

                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label new-right"><?php echo Product::model()->status($data["status"]); ?></div>
                        <div class="pr-img-area"> <a title="<?php echo Product::model()->status($data["status"]); ?>" href="<?php echo $url;?>product/detail&id=<?php echo $data["id_product"]; ?>">
                          <figure> <img class="first-img" src="<?php echo $baseUrl;?>/image/product/small/<?php echo $data["image"]; ?>" alt="<?php echo $data["name"]; ?>"> 
                            <img class="hover-img" src="<?php echo $baseUrl;?>/image/product/small/<?php echo $data["image"]; ?>" alt="<?php echo $data["name"]; ?>"></figure>
                          </a>
                          <a href="<?php echo $url;?>order/add&product=<?php echo $data["id_product"]; ?>">

                            <?php if($data["callus"]==0){ ?>
                              <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Beli</span> </button></a>
                              <?php }else{ ?>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-phone"></i><span> Call US <?php echo Setting::model()->phone(); ?></span> </button></a>
                                <?php } ?>

                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="<?php echo $url;?>product/likes&id=<?php echo $data["id_product"]; ?>"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button quick-view"> 
                                    <?php
                                    echo CHtml::ajaxLink("<i class='fa fa-search'></i>",Yii::app()->createUrl("product/quickview"),
                                      array(
                                        'type'=>'POST',
                                        'url'=>"js:$(this).attr('href')",
                                        'data' => array( 'id' => $data["id_product"]),
                                        'success'=>'function(data) { $("#viewModal .quickview p").html(data); 
                                        $("#viewModal").modal(); }'
                                        ),
                                      array('href' => Yii::app()->createUrl( 'product/quickview' ),));
                                    ?>
                                  </div>
                                  <?php if($data["callus"]==0){ ?>
                                    <div class="mt-button add_to_compare"> <a href="<?php echo $url;?>order/add&product=<?php echo $data["id_product"]; ?>"> <i class="fa fa-shopping-cart"></i> </a> </div>
                                    <?php }else{ ?>
                                      <div class="mt-button add_to_compare"> <a href="#" title="Call US"> <i class="fa fa-phone"></i> </a> </div>
                                      <?php } ?>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"> <a title="<?php echo $data["name"]; ?>" href="<?php echo $url;?>product/detail&id=<?php echo $data["id_product"]; ?>"><?php echo $data["name"]; ?> </a> </div>
                                    <div class="item-content">
                                     <div class="item-price">

                                       <?php if($data["callus"]==0){ ?>
                                         <?php if($data["discount"]!=0){ ?>
                                          <div class="price-box">
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo Product::model()->rupiah(Product::model()->realPrice($data["id_product"])); ?> </span> </p>
                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo Product::model()->rupiah($data["price"]); ?> </span> </p>
                                          </div>
                                          <?php }else{ ?>
                                            <div class="price-box">
                                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo Product::model()->rupiah($data["price"]); ?> </span> </p>
                                            </div>
                                            <?php } ?>
                                            <?php }else{ ?>
                                              <div class="price-box">
                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo Product::model()->callus($data["callus"]); ?> </span> </p>
                                              </div>
                                              <?php } ?>

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <?php } ?>



                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="top-sellers">
                       <div class="">
                        <div class="special-products-pro">
                          <div class="slider-items-products">
                            <div id="special-products-slider" class="product-flexslider hidden-buttons">
                              <div class="slider-items slider-width-col4">

                                <?php foreach (Product::getFavorite() as $data) { ?>   

                                  <div class="product-item">
                                    <div class="item-inner">
                                      <div class="product-thumbnail">
                                        <div class="icon-new-label new-right"><?php echo Product::model()->status($data["status"]); ?></div>
                                        <div class="pr-img-area"> <a title="<?php echo Product::model()->status($data["status"]); ?>" href="<?php echo $url;?>product/detail&id=<?php echo $data["id_product"]; ?>">
                                          <figure> <img class="first-img" src="<?php echo $baseUrl;?>/image/product/small/<?php echo $data["image"]; ?>" alt="<?php echo $data["name"]; ?>"> 
                                            <img class="hover-img" src="<?php echo $baseUrl;?>/image/product/small/<?php echo $data["image"]; ?>" alt="<?php echo $data["name"]; ?>"></figure>
                                          </a>
                                          <a href="<?php echo $url;?>order/add&product=<?php echo $data["id_product"]; ?>">

                                            <?php if($data["callus"]==0){ ?>
                                              <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Beli</span> </button></a>
                                              <?php }else{ ?>
                                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-phone"></i><span> Call US <?php echo Setting::model()->phone(); ?></span> </button></a>
                                                <?php } ?>

                                              </div>
                                              <div class="pr-info-area">
                                                <div class="pr-button">
                                                  <div class="mt-button add_to_wishlist"> <a href="<?php echo $url;?>product/likes&id=<?php echo $data["id_product"]; ?>"> <i class="fa fa-heart"></i> </a> </div>
                                                  <div class="mt-button quick-view"> 
                                                    <?php
                                                    echo CHtml::ajaxLink("<i class='fa fa-search'></i>",Yii::app()->createUrl("product/quickview"),
                                                      array(
                                                        'type'=>'POST',
                                                        'url'=>"js:$(this).attr('href')",
                                                        'data' => array( 'id' => $data["id_product"]),
                                                        'success'=>'function(data) { $("#viewModal .quickview p").html(data); 
                                                        $("#viewModal").modal(); }'
                                                        ),
                                                      array('href' => Yii::app()->createUrl( 'product/quickview' ),));
                                                    ?>
                                                  </div>
                                                  <?php if($data["callus"]==0){ ?>
                                                    <div class="mt-button add_to_compare"> <a href="<?php echo $url;?>order/add&product=<?php echo $data["id_product"]; ?>"> <i class="fa fa-shopping-cart"></i> </a> </div>
                                                    <?php }else{ ?>
                                                      <div class="mt-button add_to_compare"> <a href="#" title="Call US"> <i class="fa fa-phone"></i> </a> </div>
                                                      <?php } ?>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="<?php echo $data["name"]; ?>" href="<?php echo $url;?>product/detail&id=<?php echo $data["id_product"]; ?>"><?php echo $data["name"]; ?> </a> </div>
                                                    <div class="item-content">
                                                     <div class="item-price">

                                                       <?php if($data["callus"]==0){ ?>
                                                         <?php if($data["discount"]!=0){ ?>
                                                          <div class="price-box">
                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo Product::model()->rupiah(Product::model()->realPrice($data["id_product"])); ?> </span> </p>
                                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo Product::model()->rupiah($data["price"]); ?> </span> </p>
                                                          </div>
                                                          <?php }else{ ?>
                                                            <div class="price-box">
                                                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo Product::model()->rupiah($data["price"]); ?> </span> </p>
                                                            </div>
                                                            <?php } ?>
                                                            <?php }else{ ?>
                                                              <div class="price-box">
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo Product::model()->callus($data["callus"]); ?> </span> </p>
                                                              </div>
                                                              <?php } ?>

                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>


                                                  <?php } ?>



                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
