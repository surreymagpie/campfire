<?php

if ( is_active_sidebar( 'sidebar-r' ) ) : ?>

<aside class="sidebar-right widget-area" role="region" aria-label="Right Sidebar">
	<?php dynamic_sidebar( 'sidebar-r' ); ?>
</aside><!-- #secondary -->

<?php endif;