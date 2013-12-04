
	<?php if( has_post_thumbnail() ) : ?>	
		<div class="thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('blog-size', array('title' => get_the_title(), 'class' => '') ); ?>
				<div class="post-thumb-hover">
					<span><i class="blog-icon-doc-text"></i></span>
				</div>
			</a>
		</div>
	<?php endif; ?>

	<div class="post-details">

<!-- 		<div class="post-format-icon">
			<span><i class="blog-icon-doc-text"></i></span>
		</div> -->

		<div class="post-infos">

			<div class="post-title">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</div>

			<div class="post-meta">
<!-- 				<span class="date"><?php echo get_the_date(); ?></span>
				<span class="author"><?php _e("by", 'avod'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a></span> -->
				<span class="cats"><?php _e("In", 'avod'); ?> <?php the_category(', '); ?></span>
<!-- 				<span class="comments"><a href="<?php comments_link(); ?>"><?php comments_number( __('No Comments', 'avod'), __('1 Comment', 'avod'), __('% Comments', 'avod') ); ?></a></span> -->
			</div>



			<div class="post-excerpt">
				<?php the_excerpt(); ?>
			</div>

			<div class="read-more">
				<a href="<?php the_permalink(); ?>"><?php _e("Read More...", 'avod'); ?></a>
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
					[xt_social_icon icon="email" href="mailto:?subject='.get_the_title().'&amp;body='.get_permalink().'" tooltip="Email"]
					');
				?>
			</div>

		</div>

		<div class="clear clearboth"></div>
	</div>