<?php
/**
 * Override
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<div id="order_review" style="zoom: 1; position: relative;"><table class="shop_table">
		<thead>
			<tr>
				<th class="product-name">Product</th>
				<th class="product-total">Total</th>
			</tr>
		</thead>
		<tfoot>

			<tr class="cart-subtotal">
				<th>Cart Subtotal</th>
				<td><span class="amount">£85.00</span></td>
			</tr>




				<tr class="shipping">
	<th>Shipping and Handling</th>
	<td>

			Free Shipping				<input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping" class="shipping_method">



			</td>
</tr>







			<tr class="order-total">
				<th>Order Total</th>
				<td><strong><span class="amount">£85.00</span></strong> </td>
			</tr>


		</tfoot>
		<tbody>
									<tr class="cart_item">
							<td class="product-name">
								Flying Ninja								 <strong class="product-quantity">× 1</strong>															</td>
							<td class="product-total">
								<span class="amount">£12.00</span>							</td>
						</tr>
												<tr class="cart_item">
							<td class="product-name">
								Happy Ninja								 <strong class="product-quantity">× 1</strong>															</td>
							<td class="product-total">
								<span class="amount">£18.00</span>							</td>
						</tr>
												<tr class="cart_item">
							<td class="product-name">
								Happy Ninja								 <strong class="product-quantity">× 1</strong>															</td>
							<td class="product-total">
								<span class="amount">£35.00</span>							</td>
						</tr>
												<tr class="cart_item">
							<td class="product-name">
								Ninja Silhouette								 <strong class="product-quantity">× 1</strong>															</td>
							<td class="product-total">
								<span class="amount">£20.00</span>							</td>
						</tr>
								</tbody>
	</table>


	<div id="payment">
				<ul class="payment_methods methods">
									<li class="payment_method_bacs">
							<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="">
							<label for="payment_method_bacs">Direct Bank Transfer </label>
							<div class="payment_box payment_method_bacs"><p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
</div>						</li>
												<li class="payment_method_cheque">
							<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" data-order_button_text="">
							<label for="payment_method_cheque">Cheque Payment </label>
							<div class="payment_box payment_method_cheque" style="display:none;"><p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
</div>						</li>
												<li class="payment_method_paypal">
							<input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">
							<label for="payment_method_paypal">PayPal <img src="http://localhost/wordpress/wp-content/plugins/woocommerce/assets/images/icons/paypal.png" alt="PayPal"></label>
							<div class="payment_box payment_method_paypal" style="display:none;"><p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account</p>
</div>						</li>
								</ul>

		<div class="form-row place-order">

			<noscript>Since your browser does not support JavaScript, or it is disabled, please ensure you click the &lt;em&gt;Update Totals&lt;/em&gt; button before placing your order. You may be charged more than the amount stated above if you fail to do so.&lt;br/&gt;&lt;input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" /&gt;</noscript>

			<input type="hidden" id="_wpnonce" name="_wpnonce" value="5ba271452a"><input type="hidden" name="_wp_http_referer" value="/wordpress/wp-admin/admin-ajax.php">

			<input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">


		</div>

		<div class="clear"></div>

	</div></div>
