<?php
/**
 * /*name*/ functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package /*name*/
 */
 
//Removing trash
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//add some beauty
function /*name*/_styles() {
  wp_deregister_style( 'contact-form-7' );
  wp_dequeue_style('bhittani_plugin_kksr');
  wp_enqueue_style( 'panda-style', get_stylesheet_uri(), array(), null, 'all' );
}
add_action( 'wp_enqueue_scripts', '/*name*/_styles' );

//add some moves
function /*name*/_scripts () {
  wp_dequeue_script('bhittani_plugin_kksr_js');
  wp_deregister_script('wp-embed');
  wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array(), null, true );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/script.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', '/*name*/_scripts' );

add_theme_support( 'post-thumbnails' );

//remove img width and height attributes
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

//menus
register_nav_menus(array(
	'top-menu' => 'Header menu'
));





