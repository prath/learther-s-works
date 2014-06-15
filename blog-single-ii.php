<?php
/**
 * Blog-single-i Page
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
	page_title_blog('An Introduction to WooCommerce.', 'Blog', 'An Introduction to WooCommerce.');
	?>

	<?php
		/**
		 * Next-Prev Item Paging
		 */
	?>
	<?php include 'parts/paging.php'; ?>

	<?php
		/**
		 * Main Content
		 */
	?>
	<div class="container main-content wrapper">

		<div class="row-stretched">
			<div class="col-md-9 w-sidebar">

				<?php
					/**
					 * Product List including Pagination and Filter
					 */
				?>
				<?php include 'singlepages/blog-single.php'; ?>

			</div>
			<aside class="col-md-3 sidebar">
				<?php widget_nav_menu();?>
				<?php widget_popular_posts();?>
				<?php widget_tags();?>
				<?php widget_rss();?>
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
