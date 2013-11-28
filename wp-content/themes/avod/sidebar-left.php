<?php
/**
 * XT Sidebar to be placed at Left side of Content
 */
?>

	<?php if ( is_active_sidebar( 'xt-sidebar' ) ) : ?>
		<div class="widget-area sidebar sidebar-left" role="complementary">
			<ul>
				<?php dynamic_sidebar( 'xt-sidebar' ); ?>
			</ul>
		</div><!-- #secondary -->
	<?php endif; ?>