(function($) {
	var t_dir = SiteParameters.theme_directory;

	// Remove link from current item
	$(".current_page_item").children().contents().unwrap();

	/*
	 * Backstretch slideshow
	 */
	$.backstretch([
		t_dir + "/assets/images/home-bg-la.png",
		t_dir + "/assets/images/home-bg-sf.jpg",
		t_dir + "/assets/images/home-bg-ny.png"
 	], {duration: 2500, fade: 750});


})(jQuery);
