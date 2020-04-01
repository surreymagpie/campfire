				</main> <!-- #main-content .main-content -->
				<?php get_sidebar('sidebar-r'); ?>
			</div> <!-- .content-wrapper -->
		</div> <!-- .site__content.container -->
		
		<footer class="site__footer" role="contentinfo">
		<?php if (is_active_sidebar( 'footer-l' ) || is_active_sidebar( 'footer-c' ) || is_active_sidebar( 'footer-r' )) : ?>
		<aside class="footer__widget-areas container">
			<?php if(is_active_sidebar('footer-l')): ?>
				<div class="footer__widget-area--left"><?php dynamic_sidebar( 'footer-l' );?></div>
			<?php endif; ?>
			<?php if(is_active_sidebar('footer-c')): ?>
				<div class="footer__widget-area--centre"><?php dynamic_sidebar( 'footer-c' );?></div>
			<?php endif; ?>
			<?php if(is_active_sidebar('footer-r')): ?>
				<div class="footer__widget-area--right"><?php dynamic_sidebar( 'footer-r' );?></div>
			<?php endif; ?>
		</aside>
		<?php endif; ?>
		<div class="container">
			<nav class="footer-menu">
			<?php wp_nav_menu( array(
				'walker'			=> new Campfire_Footer_Nav_Walker(),
				'theme_location'	=> 'footer',
				'container'			=> false,
				'menu_class'		=> 'footer-menu__list',
				'fallback_cb'		=> 'campfire_default_menu'
			)); ?>
			</nav>
			<div class="copyright">
				&copy; <?php the_time('Y'); ?>&nbsp;<?php bloginfo('name'); ?>
			</div>
		</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
