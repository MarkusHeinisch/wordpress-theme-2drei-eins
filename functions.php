<?php
/**
 * 2DREI.EINS functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 2DREI.EINS
 * @subpackage 2DREI.EINS
 * @since 2DREI.EINS
 * @version 0.1
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function zweidrei_eins_setup() {

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support( 'title-tag' );

}

add_action('after_setup_theme', 'zweidrei_eins_setup');

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function zweidrei_eins_menus() {

	$locations = array(
		'header' => __( 'Header Menu'),
		'footer'  => __( 'Footer Menu'),
    );

	register_nav_menus( $locations );
}

add_action('init', 'zweidrei_eins');

/**
 * Register and Enqueue Styles.
 */
function zweidrei_eins_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );    
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $theme_version );

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

add_action('wp_enqueue_scripts', 'zweidrei_eins_register_styles');

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