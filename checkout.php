<?php
/**
 * Checkout Page
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */

include 'header.php';
?>

	<?php
		/**
		 * loc : parts/page-title.php
		 *
		 * ini nantinya akan ada di header.php
		 */
		page_title('Checkout', '', 'Checkout');
	?>

	<?php //--- wrapper-start default template ?>
	<div class="container main-content">
		<div class="wrapper-narrow">
	<?php //--- wrapper-start ?>

			<?php //class woocommerce ini akan dihasilkan dari woocommerce ?>
			<div class="woocommerce">
				<?php
				/**
				 * include woo checkout.
				 * see sources at woocommerce folders
				 */
				include 'woocommerce/checkout/form-checkout.php';?>
			</div>

	<?php //--- wrapper-end default template ?>
		</div>
	</div>
	<?php //--- wrapper-end ?>

<?php
include 'footer.php';
?>
