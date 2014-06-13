<?php
/**
 * Header
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 *
 * @todo  :	- Cart bar markup
 *        	- Cart bar toggle
 */

// requires woocommerce widgets mixins/function.
require_once('__widgets/woo.php');
// requires wordpress widgets mixins/function.
require_once('__widgets/wp.php');
// requires aestik widgets mixins/function.
require_once('__widgets/ae.php');
// requires Page Title.
require_once('__partials/page-title.php');
// requires Breadcrumbs
require_once('__partials/breadcrumbs.php');


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Leather's Works</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="style.css">

		<script src="assets/front/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<header class="header">

			<h1 class="sr-only">Leather's Works</h1>

			<?php
				/**
				 * Use this if there is no logo image
				 */
			?>
			<!-- <div class="branding">
				<div class="site-title">
					<a href="">Leather’s Works</a>
				</div>
				<div class="site-description">
					High quality hand-made leather works
				</div>
			</div> -->

			<?php
				/**
				 * Use this if there is logo image
				 */
			?>
			<div class="logo-image">
				<a href="" title=""><img src="assets/front/dummy-images/logo.png" alt="Leather's Works Logo"></a>
			</div>

			<?php
				/**
				 * Search Icons and forms
				 */
			?>
			<div class="search-container">
				<a href="" class="icon-search">
					<i class="aecon aecon-search icon-top"></i>
				</a>
				<form class="form-inline form-search search-toggle" action="" method="" accept-charset="utf-8">
					<div class="form-group">
						<label class="sr-only" for="exampleInputEmail2">Email address</label>
						<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Search here....">
					</div>
					<button type="submit" class="btn"><i class="aecon aecon-search icon-top"></i></button>
				</form>
			</div>

			<?php
				/**
				 * cart icon
				 */
			?>
			<div class="cart-container">
				<a href="" title="" class="icon-cart">
					<i class="aecon aecon-bag icon-top"></i>
					<span class="cart-badge">14</span>
				</a>
				<a href="" title="" class="icon-close-cart cart-toggle">
					<i class="aecon aecon-cancel icon-top"></i>
				</a>
			</div>

			<?php
				/**
				 * Menu icon
				 */
			?>
			<div class="menu-container">
				<a href="" title="" class="icon-menu">
					<i class="aecon aecon-menu icon-top"></i>
				</a>
				<a href="" title="" class="icon-close-menu menu-toggle">
					<i class="aecon aecon-cancel icon-top"></i>
				</a>
			</div>

		</header>

		<?php
			/**
			 * Collapsible Main Nav
			 */
		?>
		<?php
		include '__partials/menu.php';
		?>

		<?php
			/**
			 * Collapsible Shopping Cart
			 */
		?>
		<aside class="shopping-cart cart-toggle">
			<?php widget_shopping_cart('Shopping Cart.');?>
		</aside>


