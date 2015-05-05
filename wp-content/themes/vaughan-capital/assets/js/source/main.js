(function($) {
	var t_dir = SiteParameters.theme_directory;
	// alert(SiteParameters);

	/*
	 * Backstretch slideshow
	 */
	$.backstretch([
		t_dir + "/assets/images/home-bg-la.jpg",
		t_dir + "/assets/images/home-bg-sf.jpg",
		t_dir + "/assets/images/home-bg-ny.jpg"
 	], {duration: 2500, fade: 750});


})(jQuery);
