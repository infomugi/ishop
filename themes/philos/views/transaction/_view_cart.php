<?php
$quantity = Transaction::model()->quantityTransaction($data->product_id,$data->customer_id);
$price = Product::model()->realPrice($data->Product->id_product);
$subtotal = Transaction::model()->subtotal($price,$quantity);
?>

<tr>
<td class="cart_product">
  <a href=""><img src="<?php echo YII::app()->baseUrl."/image/product/small/".$data->Product->image; ?>"/></a>
</td>
<td class="cart_description"><p class="product-name"><a href=""><?PHP echo $data->Product->name; ?></a></p>
  <!-- <small><a href="">Color : <?PHP echo Product::model()->color($data->Product->color); ?></a></small><br> -->
  <!-- <small><a href="">Size : <?PHP echo $data->size; ?></a></small></td> -->
  <td class="availability in-stock"><span class="label"><?PHP echo Product::model()->status($data->Product->status); ?></span></td>
  <td class="price"><span><?php echo Product::model()->rupiah(Product::model()->realPrice($data->Product->id_product));?></span></td>
  <td class="qty"><input class="form-control input-sm" type="text" disabled="true" value="<?php echo $quantity; ?>"></td>
  <td class="price"><span><?PHP echo Product::model()->rupiah($subtotal); ?></span></td>
</tr>

