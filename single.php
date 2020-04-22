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
				<h2 class="post__title"><?php the_title(); ?></h2>
			</header>

			<div class="article__content">
				<?php the_content(); ?>
			</div>

			<section class="article__info">
				<?php if (get_the_author()) : ?>
				<div class="article__author">
					<span class="icon dashicons-calendar-alt"></span>
					<?php echo sprintf( esc_html( 'Posted by %s on %s', 'campfire'), get_the_author_posts_link(), get_the_date() ); ?>
				</div>
				<?php endif; ?>
				<div class="article__comment-number">
					<span class="icon dashicons-admin-comments"></span>
					<?php comments_number();?>
				</div>
				<div class="article__categories">
					<span class="icon dashicons-category"></span>
					<?php the_category( ', ' ); ?>
				</div>
				<?php if ( ! empty( get_the_tags())) : ?>
				<div class="article__tags">
					<span class="icon dashicons-tag"></span>
					<?php the_tags( '', ', ', '' ); ?>
				</div>
				<?php endif; ?>
			</section>

		</article>
		<?php if (comments_open() || get_comments_number()) : comments_template(); endif; ?>
	<?php endwhile;
else:
	_e( 'No content has been found.', 'campfire' );
endif;

get_footer();
