<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blimey
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="wrapper">
			<div class="site-info">
				<div class="third">
				</div>
				<div class="third">
				</div>
				<div class="third"><br>
				</div>

				<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blimey' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'blimey' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'blimey' ), 'blimey', '<a href="http://underscores.me/">Pete Hudack</a>' );
					?>-->
			</div><!-- .site-info -->
		</div><!--wrapper-->	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
