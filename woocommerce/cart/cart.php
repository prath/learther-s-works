<?php
/**
 * Override
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>


<?php include 'woocommerce/notices/success.php'; ?>

<form action="http://localhost/wordpress/?page_id=1701" method="post" class="form-inline">

	<table class="shop_table cart" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove">&nbsp;</th>
				<th class="product-thumbnail">&nbsp;</th>
				<th class="product-name">Product</th>
				<th class="product-price">Price</th>
				<th class="product-quantity">Quantity</th>
				<th class="product-subtotal">Total</th>
			</tr>
		</thead>
		<tbody>
			<tr class="cart_item">

				<td class="product-remove">
					<a href="" class="remove" title="Remove this item">
						<i class="dripicon dripicon-cross"></i>
					</a>
				</td>
				<td class="product-thumbnail">
					<a href="">
						<img src="assets/front/dummy-images/banner/cat1.png" class="attachment-shop_thumbnail wp-post-image" alt="">
					</a>
				</td>
				<td class="product-name">
					<a href="">
						Flying Ninja
					</a>
				</td>
				<td class="product-price">
					<span class="amount">£12.00</span>
				</td>
				<td class="product-quantity">

					<?php include 'woocommerce/global/quantity-input.php';?>

				</td>
				<td class="product-subtotal">
					<span class="amount">£12.00</span>
				</td>

			</tr>
			<tr class="cart_item">

				<td class="product-remove">
					<a href="" class="remove" title="Remove this item">
						<i class="dripicon dripicon-cross"></i>
					</a>
				</td>
				<td class="product-thumbnail">
					<a href="">
						<img src="assets/front/dummy-images/banner/cat1.png" class="attachment-shop_thumbnail wp-post-image" alt="">
					</a>
				</td>
				<td class="product-name">
					<a href="">
						Flying Ninja
					</a>
				</td>
				<td class="product-price">
					<span class="amount">£12.00</span>
				</td>
				<td class="product-quantity">

					<?php include 'woocommerce/global/quantity-input.php';?>

				</td>
				<td class="product-subtotal">
					<span class="amount">£12.00</span>
				</td>

			</tr>

			<tr>
				<td colspan="6" class="actions">		<div class="coupon form-group">
						<label for="coupon_code">
							Coupon:
						</label>
						<input type="text" name="coupon_code" class="form-control input-text" id="coupon_code" value="" placeholder="Coupon code">
						<button type="submit" name="" value="1" class="button btn">Apply Coupon <i class="fa fa-angle-right btn-icon"></i></button>
					</div>
					<button type="submit" name="update_cart" value="1" class="button btn btn-secondary">Update Cart <i class="fa fa-angle-right btn-icon"></i></button>
					<button type="submit" name="proceed" value="1" class="button btn">Proceed to Checkout <i class="fa fa-angle-right btn-icon"></i></button>
					<input type="hidden" id="_wpnonce" name="_wpnonce" value="034a8ba284">
					<input type="hidden" name="_wp_http_referer" value="/wordpress/?page_id=1701">
				</td>
			</tr>

		</tbody>
	</table>
</form>

<div class="cart-collaterals row-stretched">

	<?php include 'woocommerce/cart/cart-totals.php'; ?>
	<?php include 'woocommerce/cart/shipping-calculator.php'; ?>

</div>

