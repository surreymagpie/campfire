			</main>
			<?php get_sidebar('sidebar-r'); ?>
		</div>
		
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
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
