<?php
/**
 * Template Name: Page Home
 */

	get_header(); // get the header.php file
	the_post();
?>

	<?php xt_custom_header_print(); ?>

	<?php $sliderAlias = get_post_meta(get_the_ID(), "xt-slider-alias", true);
	
	if($sliderAlias != '' && function_exists('xt_slider')) : ?>

		<div id="xt-slider-wrapper">
			<?php echo xt_slider( array( "id" => $sliderAlias ) ); wp_reset_postdata(); ?>
		</div> <!-- #xt-slider-wrapper -->

	<?php endif; ?>

	<div id="main-wrapper" class="full-callout-titlein full-home-style">

		<div class="container" id="notebook-wrapper">
			<div id="main" class="notebook">
				<div id="main-content">
					<div class="content content-full">
						<div class="the-content page-content page-content-full">
							<?php 
								the_content();
								wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'avod' ), 'after' => '</div>' ) );
							?>
						</div>
					</div><!-- .content content-full -->

					<div class="clear clearboth"></div><!-- .clearboth -->

				</div><!-- #main-content -->

			</div> <!-- #main .notebook -->
		</div> <!-- .container -->		
	</div><!-- #main-wrapper -->
	
<?php
	get_footer(); // get the footer.php file	
?>