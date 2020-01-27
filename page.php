<?php

/*
===============================
This template displays a single
static page
===============================
*/

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

	<div class="page__content">
		<h2><?php the_title(); ?></h2>

		<?php the_content(); ?>
	</div>
	<?php endwhile;
endif;

get_footer();
