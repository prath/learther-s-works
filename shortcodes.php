<?php
/**
 * Shortcodes
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
		page_title('Shortcodes', '', 'Shortcodes');
	?>

	<?php //--- wrapper-start default template ?>
	<div class="container main-content">
		<div class="wrapper-narrow">
	<?php //--- wrapper-start ?>

			<h2 class="section-title">
				Shortcodes
			</h2>
			<?php include 'shortcodes/accordion.php'; ?>

			<h2 class="section-title">
				Shortcodes
			</h2>

	<?php //--- wrapper-end default template ?>
		</div>
	</div>
	<?php //--- wrapper-end ?>

<?php
include 'footer.php';
?>
