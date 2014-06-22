<?php
/**
 * Blog-i Page
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
		page_title('Blog', '', 'Blog');
	?>

	<?php //--- wrapper-start blog-i template ?>
	<div class="container main-content">
	<?php //--- wrapper-start ?>

		<?php
			/**
			 * Blog List - Grid
			 */
		?>
		<?php include 'page-templates/blog-entries-grid.php'; ?>

		<?php
			/**
			 * Pagination
			 */
		?>
		<?php include 'woocommerce/loop/pagination.php'; ?>

	<?php //--- wrapper-end blog-i template ?>
	</div>
	<?php //--- wrapper-end ?>

<?php
include 'footer.php';
?>
