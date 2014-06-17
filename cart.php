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
	page_title('Shopping Cart', '', 'Shopping Cart');
	?>

	<?php
		/**
		 * Main Content
		 */
	?>
	<div class="container main-content">

		<?php
			/**
			 * Cart
			 */
		?>
		<div class="wrapper-narrow">

			<?php include 'woo/cart-table.php'; ?>

			<?php include 'woo/cart-collaterals.php'; ?>

		</div>

		<?php
			/**
			 * Related Product
			 */
		?>
		<div class="related products">
			<div class="wrapper">
				<h2 class="section-title">
					You may be interested in
				</h2>
			</div>
			<?php include 'woo/products-three-items.php'; ?>
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
