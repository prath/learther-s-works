<?php
/**
 * Home
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */

include 'header.php';
?>

<main role="main">
	<?php
		/**
		 * VC ELEMENTs
		 */
	?>
	<div class="container">

		<?php
			/**
			 * VC ELEMENT - SLIDER
			 */
		?>
		<div class="VC-ROW">
			<div class="VC-SPAN">
				<div class="VC-WRAPPER">

					<div class="hero">

						<?php //Image ?>
						<img src="assets/front/dummy-images/slider/1.jpg" alt="slider">

						<?php //Hero Text ?>
						<img src="assets/front/dummy-images/slider/text.png" alt="slider" class="hero-text">

						<?php //Button CTA ?>
						<div class="overlay btn-cta-overlay-bottom">
							<a href="" title="" class="btn btn-cta white">browse shop</a>
						</div>

					</div>

				</div>
			</div>
		</div>

		<?php
			/**
			 * VC ELEMENT - WOO RECENT PRODUCTS
			 */
		?>
		<div class="row VC-ROW">
			<div class="col-md-12 VC-SPAN">
				<div class="VC-WRAPPER">

					<?php include '__partials/products-three-items.php'; ?>

				</div>
			</div>
		</div>

		<?php
			/**
			 * VC ELEMENT - EMAIL SUBSCRIBE
			 */
		?>
		<div class="VC-ROW">
			<div class="VC-SPAN">
				<div class="VC-WRAPPER">

					<?php include '__partials/email-subscribe.php'; ?>

				</div>
			</div>
		</div>

		<?php
			/**
			 * VC ELEMENT - BANNERS
			 */
		?>
		<div class="row VC-ROW">
			<div class="col-md-6 VC-SPAN">
				<div class="VC-WRAPPER">

					<div class="image-banner">
						<img src="assets/front/dummy-images/banner/1.jpg" alt="">
					</div>

				</div>
			</div>
			<div class="col-md-6 VC-SPAN">
				<div class="VC-WRAPPER">

					<div class="image-banner">

						<?php //Image Banner ?>
						<img src="assets/front/dummy-images/banner/2.jpg" alt="">

						<?php //Banner Text ?>
						<div class="banner-copy overlay">
							<div class="sub-copy">
								Made in Indonesia
							</div>
							<div class="main-copy">
								WITH LOVE
							</div>
						</div>

						<?php //Button CTA ?>
						<div class="overlay btn-cta-overlay-bottom">
							<a href="" title="" class="btn btn-cta white">WATCH OUR PROCESS</a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<?php
			/**
			 * VC ELEMENT - CATEGORIES BANNERS
			 */
		?>
		<div class="row VC-ROW">
			<div class="col-md-4 VC-SPAN">
				<div class="VC-WRAPPER">

					<div class="cat-banner">

						<?php //Cat Banner ?>
						<img src="assets/front/dummy-images/banner/cat1.png" alt="">

						<?php //Banner Text ?>
						<div class="banner-cat-copy overlay">
							<div class="main-copy">
								SHOES
							</div>
							<div class="sub-copy">
								high quality shoes
							</div>
						</div>

						<?php //Button CTA ?>
						<div class="overlay btn-cta-overlay-bottom">
							<a href="" title="" class="btn btn-cta white small">Browse shop</a>
						</div>

					</div>

				</div>
			</div>
			<div class="col-md-4 VC-SPAN">
				<div class="VC-WRAPPER">

					<div class="cat-banner">

						<?php //Cat Banner ?>
						<img src="assets/front/dummy-images/banner/cat2.png" alt="">

						<?php //Banner Text ?>
						<div class="banner-cat-copy overlay">
							<div class="main-copy">
								Wallet
							</div>
							<div class="sub-copy">
								high quality Wallet
							</div>
						</div>

						<?php //Button CTA ?>
						<div class="overlay btn-cta-overlay-bottom">
							<a href="" title="" class="btn btn-cta white small">Browse shop</a>
						</div>

					</div>

				</div>
			</div>
			<div class="col-md-4 VC-SPAN">
				<div class="VC-WRAPPER">

					<div class="cat-banner">

						<?php //Cat Banner ?>
						<img src="assets/front/dummy-images/banner/cat3.png" alt="">

						<?php //Banner Text ?>
						<div class="banner-cat-copy overlay">
							<div class="main-copy">
								Bags
							</div>
							<div class="sub-copy">
								high quality Bags
							</div>
						</div>

						<?php //Button CTA ?>
						<div class="overlay btn-cta-overlay-bottom">
							<a href="" title="" class="btn btn-cta white small">Browse shop</a>
						</div>

					</div>

				</div>
			</div>
		</div>

		<?php
			/**
			 * VC ELEMENT - FEATURES
			 */
		?>
		<div class="row VC-ROW feature-bg">
			<div class="VC-SPAN wrapper">
				<div class="VC-WRAPPER">

					<?php //Section Title ?>
					<h2 class="section-title invert">
						our store benefits
					</h2>
					<?php //Features ?>
					<div class="VC-ROW row-stretched">

						<div class="VC-SPAN4 col-md-4">
							<div class="VC-WRAPPER">

								<article class="excerpt w-icon invert">
									<i class="simpleicon-bag icon-big"></i>
									<div class="article-text">
										<h3 class="excerpt-title invert">
											easy shopping
										</h3>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.

										</p>
									</div>
								</article>

							</div>
						</div>

						<div class="VC-SPAN4 col-md-4">
							<div class="VC-WRAPPER">

								<article class="excerpt w-icon invert">
									<i class="simpleicon-tag icon-big"></i>
									<div class="article-text">
										<h3 class="excerpt-title invert">
											competitive price
										</h3>
										<p>
											Phasellus eget bibendum neque, nec mollis nibh. Pellentesque pellentesque, nisl nec convallis iaculis, est urna pharetra dui, nec pretium ipsum urna et augue. Mauris ullamcorper.
										</p>
									</div>
								</article>

							</div>
						</div>

						<div class="VC-SPAN4 col-md-4">
							<div class="VC-WRAPPER">

								<article class="excerpt w-icon invert">
									<i class="simpleicon-star icon-big"></i>
									<div class="article-text">
										<h3 class="excerpt-title invert">
											integrated whishlist
										</h3>
										<p>
											Nam quam mi, sagittis vel vestibulum sit amet, semper sed nisi. Morbi euismod aliquam erat vel vestibulum. Fusce eu erat eu nisi porta vehicula a iaculis urna bibendum neque.
										</p>
									</div>
								</article>

							</div>
						</div>

					</div>

				</div>
			</div>
		</div>

	</div>

	<?php
		/**
		 * CONTENT WIDGET
		 */
	?>

	<aside class="container wrapper content-widget">
		<div class="row-stretched">
			<div class="col-md-8">
				<?php widget_recent_news(6);?>
			</div>

			<div class="col-md-4">
				<?php widget_testimonial();?>
			</div>

		</div>
	</aside>
</main>

<?php
include 'footer.php';
?>
