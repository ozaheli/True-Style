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
		<!--Verifying the custom footer menu -->
		<?php
		if(has_nav_menu('menu-footer')){
			wp_nav_menu(
				array(
					'theme_location' => 'menu-footer'        
				)
				);
		}
		?>
	</div><!-- .site-info -->
	<div class="post-cont">

		<?php
		/*custom wp_query function for the footer */
			$freshfashion_args = array(
				'post_type'        => array('freshfashion'),
				'post_status'      => 'publish', 
				'posts_per_page'   => 3,
				'orderby'		   => 'rand',
				'post__not_in'	   => array(get_the_ID())
			);
				$freshfashion_query = new WP_Query($freshfashion_args);
				?>
				<div class="grid-container">
					<div class="grid-x grid-margin-y grid-margin-x">
				<?php
				if ( $freshfashion_query -> have_posts() ){
					while( $freshfashion_query -> have_posts() ){
						$freshfashion_query -> the_post();
						?>
						<div class="cell small-12 medium 4">
							<?php
							the_post_thumbnail();
							
							/*checking if the title is exists with conditional statement */
							if ( get_the_title() ){
								?>
								<h3><?php echo get_the_title();?></h3>
								<?php
							}
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
				</div>
				<?php
			/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '© Copyright %1$s by %2$s.', 'ts' ),'2022' ,'True Style', '<a href="https://helioza.xyz/">Heli Oza</a>' );
				?>
				
				
			
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
