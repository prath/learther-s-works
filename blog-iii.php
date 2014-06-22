<?php
/**
 * Blog-ii Page
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


	<?php //--- wrapper-start blog alt template ?>
	<div class="container main-content">
		<div class="wrapper">
	<?php //--- wrapper-start ?>

			<div class="row-stretched">

				<aside class="col-md-3 lsidebar">
					<?php widget_nav_menu();?>
					<?php widget_popular_posts();?>
					<?php widget_tags();?>
					<?php widget_rss();?>
				</aside>
				<div class="col-md-9 w-lsidebar">
					<?php
						/**
						 * Standard Blog List
						 */
					?>
					<?php include 'page-templates/blog-entries-standard.php'; ?>

					<?php
						/**
						 * Pagination
						 */
					?>
					<?php include 'woocommerce/loop/pagination.php'; ?>
				</div>

			</div>

	<?php //--- wrapper-end blog alt template ?>
		</div>
	</div>
	<?php //--- wrapper-end ?>

<?php
include 'footer.php';
?>
