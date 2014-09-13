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
		page_title('Page Template', '', 'Page');
	?>

	<?php
		/**
		 * Main Content
		 */
	?>

	<?php //--- wrapper-start default template ?>
	<div class="container main-content">
		<div class="wrapper-narrow">
	<?php //--- wrapper-start ?>

			<div class="blog-entry">
				<div class="entry-content">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer. took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
					</p>
				</div>
			</div>

	<?php //--- wrapper-end default template ?>
		</div>
	</div>
	<?php //--- wrapper-end ?>

<?php
include 'footer.php';
?>
