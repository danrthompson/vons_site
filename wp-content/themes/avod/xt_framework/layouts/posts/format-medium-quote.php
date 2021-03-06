	<div class="side-post">

		<div class="post-format-icon-large">
			<span><i class="blog-icon-quote"></i></span>
		</div>

	</div>

	<div class="post-details post-details-side">

		<div class="post-infos">

			<div class="post-quote">
				<?php the_content(); ?>
			</div>

			<?php
				$authorName = get_post_meta(get_the_ID(), '_format_quote_source_name', true);
				$authorURL = get_post_meta(get_the_ID(), '_format_quote_source_url', true);
			?>
			<?php if($authorName != '') : ?>

				<div class="post-quote-author">
					<?php if($authorURL != '') : ?>
						<a href="<?php echo $authorURL; ?>" target="_blank"><?php echo $authorName; ?></a>
					<?php else : ?>
						<?php echo $authorName; ?>
					<?php endif; ?>
				</div>

			<?php endif; ?>

			<div class="read-more">
				<a href="<?php the_permalink(); ?>"><?php _e("Read More...", 'avod'); ?></a>
			</div>

		</div>

		<div class="clear clearboth"></div>
	</div>

	<div class="clear clearboth"></div>