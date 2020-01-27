<?php

/*
===============================
The archive template is used
when visitors request posts by
category, author, or date.
===============================
*/

get_header();

if ( have_posts() ) :
	the_archive_title( '<h1 class="archive__title">', '</h1>' );
	the_archive_description( '<div class="archive__description">', '</div>' ); ?>
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
