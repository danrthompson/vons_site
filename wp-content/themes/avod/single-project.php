<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 
// Enqueue Portfolio Styles
wp_enqueue_style( 'pretty-style' );
wp_enqueue_style( 'xt-flexslider-css' );
wp_enqueue_style( 'xt_portfolio_fonts' );
wp_enqueue_style( 'xt_portfolio_styles' );

// Enqueue Portfolio Scripts
wp_enqueue_script( 'jquery-pretty' );
wp_enqueue_script( 'xt-flexslider-js' );
wp_enqueue_script( 'portfolio-pretty-init' );

get_header(); ?>


	
	<div id="main-wrapper" class="full-callout-titlein">


		<?php xt_custom_heading_print_manual( of_get_option('callout_project_main'), of_get_option('callout_project_sub') ); ?>

		<div class="container" id="notebook-wrapper">

			<div id="main" class="notebook">



				<div class="page-title">
					<h1><?php the_title(); ?></h1>
				</div>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php 
						$layout = 'left';
						
						$_l =  get_post_meta($post->ID, 'layout', true);
						
						if($_l == 'right_sidebar')
							$layout = 'right';
						if($_l == 'full')
							$layout = 'full';
						
						// Require Selected Layout
						get_template_part('xt_framework/portfolio/single', $layout); 
					?>
					
				<?php endwhile; // end of the loop. ?>

			</div> <!-- #main .notebook -->

		</div> <!-- .container -->		
</div><!-- #main-wrapper -->

<?php get_footer(); ?>