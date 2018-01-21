(function($) {
	// is nav expanded 
	var navigation = $('nav.navbar');
	var navigationCollapse = navigation.find('.navbar-collapse');
	navigation.on('shown.bs.collapse', function () {
	   navigation.addClass('nav-bg');
	});

	navigation.on('hidden.bs.collapse', function () {
	   navigation.removeClass('nav-bg');
	});
})(jQuery);