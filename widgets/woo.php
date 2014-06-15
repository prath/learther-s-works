<?php
/**
 * WooCommerce Widgets Mixin
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 *
 * @todo : - Woo Layered Nav Filter style.
 */
?>

<?php
/**
 * ====================================================================================================
 * TABLE OF CONTENTS
 * ====================================================================================================
 *
 * 1. widget_shopping_cart
 * 2. widget_recent_products
 * 3. widget_random_products
 * 4. widget_top_rated_products
 * 5. widget_product_categories
 * 6. widget_best_sellers
 * 7. widget_layered_nav_filters
 * 8. widget_layered_nav_dropdown
 * 9. widget_layered_nav
 * 10. widget_product_tag_cloud
 * 11. widget_recently_viewed_products
 * 12. widget_recent_reviews
 * 13. widget_product_search
 * 14. widget_featured_products
 * 15. widget_onsale
 *
 * ====================================================================================================
 */
?>

<?php
/**
 * Widget Shopping Cart
 * @return Template
 */
function widget_shopping_cart($title='Woo Cart.')
{
?>
<section class="widget woocommerce widget_shopping_cart">
	<h2 class="widget-title">
		<?php echo $title;?>
	</h2>
	<div class="widget-body widget_shopping_cart_content">
		<ul class="product_list_widget cart_list">
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />Woo Logo</a>
				<dl class="variation">
					<dt>Color :</dt>
					<dd>Black</dd>
				</dl>
				<span class="quantity">1 x
					<span class="amount">$20</span>
				</span>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />Ship Your Idea</a>
				<dl class="variation">
					<dt>Color :</dt>
					<dd>Black</dd>
				</dl>
				<span class="quantity">1 x
					<span class="amount">$24</span>
				</span>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat3.png" alt="" />Woo Album #4</a>
				<dl class="variation">
					<dt>Color :</dt>
					<dd>Black</dd>
				</dl>
				<span class="quantity">1 x
					<span class="amount">$25</span>
				</span>
			</li>
		</ul>
		<p class="total">
			<strong>Subtotal :</strong>
			<span class="amount">$88</span>
		</p>
		<p class="buttons">
			<a href="" class="btn btn-secondary btn-viewcart">View Cart <i class="fa fa-angle-right btn-icon"></i></a>
			<a href="" class="btn btn-primary btn-checkout">Checkout <i class="fa fa-angle-right btn-icon"></i></a>
		</p>
	</div>
</section>
<?php
}
?>


<?php
/**
 * Widget Recent Products
 * @return Template
 */
