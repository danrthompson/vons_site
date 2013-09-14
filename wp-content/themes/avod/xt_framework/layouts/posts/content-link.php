
	<div class="post-details">

		<div class="post-format-icon">
			<span><i class="blog-icon-link"></i></span>
		</div>

		<div class="post-infos">

			<div class="post-title post-title-link">
				<h1><a href="<?php echo get_post_meta(get_the_ID(), '_format_link_url', true); ?>" target="_blank"><?php the_title(); ?></a></h1>
			</div>

			<div class="post-meta">
				<span class="date"><?php echo get_the_date(); ?></span>
				<span class="author"><?php _e("by", 'avod'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a></span>
				<span class="cats"><?php _e("In", 'avod'); ?> <?php the_category(', '); ?></span>
				<span class="comments"><a href="<?php comments_link(); ?>"><?php comments_number( __('No Comments', 'avod'), __('1 Comment', 'avod'), __('% Comments', 'avod') ); ?></a></span>
			</div>

			<div class="post-content">
				<div class="the-content">
					<?php the_content(); ?>
				</div>
			</div>

		</div>

		<div class="clear clearboth"></div>
	</div>