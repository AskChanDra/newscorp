<?php
/**
 * Theme Functions.
 *
 * @package WPCorp
 */


if ( ! defined( 'WPCORP_DIR_PATH' ) ) {
	define( 'WPCORP_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'WPCORP_DIR_URI' ) ) {
	define( 'WPCORP_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'WPCORP_BUILD_URI' ) ) {
	define( 'WPCORP_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'WPCORP_BUILD_PATH' ) ) {
	define( 'WPCORP_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'WPCORP_BUILD_JS_URI' ) ) {
	define( 'WPCORP_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'WPCORP_BUILD_JS_DIR_PATH' ) ) {
	define( 'WPCORP_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'WPCORP_BUILD_IMG_URI' ) ) {
	define( 'WPCORP_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'WPCORP_BUILD_CSS_URI' ) ) {
	define( 'WPCORP_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'WPCORP_BUILD_CSS_DIR_PATH' ) ) {
	define( 'WPCORP_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'WPCORP_BUILD_LIB_URI' ) ) {
	define( 'WPCORP_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

require_once WPCORP_DIR_PATH . '/inc/helpers/autoloader.php';
require_once WPCORP_DIR_PATH . '/inc/helpers/template-tags.php';

function wpcorp_get_theme_instance() {
	\WPCORP\Inc\WPCORP::get_instance();
}

wpcorp_get_theme_instance();

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// wpcorp's includes directory.
$wpcorp_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$wpcorp_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/wpcorp/wpcorp/issues/567.
	'/editor.php',                          // Load Editor functions.
);



// Include files.
foreach ( $wpcorp_includes as $file ) {
	require_once $wpcorp_inc_dir . $file;
}