function widget_recent_products()
{
?>
<section class="widget woocommerce widget_recent_products">
	<h2 class="widget-title">
		new products.
	</h2>
	<div class="widget-body">
		<ul class="product_list_widget">
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="">Manly Boots</a>
				<span class="from">From :</span>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>

			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="">Lovely Travel Bag</a>
				<span class="amount">$2000</span>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat3.png" alt="">Travel Boot</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>

			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Random Products
 * @return Template
 */
function widget_random_products()
{
?>
<section class="widget woocommerce widget_random_products">
	<h2 class="widget-title">
		Woo Random Products.
	</h2>
	<div class="widget-body">
		<ul class="product_list_widget">
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />Woo Logo</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />Premium Quality</a>
				<span class="from">From :</span>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat3.png" alt="" />Ship Your Idea</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />The sticky post</a>
				<span class="amount">$18</span>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />Woo T-Shirt</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Top Rated Products
 * @return Template
 */
function widget_top_rated_products()
{
?>
<section class="widget woocommerce ">
	<h2 class="widget-title">
		Woo Top Rated.
	</h2>
	<div class="widget-body">
		<ul class="product_list_widget">
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />Woo Logo</a>
				<div title="Rated 5.00 out of 5" class="star-rating">
					<span style="width:100%">
						<strong class="rating">5</strong>out of 5</span>
				</div>by John Maria</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />Ninja Silhouette</a>
				<div title="Rated 3.00 out of 5" class="star-rating">
					<span style="width:60%">
						<strong class="rating">3</strong>out of 5</span>
				</div>by John Doe</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat3.png" alt="" />Patient Ninja</a>
				<div title="Rated 2.00 out of 5" class="star-rating">
					<span style="width:40%">
						<strong class="rating">2</strong>out of 5</span>
				</div>by John Smith</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Product Categories
 * @return Template
 */
function widget_product_categories()
{
?>
<section class="widget woocommerce widget_product_categories">
	<h2 class="widget-title">
		Woo Product Categories.
	</h2>
	<div class="widget-body">
		<ul>
			<li>
				<a href="#"> <i class="icon-circle-blank"></i>Albums</a>
			</li>
			<li>
				<a href="#"> <i class="icon-circle-blank"></i>Clothing</a>
			</li>
			<li>
				<a href="#"> <i class="icon-circle-blank"></i>Hoodies</a>
			</li>
			<li>
				<a href="#"> <i class="icon-circle-blank"></i>Music</a>
			</li>
			<li>
				<a href="#"> <i class="icon-circle-blank"></i>Posters</a>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Best Sellers
 * @return Template
 */
function widget_best_sellers()
{
?>
<section class="widget woocommerce widget_best_sellers">
	<h2 class="widget-title">
		Woo Best Seller.
	</h2>
	<div class="widget-body">
		<ul class="product_list_widget">
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />Woo Logo</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />Premium Quality</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat3.png" alt="" />Ship Your Idea</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />The sticky post</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />Woo T-Shirt</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Layered Nav Filters
 * @return Template
 */
function widget_layered_nav_filters()
{
?>
<section class="widget woocommerce widget_layered_nav_filters">
	<h2 class="widget-title">
		Woo Layered Nav Filter.
	</h2>
	<div class="widget-body">
		<ul>
			<li class="chosen">
				<a href="#">Black</a>
			</li>
			<li class="chosen">
				<a href="#">Blue</a>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Layered Nav Dropdown
 * @return Template
 */
function widget_layered_nav_dropdown()
{
?>
<section class="widget woocommerce widget_layered_nav_dropdown">
	<h2 class="widget-title">
		Woo Layered Nav Dropdown.
	</h2>
	<div class="widget-body">
		<select id="dropdown_layered_nav_color">
			<option value="">Any Colors</option>
			<option value="">Black</option>
			<option value="">Blue</option>
			<option value="">Green</option>
		</select>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Layered Nav
 * @return Template
 */
function widget_layered_nav()
{
?>
<section class="widget woocommerce widget_layered_nav">
	<h2 class="widget-title">
		Woo Layered Nav.
	</h2>
	<div class="widget-body">
		<ul>
			<li class="chosen">
				<a href="#">Black</a>
				<small class="count">5</small>
			</li>
			<li>
				<a href="#">Blue</a>
				<small class="count">5</small>
			</li>
			<li>
				<a href="#">Green</a>
				<small class="count">5</small>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Product Tag Cloud
 * @return Template
 */
function widget_product_tag_cloud()
{
?>
<section class="widget woocommerce widget_product_tag_cloud">
	<h2 class="widget-title">
		Woo Tags.
	</h2>
	<div class="widget-body">
		<a href="" target="_blank" class="btn-tags">shirt</a>
		<a href="" target="_blank" class="btn-tags">jacket</a>
		<a href="" target="_blank" class="btn-tags">pants</a>
		<a href="" target="_blank" class="btn-tags">suit</a>
		<a href="" target="_blank" class="btn-tags">woman bags</a>
		<a href="" target="_blank" class="btn-tags">shoes</a>
		<a href="" target="_blank" class="btn-tags">other products</a>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Recently Viewed Products
 * @return Template
 */
function widget_recently_viewed_products()
{
?>
<section class="widget woocommerce widget_recently_viewed_products">
	<h2 class="widget-title">
		Woo Recently Viewed.
	</h2>
	<div class="widget-body">
		<ul class="product_list_widget">
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />Woo Logo</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />Premium Quality</a>
				<span class="from">From :</span>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Recent Reviews
 * @return Template
 */
function widget_recent_reviews()
{
?>
<section class="widget woocommerce widget_recent_reviews">
	<h2 class="widget-title">
		Woo Recent Reviews.
	</h2>
	<div class="widget-body">
		<ul class="product_list_widget">
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />Woo Logo</a>
				<div title="Rated 5.00 out of 5" class="star-rating">
					<span style="width:100%">
						<strong class="rating">5</strong>out of 5</span>
				</div>by John Maria</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />Ninja Silhouette</a>
				<div title="Rated 3.00 out of 5" class="star-rating">
					<span style="width:60%">
						<strong class="rating">3</strong>out of 5</span>
				</div>by John Doe</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat3.png" alt="" />Patient Ninja</a>
				<div title="Rated 2.00 out of 5" class="star-rating">
					<span style="width:40%">
						<strong class="rating">2</strong>out of 5</span>
				</div>by John Smith</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Product Search
 * @return Template
 */
function widget_product_search()
{
?>
<section class="widget woocommerce widget_product_search">
	<h2 class="widget-title">
		Woo Search Products.
	</h2>
	<div class="widget-body">
		<form class="form-inline" action="" method="" accept-charset="utf-8">
			<div class="form-group">
				<label class="sr-only" for="exampleInputEmail2">Search Products</label>
				<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Search for products">
			</div>
			<button type="submit" class="btn">Search <i class="fa fa-angle-right btn-icon"></i></button>
		</form>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget Featured Products
 * @return Template
 */
function widget_featured_products()
{
?>
<section class="widget woocommerce widget_featured_products">
	<h2 class="widget-title">
		Woo Featured Products.
	</h2>
	<div class="widget-body">
		<ul class="product_list_widget">
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />Woo Logo</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />Premium Quality</a>
				<span class="from">From :</span>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>

<?php
/**
 * Widget On Sale
 * @return Template
 */
function widget_onsale()
{
?>
<section class="widget woocommerce widget_onsale">
	<h2 class="widget-title">
		Woo On Sales.
	</h2>
	<div class="widget-body">
		<ul class="product_list_widget">
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />Woo Logo</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />Premium Quality</a>
				<span class="from">From :</span>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat3.png" alt="" />Ship Your Idea</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat1.png" alt="" />The sticky post</a>
				<span class="amount">$18</span>
			</li>
			<li>
				<a href="http://">
					<img src="assets/front/dummy-images/banner/cat2.png" alt="" />Woo T-Shirt</a>
				<del>
					<span class="amount">$2000</span>
				</del>
				<ins>
					<span class="amount">$18</span>
				</ins>
			</li>
		</ul>
	</div>
</section>
<?php
}
?>
