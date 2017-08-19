
<div class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
  <div class="product-item">
    <div class="item-inner">
      <div class="product-thumbnail">
        <div class="icon-new-label new-right"><?php echo Product::model()->status($data->status)?></div>
        <div class="pr-img-area">
          <figure> 
            <img class="first-img" src="<?php echo YII::app()->baseUrl."/image/product/small/".$data->image; ?>" alt="<?php echo $data->name; ?>"> 
            <img class="hover-img" src="<?php echo YII::app()->baseUrl."/image/product/small/".$data->image; ?>" alt="<?php echo $data->name; ?>">
          </figure>
          <?php if($data->callus==0){ ?>
          <?php echo CHtml::link('<span><i class="fa fa-shopping-cart"></i> Beli</span>',
            array('order/add', 'product'=>$data->id_product),
            array('class' => 'add-to-cart-mt' ,'title'=>'Add to Cart', 'type'=>'button'));
            ?>  
             <?php }else{ ?>
              <button type="button" class="add-to-cart-mt"> <i class="fa fa-phone"></i><span> Call US <?php echo Setting::model()->phone(); ?></span> </button></a>
             <?php } ?>
          </div>
          <div class="pr-info-area">
            <div class="pr-button">
              <div class="mt-button add_to_wishlist hidden-xs">
                <?php echo CHtml::link('<i class="fa fa-heart"></i> ', 
                  array('product/likes', 'id'=>$data->id_product
                    ),  array('title'=>'Like Product'));
                    ?>                              
                  </div>

                  <div class="mt-button quick-view hidden-xs"> 
                    <?php
                    echo CHtml::ajaxLink("<i class='fa fa-search'></i>",Yii::app()->createUrl("product/quickview"),
                      array(
                        'type'=>'POST',
                        'url'=>"js:$(this).attr('href')",
                        'data' => array( 'id' => $data->id_product),
                        'success'=>'function(data) { $("#viewModal .quickview p").html(data); 
                        $("#viewModal").modal(); }'
                        ),
                      array('href' => Yii::app()->createUrl( 'product/quickview' ),));
                      ?>
                    </div>

                    <?php if($data->callus==0){ ?>
                      <div class="mt-button quick-view hidden-xs">
                        <?php echo CHtml::link('<i class="fa fa-shopping-cart"></i> ', 
                          array('product/detail', 'id'=>$data->id_product,
                            ),  array('title'=>'View Product'));
                        ?>
                      </div>
                      <?php }else{ ?>
                        <div class="mt-button add_to_compare"> <a href="#" title="Call US"> <i class="fa fa-phone"></i> </a> </div>
                        <?php } ?>

                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> 
                        <?php echo CHtml::link($data->name, 
                          array('product/detail', 'id'=>$data->id_product,
                            ), array('title'=>'Detail Product'));
                            ?>
                          </div>
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
                    </div>
