/**
 * @todo simplify toggle method
 */

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
		 * Fitvids
		 */
		if ($('.fitvids').length) {
			$('.fitvids').fitVids();
		}

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

		/**
		 * Google Map
		 */
		if ($('#map-canvas').length) {
			var mapOptions,
				map;
			if (Modernizr.touch) {
				mapOptions = {
					zoom: 15,
					scrollwheel: false,
					draggable: false,
					center: new google.maps.LatLng(40.64432, -74.01107),
					// zoomControl: true,
					zoomControlOptions: {
						style: google.maps.ZoomControlStyle.SMALL,
						position: google.maps.ControlPosition.LEFT_TOP
					},
					// scaleControl: false,
					scaleControlOptions: {
						position: google.maps.ControlPosition.BOTTOM_LEFT
					},
					streetViewControl: false,
					panControl: false,
					mapTypeControl: false,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
			} else {
				mapOptions = {
					zoom: 15,
					scrollwheel: false,
					center: new google.maps.LatLng(40.64432, -74.01107),
					// zoomControl: true,
					zoomControlOptions: {
						style: google.maps.ZoomControlStyle.SMALL,
						position: google.maps.ControlPosition.LEFT_TOP
					},
					// scaleControl: false,
					scaleControlOptions: {
						position: google.maps.ControlPosition.BOTTOM_LEFT
					},
					streetViewControl: false,
					panControl: false,
					mapTypeControl: false,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
			}
			map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		}

	});

})(jQuery);
