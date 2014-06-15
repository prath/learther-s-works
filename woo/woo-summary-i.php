<?php
/**
 * Partial Woo Summary Two Column
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<div class="summary entry-summary summary-two-col">

	<div class="row-stretched">
		<div class="col-md-6">
			<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
				<p class="price">
					<del>
						<span class="amount">$550</span>
					</del>
					<ins>
						<span class="amount">$400</span>
					</ins>
				</p>

				<meta itemprop="price" content="35">
				<meta itemprop="priceCurrency" content="GBP">
				<link itemprop="availability" href="http://schema.org/InStock">
			</div>

			<div class="woocommerce-product-rating">
				<div class="star-rating" title="Rated 4.00 out of 5">
					<span style="width:80%">
						<strong itemprop="ratingValue" class="rating">4.00</strong> out of 5
					</span>
				</div>
				<a href="#reviews" class="woocommerce-review-link" rel="nofollow">
					(<span itemprop="ratingCount" class="count">5</span> customer reviews)
				</a>
			</div>

			<div itemprop="description">
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
			</div>
		</div>


		<div class="col-md-6">
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
						<div class="quantity buttons_added">
							<input type="button" value="-" class="minus">
							<input type="number" size="4" title="Qty" value="1" name="quantity" step="1" min="1" class="input-text qty text form-control">
							<input type="button" value="+" class="plus">
						</div>
						<button type="submit" class="single_add_to_cart_button button alt btn">Add to cart <i class="fa fa-angle-right btn-icon"></i></button>
					</div>
				</div>
			</form>


			<div class="yith-wcwl-add-to-wishlist">

				<div class="yith-wcwl-add-button show">
					<a href="" data-product-id="56" data-product-type="simple" class="add_to_wishlist single_add_to_wishlist button alt btn-diamond btn-diamond-secondary add-wishlist">
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

			<div class="product_meta">

				<span class="sku_wrapper">SKU: <span class="sku" itemprop="sku" data-o_sku="N/A">N/A</span>.</span>

				<span class="posted_in">
					Categories:
					<a href="http://localhost/wordpress/?product_cat=clothing" rel="tag">
						Clothing
					</a>
					,
					<a href="http://localhost/wordpress/?product_cat=hoodies" rel="tag">
						Hoodies
					</a>
				</span>

			</div>
		</div>
	</div>
</div>
