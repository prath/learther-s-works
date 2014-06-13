<?php
/**
 * Shop-i Page
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */

include 'header.php';
?>

<main role="main">

	<?php
		/**
		 * Header BG
		 */
	?>
	<?php
	include '__partials/hero-inner.php';
	?>

	<?php
		/**
		 * Page title, Breadcrumbs and Title Separator
		 */
	?>
	<?php
	page_title('Shop With Sidebar', 'Shop', 'Shop Title');
	?>

	<?php
		/**
		 * Main Content
		 */
	?>
	<div class="container main-content">
		<div class="row">

			<?php
				/**
				 * Product List including Pagination and Filter
				 */
			?>
			<div class="col-md-9">
				<?php include '__partials/products-twelve-items.php'; ?>
			</div>

			<?php
				/**
				 * Sidebar
				 */
			?>
			<aside class="col-md-3 sidebar">
				<?php widget_categories();?>
				<?php widget_shopping_cart();?>
				<?php widget_popular_posts();?>
				<?php widget_featured_products();?>
			</aside>
		</div>
	</div>

	<?php
		/**
		 * Email Subscribe
		 */
	?>
	<div class="container">
		<?php include '__partials/email-subscribe.php'; ?>
	</div>

</main>

<?php
include 'footer.php';
?>
