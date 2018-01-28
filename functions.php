<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Customization Admin */
require_once( 'library/custom-admin.php' );

/** Customization Admin */
require_once( 'library/plugin-activation-class.php' ); // Comment on production
require_once( 'library/recommended-plugins.php' ); // Comment on production

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );

// ACF Pro Options Page

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

 add_filter('acf/options_page/settings', 'my_options_page_settings');
	function my_options_page_settings($options) {
	    $options['title'] = __('My Options');
	    $options['pages'] = array(
            __('Header'),
            __('Sidebar'),
            __('Contacts'),
            __('Footer')
	    );
	    return $options;
	}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

// Register your Google Map API key - replace 'xxx' with you key
if( function_exists('acf_update_setting') ) {
	function be_acf_init() {
		acf_update_setting('google_api_key', 'AIzaSyCTgzrmo9NC5L1c6M-krZlY-YuK-ECz7VU');
	}
	add_action('acf/init', 'be_acf_init');
}

/******************** MY SCRIPTS ****************************/



add_action( 'wp_enqueue_scripts', 'wow' );
function wow(){
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js');
}

/******************** MY HOOKS ****************************/

// add class to menu item start
function wph_css_class_to_menu($classes, $item){
    $classes[] = "menu-categories header_menu-list_item";
    return $classes;
}
add_filter('nav_menu_css_class' , 'wph_css_class_to_menu' , 10 , 2);
// add class to menu item end

// add class to menu link start
function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="scroll_spy_link scroll-link header_menu-list_item-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');
// add class to menu link end

/*********************** PUT YOU FUNCTIONS BELOW ********************************/

// add_image_size( 'name', width, height, array('center','center'));
