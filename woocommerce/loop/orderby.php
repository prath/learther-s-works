<?php
/**
 * Override
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby">
		<option value="menu_order">Default sorting</option>
		<option value="popularity">Sort by popularity</option>
		<option value="rating">Sort by average rating</option>
		<option value="date">Sort by newness</option>
		<option value="price">Sort by price: low to high</option>
		<option value="price-desc">Sort by price: high to low</option>
	</select>
	<input type="hidden" name="post_type" value="product">
</form>
