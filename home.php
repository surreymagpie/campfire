<?php

/*
===============================
This is the template for the
blog roll
===============================
*/

get_header();

if ( have_posts() ) : ?>
	<div class="articles">
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="article__single">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="article__summary">
					<?php the_excerpt();
					the_category(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
	<?php the_posts_pagination();
else:
	_e( 'No content has been found.', 'campfire' );
endif;

get_footer();
