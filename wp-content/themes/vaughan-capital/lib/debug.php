<?php

	// Debug
	// Display loaded theme files
	$included_files = get_included_files();
	$stylesheet_dir = str_replace( '\\', '/', get_stylesheet_directory());
	$template_dir = str_replace( '\\', '/', get_template_directory());

	foreach ($included_files as $key => $path) {

		$path = str_replace('\\', '/', $path);

		if ( false === strpos($path, $stylesheet_dir) && false === strpos($path, $template_dir)) unset($included_files[$key]);
	}

	var_dump($included_files);

	// var_dump(is_page_template());
?>