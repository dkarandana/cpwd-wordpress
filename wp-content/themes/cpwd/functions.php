<?php

/*
	https://codex.wordpress.org/Theme_Development#Functions_File
	A theme can optionally use a functions file, which resides in the theme subdirectory and is named functions.php. This file basically acts like a plugin, and if it is present in the theme you are using, it is automatically loaded during WordPress initialization (both for admin pages and external pages). 

*/


	add_theme_support( 'post-thumbnails' );

	// Get the page number
	function get_page_number() {
	    if ( get_query_var('paged') ) {
	        print ' | ' . __( 'Page ' , 'hbd-theme') . get_query_var('paged');
	    }
	} // end get_page_number
?>