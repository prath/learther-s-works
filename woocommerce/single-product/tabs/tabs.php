<?php
/**
 * Override Woo tabs.php
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>


<div class="woocommerce-tabs tab-vertical">

	<ul class="tabs">
		<li class="description_tab"><a href="#tab-description">Description</a></li>
		<li class="reviews_tab"><a href="#tab-reviews">Reviews (5)</a></li>
	</ul>

	<div id="tab-description" class="panel entry-content">

		<?php include 'woocommerce/single-product/tabs/description.php';?>

	</div>

	<div id="tab-reviews" class="panel entry-content">

		<?php include 'woocommerce/single-product-reviews.php';?>

	</div>
</div>
