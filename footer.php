<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sgstn_Cover
 */

?>
		<footer id="colophon" class="site-footer mastfoot mt-auto">
			<div class="site-info inner">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sgstncover' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'sgstncover' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'sgstncover' ), 'sgstncover', '<a href="https://sugestionstudio.com">Jorge Ortega</a>' );
					?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- .cover-container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
