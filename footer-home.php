<?php
/**
 * Footer
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

		</section>

		<footer class="container wrapper">

			<?php
				/**
				 * Footer Widget
				 */
			?>
			<div class="footer-widget">
				<div class="row-stretched">

					<div class="col-md-3">
						<?php widget_about();?>
					</div>

					<div class="col-md-3">
						<?php widget_recent_products();?>
					</div>

					<div class="col-md-3">
						<?php widget_pages();?>
					</div>

					<div class="col-md-3">
						<?php widget_nav_menu();?>
					</div>
				</div>
			</div>

			<?php
				/**
				 * Footer
				 */
			?>
			<div class="footer">
				<div class="watermark pull-left">
					Copyright&copy; 2014 - <strong>Aestik</strong>
				</div>
				<ul class="footer-menu pull-right">
					<li>
						<a href="" title="">home</a>
					</li>
					<li>
						<a href="" title="">product</a>
					</li>
					<li>
						<a href="" title="">cart</a>
					</li>
					<li>
						<a href="" title="">blog</a>
					</li>
					<li>
						<a href="" title="">archive</a>
					</li>
					<li>
						<a href="" title="">contact</a>
					</li>
				</ul>
			</div class="footer">

		</footer>



		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

		<script src="assets/front/js/vendor/waypoints.min.js"></script>
		<script src="assets/front/js/vendor/jquery.fitvids.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="assets/front/js/script.min.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='//www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X');ga('send','pageview');
		</script>
	</body>
</html>
