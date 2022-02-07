<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package True_Style
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Copyright: %1$s by %2$s.', 'ts' ),'2022' ,'ts', '<a href="https://helioza.xyz/">Heli Oza</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
