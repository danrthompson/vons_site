<?php
/**
 * Template Name: Page with Right Sidebar No Title
 */

get_header();
the_post(); ?>

	<?php xt_custom_header_print(); ?>

	<?php $sliderAlias = get_post_meta(get_the_ID(), "xt-slider-alias", true);
		
		if($sliderAlias != '' && function_exists('xt_slider')) : ?>

		<div id="xt-slider-wrapper">
			<?php echo xt_slider( array( "id" => $sliderAlias ) ); wp_reset_postdata(); ?>
		</div> <!-- #xt-slider-wrapper -->

	<?php endif; ?>

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
			
				<div id="main-content">
					<div class="content content-left">
				
						<div class="the-content page-content">
							<?php 
								the_content();
								wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'avod' ), 'after' => '</div>' ) );
							?>
						</div>
					</div><!-- .content content-left -->

					<?php get_sidebar('right')?>

					<div class="clear clearboth"></div><!-- .clearboth -->

				</div><!-- #main-content -->

			</div> <!-- #main .notebook -->
		</div> <!-- .container -->		
	</div><!-- #main-wrapper -->

<?php get_footer(); ?>