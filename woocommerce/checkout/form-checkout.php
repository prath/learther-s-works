<?php
/**
 * Override
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<?php
	include 'woocommerce/notices/notice.php';
	include 'woocommerce/checkout/form-login.php';
?>

<?php
	include 'woocommerce/notices/notice.php';
	include 'woocommerce/checkout/form-coupon.php';
?>

<form name="checkout" method="post" class="checkout" action="">

	<div class="row-stretched" id="customer_details">

		<div class="col-md-6">

			<?php include 'woocommerce/checkout/form-billing.php';?>
		</div>

		<div class="col-md-6">

			<?php include 'woocommerce/checkout/form-shipping.php';?>

		</div>

	</div>

	<h3 id="order_review_heading">Your order</h3>

	<?php include 'woocommerce/checkout/review-order.php';?>

</form>

