<div id="quick_view_popup-overlay"></div>
<div style="display: block;" id="quick_view_popup-wrap">
  <div id="quick_view_popup-outer">
    <div id="quick_view_popup-content">
      <div style="width:auto;height:auto;overflow: auto;position:relative;">
        <div class="product-view-area">
          <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
            <div class="icon-sale-label sale-left">Sale</div>
            <div class="large-image"> <a href="<?php echo YII::app()->baseUrl."/image/product/middle/".$model->image; ?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="<?php echo YII::app()->baseUrl."/image/product/middle/".$model->image; ?>"> </a> </div>
            
          </div>
          <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7">
            <div class="product-details-area">
              <div class="product-name">
                <h1><?php echo $model->name;?></h1>
              </div>

              <?php if($model->discount!=0){ ?>
                <div class="price-box">
                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo Product::model()->rupiah(Product::model()->realPrice($model->id_product)); ?> </span> </p>
                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo Product::model()->rupiah($model->price); ?> </span> </p>
                </div>
                <?php }else{ ?>
                  <div class="price-box">
                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo Product::model()->rupiah($model->price); ?> </span> </p>
                  </div>
                  <?php } ?>

                  <div class="ratings">
                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                    <p class="availability in-stock pull-right"> Status: <span><?php echo Product::model()->status($model->status); ?></span></p>
                  </div>
                  <div class="short-description">
                    <h2>Deskripsi</h2>
                    <p><?php echo Product::model()->readmore($model->description); ?> </p>
                  </div>
                  <div class="product-color-size-area">
                    <div class="color-area">
                      <h2 class="saider-bar-title">Warna</h2>
                      <div class="color">
                        <?php echo Product::model()->color($model->color); ?>
                      </div>
                    </div>
                  </div>
                  <div class="product-variation">
                    <form action="#" method="post">
                      <div class="cart-plus-minus">
                        <label for="qty">Jumlah:</label>
                        <div class="numbers-row">
                          <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                          <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                          <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                        </div>
                      </div>
                      <?php
                      echo $model->id_product;
                      echo CHtml::ajaxLink("<i class='fa fa-shopping-cart'></i> Beli</span>",
                        Yii::app()->createUrl("order/buy"),
                        array(
                          'type'=>'POST',
                          'data' => array( 'id' => $model->id_product),
                          // 'beforeSend' => "function(request){}",
                          'success' => "function(data){alert(data);}",
                          ),
                        array('href' => Yii::app()->createUrl('order/buy'),
                          ));
                          ?>
                          <button class="button pro-add-to-cart" title="Add to Cart" type="button"><span><i class="fa fa-shopping-cart"></i> Beli</span></button>
                        </form>
                      </div>
                      <div class="product-cart-option">
                        <ul>
                          <li>
                           <?php
                           echo CHtml::ajaxLink("<i class='fa fa-thumbs-up'></i> Like</span>",
                            Yii::app()->createUrl("product/likes"),
                            array(
                              'type'=>'POST',
                              'data' => array( 'product' => $model->id_product),
                              'beforeSend' => "function(request){}",
                              'success' => "function(data){alert(data);}",
                              ),
                            array('href' => Yii::app()->createUrl('product/likes'),
                              ));
                              ?>
                            </li>
                            <li><a href="#" title="Prodak ini Dilihat <?php echo $model->views; ?> Kali"><i class="fa fa-eye"></i><span><?php echo $model->views; ?></span></a></li>
                            <li><a href="#" title="Stock Prodak <?php echo $model->stock; ?> Pcs"><i class="fa fa-archive"></i><span><?php echo $model->stock; ?></span></a></li>
                            <li><a href="#" title="Disukai <?php echo $model->likes; ?> Orang"><i class="fa fa-heart"></i><span><?php echo $model->likes; ?></span></a></li>
                            <!-- <li><a href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a></li> -->
                            <!-- <li><a href="#"><i class="fa fa-retweet"></i><span>Add to Compare</span></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--product-view--> 

                </div>
              </div>
              <a style="display: inline;" id="quick_view_popup-close" href="index.html"><i class="fa fa-times-circle"></i></a> </div>
            </div>
            <!-- JS --> 