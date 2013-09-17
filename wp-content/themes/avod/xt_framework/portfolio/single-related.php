<?php
	// get related filters
	$terms = get_the_terms( get_the_ID() , 'filter-portfolio');

	// get possible portfolios
	$portfolios = array();

	$terms_portfolio = get_the_terms( get_the_ID() , 'type-portfolio');
	if(!empty($terms_portfolio)) {
		foreach ($terms_portfolio as $term_portfolio) {
			$portfolios[] = $term_portfolio->slug;
		}
		$portfolios = implode(",", $portfolios);
	}

	$do_not_duplicate[] = get_the_ID();

	// if found something
	if(!empty($terms)) {
		//var_dump($terms_portfolio);
?>

<div id="additional-products-same-portfolio" class="widget-area sidebar sidebar-left additional-products-same-portfolio" role="complementary">
	<ul>
		<li id="pages-2" class="widget widget_pages">
			<h3 class="widgettitle">
				<span>Other Brands</span>
			</h3>
			<ul>
	<?php
	foreach ($terms as $term) {
		if(true) :
			query_posts( array(
				'type-portfolio' => $portfolios,
				'showposts' => 9999,
				'posts_per_page' => 9999,
				'ignore_sticky_posts' => 1,
				'post__not_in' => $do_not_duplicate,
				'orderby' => 'title', 
				'order' => 'ASC' ) );
					
			if(have_posts()){
				
				while ( have_posts() == true) : the_post(); $do_not_duplicate[] = get_the_ID(); ?>

						<?php
							// print correct class
							$_class = '';
							$_mobclass = '';

							// get project type

							$permalink = get_permalink();
							$permalink_title = get_permalink();

							// get custom post info
							$_type = get_post_meta(get_the_ID(), 'project-type', true);
							$_icon = '<span><i class="xt-portfolio-icon-plus-circle"></i></span>';
							$_target = '';
							$_rel = '';
							$mfp = '';

							if($_type == 'default') {
								$external = get_post_meta(get_the_ID(), 'external-url', true);
								if($external != '')
									$permalink = $permalink_title = $external;
								$_target = ' target="'.get_post_meta(get_the_ID(), 'target', true).'"';
								$_rel = '';
							}
							else if($_type == 'lightbox') {
								// change icon
								$_icon = '<span><i class="xt-portfolio-icon-picture"></i></span>';

								$largeImg = get_post_meta(get_the_ID(), 'lightbox-image', true);
								$permalink = $largeImg;
								$_rel = ' rel="portfolio-prettyPhoto"';
								$mfp = 'mfp-image';
							}
							else if($_type == 'vimeo') {
								// change icon
								$_icon = '<span><i class="xt-portfolio-icon-video"></i></span>';

								$vimeo = get_post_meta(get_the_ID(), 'vimeo-id', true);
								$permalink = 'http://vimeo.com/'.$vimeo;
								$_rel = ' rel="portfolio-prettyPhoto"';
								$mfp = 'mfp-iframe';
							}
							else if($_type == 'youtube') {
								// change icon
								$_icon = '<span><i class="xt-portfolio-icon-video"></i></span>';

								$youtube = get_post_meta(get_the_ID(), 'youtube-id', true);
								$permalink = 'http://www.youtube.com/watch?v='.$youtube;
								$_rel = ' rel="portfolio-prettyPhoto"';
								$mfp = 'mfp-iframe';
							}

						?>


						<li class="page_item">
						<a href="<?php echo $permalink_title; ?>"<?php echo $_target; ?>><?php the_title(); ?></a>
						</li>

				<?php 
				endwhile; 
				wp_reset_query();


			} // have_posts if
		endif; // max < 4
	} // foreach

	?>

			</ul>
		</li>
	</ul>
</div>
<?php
	}
?>