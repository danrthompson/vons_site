<?php
// Enqueue Styles

wp_enqueue_style( 'xt-flexslider-css' );
wp_enqueue_style( 'pretty-style' );
wp_enqueue_style( 'xt_blog_fonts' );

// Enqueue Scripts
wp_enqueue_script( 'jquery-pretty' );
wp_enqueue_script( 'xt-flexslider-js' );
wp_enqueue_script( 'xt-blog-js' );

get_header(); ?>

	<?php
		// Use xt_custom_header_print_manual($bg, $type, $height, $fixed, $position) getting infos from Options Panel
	?>

	<div id="main-wrapper">

		<?php // Use xt_custom_heading_print_manual($title, $subtitle) getting infos from Options Panel ?>
		<div class="container" id="notebook-wrapper">
			<div id="main" class="notebook">

				<div class="page-title">
					<h1><?php single_cat_title(''); ?></h1>
				</div>
			
				<div id="main-content">
					<div class="content content-left blog blog-large">

						<?php if ( have_posts() ) : ?>
							<?php get_template_part('xt_framework/layouts/blog/blog', 'archive'); ?>
						<?php endif; // end of the loop. ?>

					</div><!-- .content content-left -->

					<?php get_sidebar('right')?>

					<div class="clear clearboth"></div><!-- .clearboth -->

				</div><!-- #main-content -->

			</div> <!-- #main .notebook -->
		</div> <!-- .container -->		
	</div><!-- #main-wrapper -->

<?php get_footer(); ?>