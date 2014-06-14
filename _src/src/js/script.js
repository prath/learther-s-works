/**
 * ==============================================================================
 * doc ready
 * ==============================================================================
 */
(function($) {
	'use strict';

	$(document).ready(function() {

		var t = $('.header'),
			search = $('.icon-search'),
			menu = $('.icon-menu'),
			cart = $('.icon-cart'),
			menuclose = $('.icon-close-menu'),
			cartclose = $('.icon-close-cart');

		/**
		 * Sticky Navbar/Header
		 */
		$(window).scroll(function() {
			if ($(this).scrollTop() > 90) {
				t.addClass('scrolled');
			} else {
				t.removeClass('scrolled');
			}
		});

		/**
		 * Toggle Search Form on icon clicked
		 */
		search.on('click', function(e) {
			e.preventDefault();
			e.stopPropagation();
			$(this).toggleClass('search-toggle');
			$('.form-search').toggleClass('search-toggle');
			$('.form-search .form-control').focus();
		});

		/**
		 * Toggle Menu Nav
		 */
		menu.on('click', function(e) {
			e.preventDefault();
			e.stopPropagation();
			$(this).toggleClass('menu-toggle');
			menuclose.toggleClass('menu-toggle');
			$('.main-nav').toggleClass('menu-toggle');
			$('.shopping-cart').addClass('cart-toggle');
			cartclose.addClass('cart-toggle');
			cart.removeClass('cart-toggle');
		});

		/**
		 * Toggle Menu Nav
		 */
		menuclose.on('click', function(e) {
			e.preventDefault();
			e.stopPropagation();
			$(this).toggleClass('menu-toggle');
			menu.toggleClass('menu-toggle');
			$('.main-nav').toggleClass('menu-toggle');
			$('.shopping-cart').addClass('cart-toggle');
			cartclose.addClass('cart-toggle');
			cart.removeClass('cart-toggle');
		});

		/**
		 * Toggle Cart
		 */
		cart.on('click', function(e) {
			e.preventDefault();
			e.stopPropagation();
			$(this).toggleClass('cart-toggle');
			cartclose.toggleClass('cart-toggle');
			$('.shopping-cart').toggleClass('cart-toggle');
			$('.main-nav').addClass('menu-toggle');
			menuclose.addClass('menu-toggle');
			menu.removeClass('menu-toggle');
		});

		/**
		 * Toggle Cart
		 */
		cartclose.on('click', function(e) {
			e.preventDefault();
			e.stopPropagation();
			$(this).toggleClass('cart-toggle');
			cart.toggleClass('cart-toggle');
			$('.shopping-cart').toggleClass('cart-toggle');
			$('.main-nav').addClass('menu-toggle');
			menuclose.addClass('menu-toggle');
			menu.removeClass('menu-toggle');
		});

		/**
		 * Hide Search Form when body clicked
		 */
		$('html').on('click', function(e) {
			if (!$(e.target).is('.icon-search, .form-search *')) {
				search.removeClass('search-toggle');
				$('.form-search').addClass('search-toggle');
				$('.form-search .form-control').focus();
			}
		});

		$('#tab-reviews').hide();
		$('.description_tab').addClass('active');
		$('.woocommerce-tabs .tabs a').click(function(e) {
			e.preventDefault();
			var target = $(this).attr('href');
			var parent = $(this).parent('li');
			if (parent.hasClass('active')) {
				return;
			} else {
				$(this).parent('li').siblings().removeClass('active');
				$(this).parent('li').addClass('active');
				$('.panel').fadeOut(300, function() {
					$(target).fadeIn();
				});

			}
		});

	});

})(jQuery);
