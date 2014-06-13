<?php
/**
 * Widgets
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */

include 'header.php';
?>

<main role="main">

	<?php
	include '__partials/hero-inner.php';
	?>

	<?php
	page_title('Widgets', '', 'Widgets');
	?>

	<div class="container wrapper main-content">
		<div class="row-stretched">
			<div class="col-md-4">
				<?php widget_categories();?>
				<?php widget_pages();?>
				<?php widget_archive();?>
				<?php widget_recent_comments();?>
				<?php widget_search();?>
				<?php widget_archive_dropdown();?>
				<?php widget_recent_posts();?>
				<?php widget_meta();?>
				<?php widget_rss();?>
				<?php widget_popular_posts();?>
			</div>
			<div class="col-md-4">
				<?php widget_nav_menu();?>
				<?php widget_tags();?>
				<?php widget_newsletter();?>
				<?php widget_categories_dropdown();?>
				<?php widget_text();?>
				<?php widget_shopping_cart();?>
				<?php widget_recent_products();?>
				<?php widget_random_products();?>
				<?php widget_top_rated_products();?>
				<?php widget_product_categories();?>
			</div>
			<div class="col-md-4">
				<?php widget_best_sellers();?>
				<?php widget_layered_nav_filters();?>
				<?php widget_layered_nav_dropdown();?>
				<?php widget_layered_nav();?>
				<?php widget_product_tag_cloud();?>
				<?php widget_recently_viewed_products();?>
				<?php widget_recent_reviews();?>
				<?php widget_product_search();?>
				<?php widget_featured_products();?>
				<?php widget_onsale();?>
				<?php widget_recent_news(12);?>
				<?php widget_about();?>
				<?php widget_testimonial();?>
			</div>
		</div>
	</div>

</main>

<?php
include 'footer.php';
?>
