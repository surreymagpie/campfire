			</main>
			<?php get_sidebar('sidebar-r'); ?>
		</div> <!-- .page__wrapper -->
		<footer class="site__footer" role="contentinfo">
			Footer content
		<?php if (is_active_sidebar( 'footer-l' ) || is_active_sidebar( 'footer-c' ) || is_active_sidebar( 'footer-r' )) : ?>
		<aside class="footer__widget-area">
			<?php dynamic_sidebar( 'footer-l' ); ?>
			<?php dynamic_sidebar( 'footer-c' ); ?>
			<?php dynamic_sidebar( 'footer-r' ); ?>
		</aside>
		<?php endif; ?>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
