(function($) {
	function bodyHeight() {
		var headerHeight = $('header').outerHeight();
		var footerHeight = $('footer').outerHeight();
		var headandfooter = headerHeight + footerHeight;

		var $theWindowSize = $(this).width();

		if($theWindowSize > 767) {
			$(window).resize(function() {
			    $('body.page main').height($(window).height() - headandfooter);
			});  
		};

		$(window).trigger('resize');
	}
	bodyHeight();
})(jQuery);