<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
        let html = document.querySelector('html');
        html.classList.remove('no-js');
        html.classList.add('js');
	</script>
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
	<a href="#main-content" class="skip-link screen-reader-text" tabindex="0"><?php _e('Skip to content', 'campfire'); ?></a>
		<header class="site__header" role="banner">
			<div class="site__branding container">
				<?php if (has_custom_logo()) :
					$logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $logo_id , 'full' ); ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-wrapper" title="<?php _e('Back to home page', 'campfire'); ?>">
					<img	src="<?php echo esc_url( $logo[0]); ?>"
							alt="<?php echo get_bloginfo( 'name' ); ?>"
							class="logo">
				</a>
				<?php endif; ?>

				<div class="titles">
					<h1 class="site__title"><?php bloginfo( 'name' ); ?></h1>
					<p class="site__tag"><?php bloginfo( 'description' ); ?></p>
				</div>
			</div>			
			<nav class="primary-menu" role="navigation">
				<div class="container">
					<button id="menu-toggle" class="menu-toggle">
						<svg viewBox="0 0 20 20">
							<use href="<?php echo get_stylesheet_directory_uri() . '/assets/images/menu.svg#Menu'; ?>" />
						</svg>
						<span>Menu</span>
					</button>
					<?php wp_nav_menu( array(
						'theme_location'  => 'primary',
						'container'       => false,
						'menu_class'      => 'primary-menu__list',
						'fallback_cb'     => 'campfire_default_menu'
				) ); ?>
				</div>
			</nav>
		</header>
		<?php get_template_part( 'partials/content', 'hero' ); ?>
		<div class="site__content container">
			<div class="content-wrapper">
				<main id="main-content" class="main-content">
