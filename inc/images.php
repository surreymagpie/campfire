<?php

/*
===============================
Image Sizes
===============================
*/

add_action( 'after_setup_theme', 'campfire_image_sizes', 10 );

add_filter( 'image_size_names_choose', 'campfire_custom_image_size_names' );

function campfire_image_sizes() {
	add_image_size( 'small', 300, 9999 ); // 300px wide unlimited height
	add_image_size( 'medium-small', 450, 9999 ); // 300px wide unlimited height
	add_image_size( 'xl', 1200, 9999 ); // 1200px wide unlimited height
	add_image_size( 'xxl', 2000, 9999 ); // 2000px wide unlimited height
	add_image_size( 'xxxl', 3000, 9999 ); // 3000px wide unlimited height
	add_image_size( 'hero', 9999, 450 ); // 450px tall unlimited width
}

function campfire_custom_image_size_names( $sizes ) {
	return array_merge( $sizes, array(
		'small' => __( 'Small' ),
		'medium-small' => __( 'Medium Small' ),
		'xl' => __( 'Extra Large' ),
		'xxl' => __( '2x Extra Large' ),
		'xxxl' => __( '3x Extra Large' ),
		'hero' => __( 'Hero Full Width' ),
		)
	);
}
