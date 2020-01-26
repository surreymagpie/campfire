<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<title><?php wp_title( ' | ', true, 'right' ) . bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
		<header class="site__header" role="banner">
			Header content
		</header>
		<main class="site__content" role="main">
