<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
		<header class="site__header" role="banner">
			<div class="site__branding container">
				<?php if (has_custom_logo()) :?>
				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>
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
				) ); ?>
				</div>
			</nav>
		</header>
		<div class="page__wrapper container">
			<main class="site__content" role="main">
