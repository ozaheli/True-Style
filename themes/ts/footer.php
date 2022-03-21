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

	<footer id="colophon" class="site-footer site-info">
			<?php 
				$recipe_args = array(
					'post_type'      => array('ts_recipe'),
					'post_status'    => 'publish',
					'posts_per_page' => 3,
				);
				$recipe_query = new WP_Query($args);
				?>

				<div class="grid-container">
					<div class="grid-x grid-margin-x grid-margin-y">

				
				<?php
				
				if($recipe_query->have_posts()){
					while($recipe_query->have_posts()){
						$recipe_query->the_posts();
				?>
					<div class="cell small-12 medium-4">
						<?php 
						the_post_thumbnail();
						the_title(); 
						the_excerpt(); 
						?>
					</div>
					<?php
					}
					wp_reset_postdata();
				}
					?>
			
				</div>
				</div>
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
