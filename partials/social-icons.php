<?php

$fb = get_theme_mod('facebook');
$ig = get_theme_mod('instagram');
$tw = get_theme_mod('twitter');

?> 

<?php if ( $fb || $ig || $tw ): ?>
	<div class="social-icons container">
	<?php if (! empty($fb)): ?>
		<a class="social-link" href="https://www.facebook.com/<?php echo $fb; ?>"><span class="dashicons dashicons-facebook"></span></a>
	<?php endif; ?>
	<?php if (! empty($ig)): ?>
		<a class="social-link" href="https://www.instagram.com/<?php echo $ig; ?>"><span class="dashicons dashicons-instagram"></span></a>
	<?php endif; ?>
	<?php if (! empty($tw)): ?>
		<a class="social-link" href="https://twitter.com/<?php echo $tw; ?>"><span class="dashicons dashicons-twitter"></span></a>
	<?php endif; ?>
	</div>
<?php endif;
