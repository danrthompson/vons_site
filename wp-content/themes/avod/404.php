<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

	<?php
		// Use xt_custom_header_print_manual($bg, $type, $height, $fixed, $position) getting infos from Options Panel
	?>
	
	<div id="main-wrapper">

		<?php // Use xt_custom_heading_print_manual($title, $subtitle) getting infos from Options Panel ?>

		<div class="container" id="notebook-wrapper">
			<div id="main" class="notebook">

				<div class="content-wrapper">
					<div class="content page page-full page-home notfound">
						<div id="page-content" role="main">
							
							<div class="big-404"><?php _e("Not Found", 'avod'); ?></div>
							<div class="sub-404"><?php _e("Sorry, we didn't found the page or post you are looking for.", 'avod'); ?></div>
							
						</div><!-- #content -->
					</div><!-- #primary -->
					
					<div class="xt-clear clear clearboth clearfix"></div>
				</div><!-- #content-wrapper -->
				
			</div> <!-- #main .notebook -->
		</div> <!-- .container -->		
	</div><!-- #main-wrapper -->

<?php get_footer(); ?>