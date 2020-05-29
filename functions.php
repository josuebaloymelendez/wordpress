<?php
/**
 * Noesist functions and definitions
 *
 * @package WordPress
 * @subpackage noesist
 * @since Noesist 1.0
 */

function noesist_theme_support() {
	add_theme_support( 'automatic-feed-links' );
	
	add_theme_support( 'post-thumbnails' );
	
	add_theme_support( 'title-tag' );
	add_image_size( 'noesist-featured-image-page', 1920, 670, true );
	
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);
	
	add_theme_support( 'responsive-embeds' );
	
	register_nav_menus(
		array(
			'top'    => __('Top Menu', 'noesist'),
			'social' => __('Social Links Menu', 'noesist'),
		)
	);
}

add_action( 'after_setup_theme', 'noesist_theme_support' );

 /**
 * Register and Enqueue Styles.
 */
function noesist_register_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );

    // Production
    // wp_enqueue_style( 'noesist-style', get_stylesheet_uri(), array(), $theme_version );
    
    // Development
	wp_enqueue_style( 'noesist-style', get_stylesheet_uri(), array(), microtime() );
}

add_action( 'wp_enqueue_scripts', 'noesist_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function noesist_register_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );
    
    // Production
    // wp_enqueue_script( 'noesist-jqueryui-js', get_template_directory_uri() . '/assets/js/jquery-ui.js', array (), '1.12.1', true);
    // wp_enqueue_script( 'noesist-slick-js', get_template_directory_uri() . '/assets/js/slick-pack.js', array (), '1.8.0', true);
    // wp_enqueue_script( 'noesist-adobemenu-js', get_template_directory_uri() . '/assets/js/jquery-accessibleMegaMenu.2.js', array (), '0.1', true);
    // wp_enqueue_script( 'noesist-premium-js', get_template_directory_uri() . '/assets/js/module-premium.js', array (), '1.0', true);
    // wp_enqueue_script( 'noesist-masonry-js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array (), '4.2.2', true);
    // wp_enqueue_script( 'noesist-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), $theme_version, true );
    
    // Development
    wp_enqueue_script( 'noesist-jqueryui-js', get_template_directory_uri() . '/assets/js/jquery-ui.js', array (), microtime(), true);
    wp_enqueue_script( 'noesist-slick-js', get_template_directory_uri() . '/assets/js/slick-pack.js', array (), microtime(), true);
    wp_enqueue_script( 'noesist-adobemenu-js', get_template_directory_uri() . '/assets/js/jquery-accessibleMegaMenu.2.js', array (), microtime(), true);
    wp_enqueue_script( 'noesist-premium-js', get_template_directory_uri() . '/assets/js/module-premium.js', array (), microtime(), true);
    wp_enqueue_script( 'noesist-masonry-js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array (), microtime(), true);
    wp_enqueue_script( 'noesist-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), microtime(), true );
}

add_action( 'wp_enqueue_scripts', 'noesist_register_scripts' );


/**
 * Register and Enqueue Google Fonts.
 */
function noesist_register_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap', false );
}

add_action( 'wp_enqueue_scripts', 'noesist_register_fonts' );

/**
 * Remove scripts from header to footer
 */
function noesist_remove_head_scripts() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    // remove_action('wp_head', 'wp_enqueue_scripts', 1);
    
    add_action('wp_footer', 'wp_print_head_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 1);
    // add_action('wp_footer', 'wp_enqueue_scripts', 1);
}

add_action( 'wp_enqueue_scripts', 'noesist_remove_head_scripts' );

/**
 * Custom Logo
 */
function noesist_custom_logo_setup() {
	$logo = array(
		'width'       => 200,
		'height'      => 68,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $logo );
   }
add_action( 'after_setup_theme', 'noesist_custom_logo_setup' );

/**
* Active Custom Menu Link
*/
function noesist_check_active_menu( $menu_item ) {
   $actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   if ( $actual_link == $menu_item->url ) {
	   return 'active';
   }
   return '';
}

/**
 * Adding the Excerpt block to pages
 */
function noesist_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}

add_action( 'init', 'noesist_add_excerpts_to_pages' );

/**
 * Shortcodes
 */