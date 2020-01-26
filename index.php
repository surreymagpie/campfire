<?php

/*
===============================
This file is the fallback if no
more specific template is found
===============================
*/

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2><?php
		the_content();
		the_category();
	endwhile;
else:
	_e( 'No content has been found.', 'campfire' );
endif;

get_footer();
