<?php
/**
 * About Page
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
	page_title('About', '', 'About');
	?>

	<?php
		/**
		 * Main Content
		 */
	?>
	<div class="container main-content wrapper">

		<?php
			/**
			 * Product List including Pagination and Filter
			 */
		?>
		<?php include 'singlepages/about.php'; ?>

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
