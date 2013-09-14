<?php
	// Enqueue Styles

	wp_enqueue_style( 'xt-flexslider-css' );
	wp_enqueue_style( 'pretty-style' );
	wp_enqueue_style( 'xt_blog_fonts' );

	// Enqueue Scripts
	wp_enqueue_script( 'comment-reply' );
	wp_enqueue_script( 'jquery-pretty' );
	wp_enqueue_script( 'xt-flexslider-js' );
	wp_enqueue_script( 'xt-blog-js' );

	get_header(); // get the header.php file

?>

	<div id="main-wrapper" class="full-callout-titlein">

		<?php xt_custom_heading_print_manual( of_get_option('callout_single_main'), of_get_option('callout_single_sub') ); ?>

		<div class="container" id="notebook-wrapper">
			<div id="main" class="notebook">

				<div class="page-title">
					<h1><?php echo of_get_option('title_post'); ?></h1>
				</div>
			
				<div id="main-content">
					<div class="content content-left single-post">
						
						<div id="page-content" role="main">

							<?php while ( have_posts() ) : the_post(); ?>
								
								<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>

									<?php
										$format = get_post_format();
										if( false === $format )
											$format = 'standard';

										get_template_part( 'xt_framework/layouts/posts/content', $format );

										paginate_links();
									?>
									
									<?php if(get_the_tags() && !of_get_option('post_tags_disabled') ) : ?>
										<div class="post-tags">
											<p><i class="font-icon-tags"></i> <?php the_tags(__('tags: ', 'avod'), ', '); ?></p>
										</div>
									<?php endif; ?>

									<?php if(function_exists('xt_wp_social_icon') && !of_get_option('post_share_disabled') ) : ?>
										<div class="share-post">
											<div class="share-text">
												<?php _e("Share Post:", 'avod'); ?>
											</div>
											
											<div class="share-icons">
												<?php
													$pinImg = '';
													if(has_post_thumbnail( $post->ID ) ) {
														$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
														$pinImg = urlencode($image[0]);
													}

													echo do_shortcode('
													[xt_social_icon icon="facebook-2" href="http://www.facebook.com/sharer.php?u='.get_permalink().'" tooltip="Facebook"]
													[xt_social_icon icon="twitter-2" href="http://twitter.com/home?status='.get_the_title().' - '.get_permalink().'" tooltip="Twitter"]
													[xt_social_icon icon="gplus-2" href="https://plus.google.com/share?url='.get_permalink().'&title='.get_the_title().'" tooltip="Google+"]
													[xt_social_icon icon="linkedin-2" href="http://linkedin.com/shareArticle?mini=true&url='.get_permalink().'&title='.get_the_title().'" tooltip="LinkedIn"]
													[xt_social_icon icon="reddit" href="http://www.reddit.com/submit?url='.get_permalink().'&title='.get_the_title().'" tooltip="Reddit"]
													[xt_social_icon icon="digg" href="http://digg.com/submit?phase=2&url='.get_permalink().'&bodytext=&tags=&title='.get_the_title().'" tooltip="Digg"]
													[xt_social_icon icon="delicious" href="http://www.delicious.com/post?v=2&url='.get_permalink().'&notes=&tags=&title='.get_the_title().'" tooltip="Delicious"]
													[xt_social_icon icon="pinterest-1" href="http://pinterest.com/pin/create/button/?url='.urlencode(get_permalink()).'&media='.$pinImg.'&description='.urlencode(get_the_title()).'" tooltip="Pinterest"]
													[xt_social_icon icon="email" href="mailto:?subject='.get_the_title().'&amp;body='.get_permalink().'" tooltip="Email"]
													');
												?>
											</div>
											<div class="clear clearboth"></div>
										</div> <!-- .share-post -->
									<?php endif; ?>
									
									<?php if( !of_get_option('post_authorbox_disabled') ) : ?>
									<div class="author-meta">
										<div class="author-image">
											<?php echo get_avatar( get_the_author_meta('email') , '85' ); ?>
										</div> <!-- .author-image -->

										<div class="author-details">
											<h3><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a></h3>

											<p>
												<?php echo get_the_author_meta( 'description' ); ?> 
											</p>

										</div>

										<div class="clear clearboth"></div>

									</div> <!-- .author-meta -->
									<?php endif; ?>

									<?php if( !of_get_option('post_relatedposts_disabled') ) : ?>
									<div class="related-posts">
										<h3>Related posts</h3>
										<ol>
										<?php
											$orig_post = $post;
											global $post;
											$tags = wp_get_post_tags($post->ID);
											
											if ($tags) {
												$tag_ids = array();
												foreach($tags as $individual_tag) { $tag_ids[] = $individual_tag->term_id; }

												$args=array(
												'tag__in' => $tag_ids,
												'post__not_in' => array($post->ID),
												'posts_per_page'=> 4, // Number of related posts to display.
												'ignore_sticky_posts'=>1
												);
												
												$my_query = new wp_query( $args );

		
												while( $my_query->have_posts() ) {
													$my_query->the_post();
												?>
													<li class="related-item">
														<i class="font-icon-chevron-right"></i> <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
													</li>
												<?php }
											}
											else {
												?>
												<li>No related posts.</li>
												<?php
											}
											$post = $orig_post;
											wp_reset_query();
										?>
										</ol>
										<div class="clear clearboth xt-clear"></div>
									</div>
									<?php endif; ?>

									<?php comments_template( '', true ); ?>
								
								</article>
								
							<?php endwhile; // end of the loop. ?>

						</div><!-- #content -->

					</div><!-- .content content-left -->

					<?php get_sidebar('right')?>

					<div class="clear clearboth"></div><!-- .clearboth -->

				</div><!-- #main-content -->

			</div> <!-- #main .notebook -->
		</div> <!-- .container -->		
	</div><!-- #main-wrapper -->
	
<?php
	get_footer(); // get the footer.php file	
?>