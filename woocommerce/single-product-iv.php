<?php
/**
 * Override Woo single-product.php
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */

include 'woocommerce/global/wrapper-start.php'; ?>

	<header class="page-title">
		<?php include 'woocommerce/global/breadcrumb.php';?>
		<h1>
			LOVELY TRAVEL BAG
		</h1>
		<div class="title-separator"></div>
	</header>

	<?php
		/**
		 * Next-Prev Item Paging
		 *
		 * custom theme. not woo's
		 */
		include 'parts/paging.php';?>

	<div class="container main-content">

		<?php include 'woocommerce/content-single-product-iv.php';?>

	</div>


<?php include 'woocommerce/global/wrapper-end.php';?>
