<?php
/**
 * Override Woo content-single-product.php
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

		<div class="product">

			<div class="wrapper">

				<?php //include 'woocommerce/loop/sale-flash.php';?>
				<?php include 'woocommerce/single-product/product-image.php';?>


				<div class="summary entry-summary summary-two-col">

					<div class="row-stretched">
						<div class="col-md-6">
							<?php
								include 'woocommerce/single-product/price.php';
								include 'woocommerce/single-product/rating.php';
								include 'woocommerce/single-product/short-description.php';
							?>
						</div>
						<div class="col-md-6">
							<?php
								include 'woocommerce/single-product/add-to-cart/variable.php';
							?>

							<?php
								include 'woocommerce/single-product/meta.php';
							?>
						</div>
					</div>

				</div>


				<?php include 'woocommerce/single-product/tabs/tabs.php'; ?>

			</div>

			<?php
				// include 'woocommerce/single-product/up-sells.php';
				include 'woocommerce/single-product/related.php';
			?>


		</div>
