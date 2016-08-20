(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away

		$('.toggle img').click(function() {

			if ($('.nav').hasClass('open')) {
				$('.nav').removeClass('open');
				$('.nav').slideUp();

			} else {
				$('.nav').addClass('open');
				$('.nav').slideDown();

			}

		});



	});

})(jQuery, this);
