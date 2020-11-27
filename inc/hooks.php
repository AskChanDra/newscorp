<?php
/**
 * Custom hooks
 *
 * @package wpcorp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wpcorp_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function wpcorp_site_info() {
		do_action( 'wpcorp_site_info' );
	}
}

add_action( 'wpcorp_site_info', 'wpcorp_add_site_info' );
if ( ! function_exists( 'wpcorp_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function wpcorp_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'http://wordpress.org/', 'wpcorp' ) ),
			sprintf(
				/* translators: WordPress */
				esc_html__( 'Proudly powered by %s', 'wpcorp' ),
				'WordPress'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: 1: Theme name, 2: Theme author */
				esc_html__( 'Theme: %1$s by %2$s.', 'wpcorp' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'http://wpcorp.com', 'wpcorp' ) ) . '">wpcorp.com</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: Theme version */
				esc_html__( 'Version: %1$s', 'wpcorp' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'wpcorp_site_info_content', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
