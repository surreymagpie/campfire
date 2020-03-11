<?php

/*
===============================
This file is used when the path
is not valid
===============================
*/

get_header(); ?>

		<h1 class="page-title"><?php esc_html_e( 'Oops! It looks like you&rsquo;re lost', 'campfire' ); ?></h1>
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'campfire' ); ?></p>

		<?php get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'campfire' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div>

<?php get_footer();
