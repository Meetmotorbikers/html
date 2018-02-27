(function($) {
	function bodyHeight() {
		var headerHeight = $('header').outerHeight();
		var footerHeight = $('footer').outerHeight();
		var sortfuncton = $('.sort-function').outerHeight();
		var headandfooter = headerHeight + footerHeight;
		var scrolltours = headandfooter + sortfuncton;

		console.log(sortfuncton);
		console.log(headandfooter);
		console.log(scrolltours);

		var $theWindowSize = $(this).width();

		if($theWindowSize > 767) {
			$(window).resize(function() {
			    $('.gmaps').height($(window).height() - headandfooter);
			    $('.tours').height($(window).height() - scrolltours);
			});  
		};

		$(window).trigger('resize');
	}

	function searchDropdown() {
		var dropdown = $('[data-search-dropdown]');
		var input = $('#where');

		dropdown.hide();
		input.on('click', function() {
			dropdown.toggle();
		});

	}

	function datepicker() {
    	$( "#time" ).datepicker({
    		prevText: '<i class="fa fa-angle-left"></i>',
    		nextText: '<i class="fa fa-angle-right"></i>'
    	});
	}

	bodyHeight();
	searchDropdown();
	datepicker();
})(jQuery);