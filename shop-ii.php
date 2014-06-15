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
	include 'parts/hero-inner.php';
	hero_inner();
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
			<div class="col-md-9 w-sidebar-full">

				<?php
					/**
					 * Filter and page numbers
					 */
				?>
				<?php include 'woo/filter.php'; ?>
				<?php
					/**
					 * Product List 12 items
					 */
				?>
				<?php include 'woo/products-twelve-items.php'; ?>
				<?php
					/**
					 * Pagination
					 */
				?>
				<?php include 'parts/pagination.php'; ?>

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
		<?php include 'parts/email-subscribe.php'; ?>
	</div>

</main>

<?php
include 'footer.php';
?>
