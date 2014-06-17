<?php
/**
 * Partial Woo Cart Collaterals
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<div class="cart-collaterals row-stretched">

	<div class="cart_totals col-md-6">


		<h2 class="section-title dark">Cart Totals</h2>

		<table cellspacing="0">

			<tbody>
				<tr class="cart-subtotal">
					<th>Cart Subtotal</th>
					<td>
						<span class="amount">£30.00</span>
					</td>
				</tr>
				<tr class="shipping">
					<th>Shipping and Handling</th>
					<td>
						Free Shipping
						<input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping" class="shipping_method">
					</td>
				</tr>
				<tr class="order-total">
					<th>Order Total</th>
					<td>
						<strong><span class="amount">£30.00</span></strong>
					</td>
				</tr>
			</tbody>

		</table>

	</div>


	<form class="shipping_calculator col-md-6" action="" method="post">

		<h2 class="section-title dark">
			<a href="#" class="shipping-calculator-button">Calculate Shipping</a><i class="fa fa-angle-down btn-icon"></i>
		</h2>

		<section class="shipping-calculator-form">

			<p class="form-row form-row-wide">
				<select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state form-control" rel="calc_shipping_state">
					<option value="">Select a country…</option>
				</select>
			</p>

			<p class="form-row form-row-wide">
				<input type="text" class="input-text form-control" value="" placeholder="State / county" name="calc_shipping_state" id="calc_shipping_state">
			</p>

			<p class="form-row form-row-wide">
				<input type="text" class="input-text form-control" value="" placeholder="Postcode / Zip" name="calc_shipping_postcode" id="calc_shipping_postcode">
			</p>

			<p>
				<button type="submit" name="calc_shipping" value="1" class="button btn">Update Totals <i class="fa fa-angle-right btn-icon"></i></button>
			</p>

			<input type="hidden" id="_wpnonce" name="_wpnonce" value="034a8ba284">
			<input type="hidden" name="_wp_http_referer" value="/wordpress/?page_id=1701">
		</section>

	</form>

</div>
