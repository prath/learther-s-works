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

	<?php
		/**
		 * loc : parts/page-title.php
		 *
		 * ini nantinya akan ada di header.php
		 */
		page_title_blog('An Introduction to WooCommerce.', 'Blog', 'An Introduction to WooCommerce.');
	?>

	<?php
		/**
		 * Next-Prev Item Paging
		 */
	?>
	<?php
		include 'parts/paging.php';
	?>

	<?php //--- wrapper-start default template ?>
	<div class="container main-content">
		<div class="wrapper-narrow">
	<?php //--- wrapper-start ?>

			<?php
				/**
				 * Single Page Template
				 */
			?>
			<?php include 'page-templates/blog-single.php'; ?>

	<?php //--- wrapper-end default template ?>
		</div>
	</div>
	<?php //--- wrapper-end ?>

<?php
include 'footer.php';
?>
