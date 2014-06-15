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
	include '__partials/hero-inner.php';
	hero_inner();
	?>

	<?php
		/**
		 * Page title, Breadcrumbs and Title Separator
		 */
	?>
	<?php
	page_title('Contact', '', 'Contact');
	?>

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
				<?php include '__partials/contact.php'; ?>

			</div>
			<aside class="col-md-3 sidebar">
				<?php widget_nav_menu();?>
				<?php widget_popular_posts();?>
				<?php widget_tags();?>
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
