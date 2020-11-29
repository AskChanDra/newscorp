<?php
/**
 * Theme Functions.
 *
 * @package WPCorp
 */

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
