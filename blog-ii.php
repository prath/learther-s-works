<?php
/**
 * Blog-ii Page
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
	page_title('Blog', '', 'Blog');
	?>

	<?php
		/**
		 * Main Content
		 */
	?>
	<div class="container main-content wrapper-narrow">

		<?php
			/**
			 * Product List including Pagination and Filter
			 */
		?>
		<?php include '__partials/blog-items-standard.php'; ?>
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
