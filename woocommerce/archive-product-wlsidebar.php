<?php
/**
 * Override Woo archive-product.php
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */

include 'woocommerce/global/wrapper-start.php'; ?>

	<header class="page-title">
		<?php include 'woocommerce/global/breadcrumb.php';?>
		<h1>
			Shop With Sidebar
		</h1>
		<div class="title-separator"></div>
	</header>

	<div class="container main-content">

		<div class="row">

			<?php include 'woocommerce/global/lsidebar.php';?>

			<div class="col-md-9 w-lsidebar-full">

				<?php
					include 'woocommerce/loop/result-count.php';
					include 'woocommerce/loop/orderby.php';
				?>

				<?php include 'woocommerce/content-product.php';?>

				<?php include 'woocommerce/loop/pagination.php';?>
			</div>

		</div>

	</div>

<?php include 'woocommerce/global/wrapper-end.php';?>


