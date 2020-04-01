<?php

/*
===============================
Enqueue Assets
===============================
*/
function campfire_scripts()
{
	$theme = wp_get_theme();
	if ( defined ('DEV_MODE') && DEV_MODE){
		$version = time();
	} else {
		$version = $theme->Version;
	}

	//   Unload OSM Plugin CSS
	wp_dequeue_style( 'OSM: Patrol Points' );
	
	wp_enqueue_style( 'google', 'https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700,900' );
	wp_enqueue_style( 'campfire', get_stylesheet_directory_uri() . '/assets/css/campfire.css', array(), $version );

	wp_enqueue_script( 'campfire', get_stylesheet_directory_uri() . '/assets/js/campfire.js', array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'campfire_scripts' );
