<?php

/*
===============================
Widget areas
===============================
*/
function campfire_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'campfire' ),
		'id'            => 'sidebar-r',
		'description'   => esc_html__( 'Place widgets to right hand side of content', 'campfire' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Left', 'campfire' ),
		'id'            => 'footer-l',
		'description'   => esc_html__( 'First Footer Widget Area', 'campfire' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Centre', 'campfire' ),
		'id'            => 'footer-c',
		'description'   => esc_html__( 'Second Footer Widget Area', 'campfire' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Right', 'campfire' ),
		'id'            => 'footer-r',
		'description'   => esc_html__( 'Third Footer Widget Area', 'campfire' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'campfire_widgets_init' );
