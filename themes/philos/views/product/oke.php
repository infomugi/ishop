<div class="main-container col1-layout">
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-12 col-xs-12">
        <div class="shop-inner">
          <div class="product-grid-area">

            <div id="posts">
              <?php foreach($posts as $data): ?>
                <div class="post">

                  <ul class="data-grid">
                    <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                      <div class="product-item">
                        <div class="item-inner">
                          <div class="product-thumbnail">
                            <div class="icon-new-label new-right"><?php echo Product::model()->status($data->status)?></div>
                            <div class="pr-img-area"> <?php echo CHtml::link('', 
                              array('Product/views', 'id'=>$data->id_product
                                ),  array('title'=>'View Product'));
                                ?>
                                <figure> <img class="first-img" src="<?php echo YII::app()->baseUrl."/image/product/big/".$data->image; ?>" alt=""> <img class="hover-img" src="<?php echo YII::app()->baseUrl."/image/product/big/".$data->image; ?>" alt=""></figure>
                              </a>

                              <?php if($data->callus==0){ ?>
                               <?php echo CHtml::link('<span><i class="fa fa-shopping-cart"></i> Add to Cart</span>',
                                array('order/create', 'product'=>$data->id_product),
                                array('class' => 'add-to-cart-mt' ,'title'=>'Add Product', 'type'=>'button'));
                               ?>  
                               <?php }else{ ?>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-phone"></i><span> Call US <?php echo Setting::model()->phone(); ?></span> </button></a>
                                <?php } ?>

                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist">
                                    <?php echo CHtml::link('<i class="fa fa-heart"></i> ', 
                                      array('Product/likes', 'id'=>$data->id_product
                                        ),  array('title'=>'Like Product'));
                                        ?>                              
                                      </div>

                                      <div class="mt-button quick-view">
                                        <?php echo CHtml::link('<i class="fa fa-search"></i> ', 
                                          array('Product/views', 'id'=>$data->id_product,
                                            ),  array('title'=>'View Product'));
                                            ?>
                                          </div>

                                        </div>
                                      </div>
                                    </div>
                                    <div class="item-info">
                                      <div class="info-inner">
                                        <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html"><?php echo $data->name?> </a> </div>
                                        <div class="item-content">

                                          <?php if($data->callus==0){ ?>
                                           <?php if($data->discount!=0){ ?>
                                            <div class="price-box">
                                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo Product::model()->rupiah(Product::model()->realPrice($data->id_product)); ?> </span> </p>
                                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo Product::model()->rupiah($data->price); ?> </span> </p>
                                            </div>
                                            <?php }else{ ?>
                                              <div class="price-box">
                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo Product::model()->rupiah($data->price); ?> </span> </p>
                                              </div>
                                              <?php } ?>
                                              <?php }else{ ?>
                                               <div class="price-box">
                                                <p class="special-price"> <span class="price"> <?php echo Product::model()->callus($data->callus); ?> </span> </p>
                                              </div>
                                              <?php } ?>

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            <?php endforeach; ?>
                            
                          </div>

                          <?php $this->widget('ext.yiinfinite-scroll.YiinfiniteScroller', array(
                            'contentSelector' => '#posts',
                            'itemSelector' => 'div.post',
                            'loadingText' => 'Loading...',
                            'donetext' => 'This is the end... my only friend, the end',
                            'pages' => $pages,
                            )); ?>

                          <?php
                          $this->widget('ext.yiinfinite-scroll.YiinfiniteScroller', array(
                            'itemSelector' => 'div.post',
                            'pages' => $pages,
                            ));
                            ?>         



                          </div>
                          <div class="pagination-area ">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>