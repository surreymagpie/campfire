<?php

/*
===============================
Engueue Assets
===============================
*/
function campfire_scripts()
{
  wp_enqueue_style( 'google', 'https://fonts.googleapis.com/css?family=Nunito+Sans:400,700,900' );
  wp_enqueue_style( 'campfire', get_stylesheet_directory_uri() . '/assets/css/campfire.css' );

  wp_enqueue_script( 'campfire', get_stylesheet_directory_uri() . '/assets/js/campfire.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'campfire_scripts' );

/*
===============================
Theme supports
===============================
*/
function campfire_setup()
{
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 300,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'titles','site__title', 'site__tag')
	));
}
add_action( 'after_setup_theme', 'campfire_setup');
