<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<title><?php wp_title( ' | ', true, 'right' ) . bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
		<header class="site__header" role="banner">
			<div class="site__branding">
				<?php if (has_custom_logo()) :?>
				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>
				<?php endif; ?>

				<div class="titles">
					<h1 class="site__title"><?php bloginfo( 'name' ); ?></h1>
					<p class="site__tag"><?php bloginfo( 'description' ); ?></p>
				</div>

			</div> <!-- site__branding -->
			<nav class="primary-menu" role="navigation">
				<?php wp_nav_menu( array(
					'theme_location'  => 'primary',
					'container'       => false,
					'menu_class'      => 'primary-menu__list',
				) ); ?>
			</nav>
		</header>
		<main class="site__content" role="main">
