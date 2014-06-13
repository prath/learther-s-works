window.addEventListener('load', function() {
	'use strict';

	var el1,
		el2;
	el1 = document.getElementById('top');
	el2 = document.getElementById('left');
	FastClick.attach(el1);
	FastClick.attach(el2);
}, false);
