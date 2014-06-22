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

	<?php
		/**
		 * loc : parts/page-title.php
		 *
		 * ini nantinya akan ada di header.php
		 */
		page_title('About', '', 'About');
	?>

	<?php //--- wrapper-start composer template ?>
	<div class="container main-content">
	<?php //--- wrapper-start ?>

			<?php
				/**
				 * About Content
				 */
			?>
			<?php include 'page-templates/about.php'; ?>

	<?php //--- wrapper-end composer template ?>
	</div>
	<?php //--- wrapper-end ?>

<?php
include 'footer.php';
?>
