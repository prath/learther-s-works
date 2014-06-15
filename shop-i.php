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
	page_title('Shop', 'Shop', 'Shop Title');
	?>

	<?php
		/**
		 * Main Content
		 */
	?>
	<div class="container main-content">

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
