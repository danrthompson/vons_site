
	<?php if( has_post_thumbnail() ) : ?>	
	<div class="side-post">
		<div class="thumbnail">

			<?php
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
			?>
			<a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('blog-size', array('title' => get_the_title(), 'class' => '') ); ?>
				<div class="post-thumb-hover">
					<span><i class="blog-icon-camera"></i></span>
				</div>
			</a>
		</div>

		<div class="post-format-icon">
			<span><i class="blog-icon-camera"></i></span>
		</div>

	</div> <!-- .side-post -->
	<?php endif; ?>

	<div class="post-details<?php if( has_post_thumbnail() ) echo ' post-details-side'; ?>">

		<div class="post-infos">

			<div class="post-title">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</div>

			<div class="post-excerpt">
				<?php the_excerpt(); ?>
			</div>

			<div class="read-more">
				<a href="<?php the_permalink(); ?>"><?php _e("Read More...", 'avod'); ?></a>
			</div>

		</div>

		<div class="clear clearboth"></div>
	</div>

	<div class="clear clearboth"></div>

	<div class="post-meta">
		<span class="date"><?php echo get_the_date(); ?></span>
		<span class="author"><?php _e("by", 'avod'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a></span>
		<span class="cats"><?php _e("In", 'avod'); ?> <?php the_category(', '); ?></span>
		<span class="comments"><a href="<?php comments_link(); ?>"><?php comments_number( __('No Comments', 'avod'), __('1 Comment', 'avod'), __('% Comments', 'avod') ); ?></a></span>
	</div>