<?php
/**
 * Override Woo variable.php
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<form data-product_variations="" data-product_id="1376" enctype="multipart/form-data" method="post" class="variations_form cart">
  	<table cellspacing="0" class="variations">
		<tbody>
			<tr>
				<td class="label">
					<label for="pa_color">Color</label>
				</td>
				<td class="value">
					<select id="pa_color" name="attribute_pa_color" class="form-control">
						<option value="">Choose an option…</option>
						<option selected="selected" value="black">Black</option>
						<option value="blue" class="active">Blue</option>
					</select><a href="#reset" class="reset_variations">Clear selection</a>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="single_variation_wrap">
		<div class="variations_button">
			<label>Quantity</label>

			<?php include 'woocommerce/global/quantity-input.php'; ?>

			<button type="submit" class="single_add_to_cart_button button alt btn">Add to cart <i class="fa fa-angle-right btn-icon"></i></button>
		</div>
	</div>
</form>


<div class="yith-wcwl-add-to-wishlist">

	<div class="yith-wcwl-add-button show">
		<a href="" data-product-id="56" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist alt btn-diamond btn-diamond-secondary add-wishlist">
			<span class="diamond-icon"><i class="dripicon dripicon-plus"></i></span>Add to Wishlist
		</a>
		<img src="http://localhost/wordpress/wp-admin/images/wpspin_light.gif" class="ajax-loading" id="add-items-ajax-loading" alt="" width="16" height="16" style="visibility:hidden">
	</div>

	<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
		<span class="feedback">
			Product added!
		</span>
		<a href="http://localhost/wordpress/?page_id=1700">
			Browse Wishlist
		</a>
	</div>

	<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
		<span class="feedback">
			The product is already in the wishlist!
		</span>
		<a href="http://localhost/wordpress/?page_id=1700">
			Browse Wishlist
		</a>
	</div>

	<div style="clear:both"></div>

	<div class="yith-wcwl-wishlistaddresponse"></div>

</div>

<div class="clear"></div>
