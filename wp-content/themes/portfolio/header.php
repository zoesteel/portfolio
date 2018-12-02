<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

		<div class="header" id="nav-inner-wrapper">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Z</a>
		
			<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			
			<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<?php esc_html_e( 'Primary Menu', 'portfolio' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</div>



		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">