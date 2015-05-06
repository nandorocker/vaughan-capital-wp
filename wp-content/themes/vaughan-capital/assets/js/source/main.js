(function($) {
	var t_dir = SiteParameters.theme_directory;

	if (SiteParameters.is_home) {

		/*
		 * Backstretch slideshow
		 */
		$.backstretch([
			t_dir + "/assets/images/home-bg-la.jpg",
			t_dir + "/assets/images/home-bg-sf.jpg",
			t_dir + "/assets/images/home-bg-ny.jpg"
	 	], {duration: 2500, fade: 750});
	}

	/*
	 * Slicknav
	 */
	$('#menu').slicknav({
		label: '',
		closeOnClick: true
	});

	// Prepend logo
	$('.slicknav_menu').prepend('<a class="slacknav-brand" href="/" rel="home"><img alt="Vaughan Capital Advisors" src="' + t_dir + '/assets/images/vaughan-logo.png"></a>');

})(jQuery);
