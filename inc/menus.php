<?php

/*
===============================
Navigation
===============================
*/

register_nav_menus( array(
	'primary' => esc_html__( 'Header Menu', 'campfire' ),
	'footer' => esc_html__( 'Footer Menu', 'campfire' )
));

// Menu Fallback
function campfire_default_menu() {
    get_template_part( 'partials/fallback', 'menu' );
}
