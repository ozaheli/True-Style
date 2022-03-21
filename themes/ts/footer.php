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
		<div class="site-info grid-container">
			<?php 
				$recipe_args = array(

				);
				$recipe_query = new WP_Query($args);
				if($recipe_query->have_posts()){
					while($recipe_query->have_posts()){
						$recipe_query->have_posts();
					}
					wp_reset_postdata();
				}
			?>
			<?php
				wp_nav_menu(
					array(
					'theme_location' => 'menu-footer',
					'menu_id'        => 'footer-menu',
					)
				);
			
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '© Copyright %1$s by %2$s.', 'ts' ),'2022' ,'True Style', '<a href="https://helioza.xyz/">Heli Oza</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
