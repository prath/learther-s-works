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
	hero_inner();
	?>

	<?php
		/**
		 * Page title, Breadcrumbs and Title Separator
		 */
	?>
	<?php
	page_title('Lovely Travel Bag', 'Shop', 'Lovely Travel Bag');
	?>

	<?php
		/**
		 * Next-Prev Item Paging
		 */
	?>
	<?php include '__partials/paging.php'; ?>

	<?php
		/**
		 * Main Content
		 */
	?>
	<div class="container main-content">

		<?php
			/**
			 * Product
			 */
		?>
		<div class="product">
			<div class="wrapper">
				<div class="row-stretched">

					<div class="col-md-8">
						<?php include '__partials/woo-images.php'; ?>
					</div>

					<div class="col-md-4">
					<?php include '__partials/woo-summary.php'; ?>
					</div>

					<div class="col-md-12">
					<?php include '__partials/woo-tabs.php'; ?>
					</div>

				</div>
			</div>

			<div class="related products">
				<div class="wrapper">
					<h2 class="section-title">
						related products
					</h2>
				</div>
				<?php include '__partials/products-three-items.php'; ?>
			</div>

		</div>

		<?php
			/**
			 * Related Product
			 */
		?>


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
