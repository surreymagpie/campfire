<?php

/*
===============================
Engueue Assets
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
	
  wp_enqueue_style( 'google', 'https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700,900' );
  wp_enqueue_style( 'campfire', get_stylesheet_directory_uri() . '/assets/css/campfire.css', array(), $version );

  wp_enqueue_script( 'campfire', get_stylesheet_directory_uri() . '/assets/js/campfire.js', array(), $version, true );
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

	add_theme_support( 'menus' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Header Menu', 'campfire' ),
		'footer' => esc_html__( 'Footer Menu', 'campfire' )
	));
}
add_action( 'after_setup_theme', 'campfire_setup');

/*
===============================
Widget areas
===============================
*/
function campfire_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'woggle' ),
		'id'            => 'sidebar-r',
		'description'   => esc_html__( 'Place widgets to right hand side of content', 'woggle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Left', 'woggle' ),
		'id'            => 'footer-l',
		'description'   => esc_html__( 'First Footer Widget Area', 'woggle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Centre', 'woggle' ),
		'id'            => 'footer-c',
		'description'   => esc_html__( 'Second Footer Widget Area', 'woggle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Right', 'woggle' ),
		'id'            => 'footer-r',
		'description'   => esc_html__( 'Third Footer Widget Area', 'woggle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'campfire_widgets_init' );

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
add_filter( 'body_class', 'campfire_body_class' );
