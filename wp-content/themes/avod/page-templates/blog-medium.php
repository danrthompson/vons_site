<?php
/**
 * Template Name: Blog Medium
 */
 
// Enqueue Styles

wp_enqueue_style( 'xt-flexslider-css' );
wp_enqueue_style( 'pretty-style' );
wp_enqueue_style( 'xt_blog_fonts' );

// Enqueue Scripts
wp_enqueue_script( 'jquery-pretty' );
wp_enqueue_script( 'xt-flexslider-js' );
wp_enqueue_script( 'xt-blog-js' );

get_header(); ?>

	<?php xt_custom_header_print(); ?>

	<div id="main-wrapper" class="full-callout-titlein">

		<?php xt_custom_heading_print(); ?>

		<?php $title_position = get_post_meta(get_the_ID(), "title-position", true); ?>

		<?php if($title_position == 'outside') : ?>
			<div id="header-line" class="header-title">
				<h1><?php the_title(); ?></h1>
			</div><!-- #header-line -->
		<?php endif; ?>

		<div class="container" id="notebook-wrapper">
			<div id="main" class="notebook">

				<?php if($title_position == 'inside') : ?>
					<div class="page-title">
						<h1><?php the_title(); ?></h1>
					</div>
				<?php endif; ?>
			
				<div id="main-content">
					<div class="content content-left blog blog-medium">

						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part('xt_framework/layouts/blog/blog', 'medium'); ?>
						<?php endwhile; // end of the loop. ?>

					</div><!-- .content content-left -->

					<?php get_sidebar('right')?>

					<div class="clear clearboth"></div><!-- .clearboth -->

				</div><!-- #main-content -->

			</div> <!-- #main .notebook -->
		</div> <!-- .container -->		
	</div><!-- #main-wrapper -->

<?php get_footer(); ?>