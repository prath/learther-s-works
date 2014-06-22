<?php
/**
 * Home-ii
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */

include 'header-home.php';
?>

	<?php
		/**
		 * Header BG
		 */
	?>
	<?php
		include 'parts/hero-inner.php';
		hero_inner(false);
	?>

	<?php //--- wrapper-start composer template ?>
	<div class="container main-content">
	<?php //--- wrapper-start ?>


		<?php
			/**
			 * VC ELEMENT - PAGE TITLE
			 */
		?>
		<div class="VC-ROW">
			<div class="VC-SPAN">
				<div class="VC-WRAPPER">

					<?php include 'composer-elements/page-title.php'; ?>

				</div>
			</div>
		</div>

		<?php
			/**
			 * VC ELEMENT - WOO RECENT PRODUCTS
			 */
		?>
		<div class="VC-ROW">
			<div class="VC-SPAN">
				<div class="VC-WRAPPER">

					<?php include 'composer-elements/products-six-items.php'; ?>

				</div>
			</div>
		</div>

		<?php
			/**
			 * VC ELEMENT - EMAIL SUBSCRIBE
			 */
		?>
		<div class="VC-ROW">
			<div class="VC-SPAN">
				<div class="VC-WRAPPER">

					<?php include 'composer-elements/email-subscribe.php'; ?>

				</div>
			</div>
		</div>

		<?php
			/**
			 * VC ELEMENT - BANNERS
			 */
		?>
		<div class="row VC-ROW">
			<div class="col-md-6 VC-SPAN">
				<div class="VC-WRAPPER">

					<?php include 'composer-elements/image-banner-notext.php'; ?>

				</div>
			</div>
			<div class="col-md-6 VC-SPAN">
				<div class="VC-WRAPPER">

					<?php include 'composer-elements/image-banner.php'; ?>

				</div>
			</div>
		</div>

		<?php
			/**
			 * VC ELEMENT - CATEGORIES BANNERS
			 */
		?>
		<div class="row VC-ROW">
			<div class="col-md-4 VC-SPAN">
				<div class="VC-WRAPPER">

					<?php include 'composer-elements/cat-banner-i.php'; ?>

				</div>
			</div>
			<div class="col-md-4 VC-SPAN">
				<div class="VC-WRAPPER">

					<?php include 'composer-elements/cat-banner-ii.php'; ?>

				</div>
			</div>
			<div class="col-md-4 VC-SPAN">
				<div class="VC-WRAPPER">

					<?php include 'composer-elements/cat-banner-iii.php'; ?>

				</div>
			</div>
		</div>

		<?php
			/**
			 * VC ELEMENT - FEATURES
			 */
		?>
		<div class="VC-ROW">
			<div class="VC-SPAN">
				<div class="VC-WRAPPER">

					<?php include 'composer-elements/features-nobg.php'; ?>

				</div>
			</div>
		</div>

	<?php //--- wrapper-end composer template ?>
	</div>
	<?php //--- wrapper-end ?>

	<?php
		/**
		 * CONTENT WIDGET
		 */
	?>

	<aside class="container wrapper content-widget">
		<div class="row-stretched">
			<div class="col-md-8">
				<?php widget_recent_news(6);?>
			</div>

			<div class="col-md-4">
				<?php widget_testimonial();?>
			</div>

		</div>
	</aside>

<?php
include 'footer-home.php';
?>
