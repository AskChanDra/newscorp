<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wpcorp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'wpcorp_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper text-center bg-secondary text-white py-3" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?> pt-5 pb-5">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info d-flex flex-column">

						<?php //wpcorp_site_info(); ?>
						<a href="#" >
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/newscorp-logo.png" alt="News Corp Australia Logo" />
						</a>

						<p>&copy; 2020 Nationwide News Pty Limited. All rights reserved.</p>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

