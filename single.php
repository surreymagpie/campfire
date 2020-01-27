<?php

/*
===============================
This file displays a single
blog post
===============================
*/

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		<article class="main-article">
			<header class="article__header">
				<h2><?php the_title(); ?></h2>

				<?php if (get_the_author()) : ?>
				<small class="article__meta">
					<?php echo sprintf( esc_html( 'Posted by %s on %s', 'campfire'), get_the_author_posts_link(), get_the_date() ); ?>
				</small>
				<?php endif; ?>
			</header>

			<div class="article__content">
				<?php the_content(); ?>
			</div>

			<footer class="article__footer">
				<h4><?php _e( 'Categorised under: ', 'campfire' ); ?></h4>
				<?php the_category();

				if ( ! empty( get_the_tags())) : ?>
					<p class="tags"><strong><?php _e( 'Tags: ', 'campfire' ) ?></strong><?php the_tags( '', ', ', '' );
				endif; ?>
			</footer>
		</article>
	<?php endwhile;
else:
	_e( 'No content has been found.', 'campfire' );
endif;

get_footer();
