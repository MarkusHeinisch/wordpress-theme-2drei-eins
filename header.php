<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage 2Drei
 * @since 2Drei
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
	<nav id="navbar" class="bd-navbar navbar has-shadow is-spaced">
		<div class="container">
			<div class="navbar-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-item" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>				
			<?php wp_nav_menu(array(
				'theme_location' => 'header',
				'container' => 'div',
				'container_id' => 'navbarBasicExample',
				'container_class' => 'navbar-item',
				'menu_class' => 'navbar-start'						
			)); ?>
		</div>
	</nav>
</header>