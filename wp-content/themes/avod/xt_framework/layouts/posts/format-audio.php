
	<div class="post-audio">
		<?php
		
		$audioEmbed = get_post_meta(get_the_ID(), '_format_audio_embed', true);
			
		if($audioEmbed != '') :
		?>
		<div class="audio-frame">	
				<?php echo $audioEmbed; ?>
		</div>
		<?php endif; ?>

	</div>

	<div class="post-details">

		<div class="post-format-icon">
			<span><i class="blog-icon-note-beamed"></i></span>
		</div>

		<div class="post-infos">

			<div class="post-title">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</div>

			<div class="post-meta">
				<span class="date"><?php echo get_the_date(); ?></span>
				<span class="author"><?php _e("by", 'avod'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a></span>
				<span class="cats"><?php _e("In", 'avod'); ?> <?php the_category(', '); ?></span>
				<span class="comments"><a href="<?php comments_link(); ?>"><?php comments_number( __('No Comments', 'avod'), __('1 Comment', 'avod'), __('% Comments', 'avod') ); ?></a></span>
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