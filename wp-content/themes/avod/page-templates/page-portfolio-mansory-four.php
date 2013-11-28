<?php
/**
 * Template Name: Portfolio Mansory 4 Columns
 */

// Enqueue Portfolio Styles
wp_enqueue_style( 'pretty-style' );
wp_enqueue_style( 'xt_portfolio_fonts' );
wp_enqueue_style( 'xt_portfolio_styles' );

// Enqueue Portfolio Scripts
wp_enqueue_script( 'jquery-pretty' );
wp_enqueue_script( 'portfolio-pretty-init' );
wp_enqueue_script( 'jquery_debouncedresize' );
wp_enqueue_script( 'xt_portfolio_isotope' );
wp_enqueue_script( 'xt_portfolio_mansory_init' );

get_header(); ?>

	<?php xt_custom_header_print(); ?>

	<div id="main-wrapper" class="full-callout-titlein page-portfolio-mansory">

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
			
				<?php if(get_the_excerpt() != '') : ?>
				<div class="page-excerpt">
					<p><?php echo get_the_excerpt(); ?></p>
				</div> <!-- .page-excerpt -->
				<?php endif; ?>
				
				<div id="main-content">
					<div class="content content-full">
						<div class="the-content">

								<?php 
									// Insert 4 Columns Portfolio
									get_template_part('xt_framework/portfolio/portfolio', 'four'); 
								?>

						</div>
					</div><!-- .content content-full -->

					<div class="clear clearboth"></div><!-- .clearboth -->

				</div><!-- #main-content -->

			</div> <!-- #main .notebook -->
		</div> <!-- .container -->		
	</div><!-- #main-wrapper -->

<?php get_footer(); ?>