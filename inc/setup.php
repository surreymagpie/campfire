<?php

/*
===============================
Theme Setup
===============================
*/
add_action( 'after_setup_theme', 'campfire_setup');
add_filter( 'body_class', 'campfire_body_class' );

function campfire_setup() {
	// Document title
	add_theme_support( 'title-tag');
	add_filter( 'document_title_separator', 'campfire_title_separator' );
	
	// Logo
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 300,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'titles','site__title', 'site__tag')
	));

	// Menus
	add_theme_support( 'menus' );

	// HTML elements
	add_theme_support( 'html5', array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'script',
		'search-form',
		'style'
	));

	// Automatic feed links
	add_theme_support( 'automatic-feed-links' );

	// Featured Image
	add_theme_support( 'post-thumbnails' );
}

function campfire_title_separator() {
	return '&mdash;';
}

/*
===============================
Add class to body tag when
sidebar is present
===============================
*/

function campfire_body_class( $classes ) {
	if ( is_active_sidebar( 'sidebar-r' ) ) {
		$classes[] = 'has-sidebar-right';
    }
    return $classes;
}
