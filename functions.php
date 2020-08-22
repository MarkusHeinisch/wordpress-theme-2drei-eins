<?php
/**
 * 2DREI.EINS functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage 2DREI
 * @since 2DREI 1.0
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ags_theme_support() {

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support( 'title-tag' );

}

add_action('after_setup_theme', 'ags_theme_support');

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function twentytwenty_menus() {

	$locations = array(
		'header' => __( 'Header Menu', 'libretto' ),
		'footer'  => __( 'Footer Menu', 'libretto' ),
    );

	register_nav_menus( $locations );
}

add_action('init', 'twentytwenty_menus');

/**
 * Register and Enqueue Styles.
 */
function twentytwenty_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );
    
	wp_enqueue_style( 'twentytwenty-style', get_stylesheet_uri(), array(), $theme_version );
	//wp_style_add_data( 'twentytwenty-style', 'rtl', 'replace' );

	// Add output of Customizer settings as inline style.
	//wp_add_inline_style( 'twentytwenty-style', twentytwenty_get_customizer_css( 'front-end' ) );

	// Add print CSS.
	//wp_enqueue_style( 'twentytwenty-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );

	/** 	
	 * Add custom css
	 * Bulma: Free, open source, and modern CSS framework based on Flexbox
	 * https://bulma.io/ 
	 * Version: 0.9.0
	 * Child: custom.css
	 */
	wp_enqueue_style( 'style1', get_template_directory_uri() . '/assets/css/bulma.min.css', array(), $theme_version );
	wp_enqueue_style( 'style2', get_template_directory_uri() . '/assets/css/custom.css', array(), $theme_version );

	

}

add_action('wp_enqueue_scripts', 'twentytwenty_register_styles');

function wpa_content_filter($content) {
    return str_replace('<h2>','<h2 class="title is-2">',$content);
    //return preg_replace( '|<h[^>]+>(.*)</h[^>]+>|iU','-->$0<--', $content);    
}

add_filter('the_content', 'wpa_content_filter');


function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'header' ) {
      // add the desired attributes:
      $atts['class'] = 'navbar-item';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

/*
function special_nav_class($classes, $item){
	if( in_array('current-menu-item', $classes) ){
			$classes[] = 'active ';
	}
	return $classes;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
*/

/*
function wpdocs_special_nav_class( $classes, $item ) {
	$classes[] = "navbar-item";    
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'wpdocs_special_nav_class' , 10, 2 );*/