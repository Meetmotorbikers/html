(function($) {
	function bodyHeight() {
		var headerHeight = $('header').outerHeight();
		var footerHeight = $('footer').outerHeight();
		var sortfuncton = $('.sort-function').outerHeight();
		var headandfooter = headerHeight + footerHeight;
		var scrolltours = headandfooter + sortfuncton;

		var $theWindowSize = $(this).width();

		if($theWindowSize > 767) {
			$(window).resize(function() {
			    $('.gmaps, .profil, .profil-content, .create-tour-content').height($(window).height() - headandfooter);
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
    	$( "#time, #date" ).datepicker({
    		firstDay: 1,
    		prevText: '<i class="fa fa-angle-left"></i>',
    		nextText: '<i class="fa fa-angle-right"></i>',
			monthNames: ['Januar','Februar','März','April','Mai','Juni',
			'Juli','August','September','Oktober','November','Dezember'],
			monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
			'Jul','Aug','Sep','Okt','Nov','Dez'],
			dayNames: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
			dayNamesShort: ['So','Mo','Di','Mi','Do','Fr','Sa'],
			dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa'],
			dateFormat:'d MM, y'
    	});

    	$('#timeonly').timepicker({
    		'timeFormat': 'H:i:s'
    	});
	}

	function toggletab() {
		var toggleTab = $('[toggle-tab]');
		var hidden = $('.fade.d-none');
		var show = $('.fade.show');

		$(toggleTab).on('click', function() {
			hidden.removeClass('d-none').addClass('show');
			show.addClass('d-none').removeClass('show');
		});
	}

	function togglemodal() {
		if(window.location.href.indexOf("thanks") > -1) {
			$('#thanks').modal('show');
		}
	}

	function dataviewSwitcher() {
		var button = $('[data-view-switcher]');
		var viewList = $('[data-view-list]');
		var viewCard = $('[data-view-card]');

		console.log(viewCard.find('.d-none.d-sm-none').length < 1);

		$(button).on('click', function() {
			if (viewCard.find('.d-none.d-sm-none').length < 1 ) {
				viewCard.toggleClass('d-none d-sm-none');
				viewList.toggleClass('d-none');
			}
		});
	}

	bodyHeight();
	searchDropdown();
	datepicker();
	toggletab();
	togglemodal();
	dataviewSwitcher();
})(jQuery);