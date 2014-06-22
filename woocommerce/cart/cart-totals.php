<?php
/**
 * Override
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

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

			<?php include 'woocommerce/cart/cart-shipping.php'; ?>

			<tr class="order-total">
				<th>Order Total</th>
				<td>
					<strong><span class="amount">£30.00</span></strong>
				</td>
			</tr>
		</tbody>

	</table>

</div>
