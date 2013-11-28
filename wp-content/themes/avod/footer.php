	</div> <!-- #main-outerglow -->

	<?php if(of_get_option('footer_hide_gototop') == false) : ?>
		<div id="back-top-wrapper" class="<?php if(of_get_option('pattern') == of_get_option('pattern_content') && of_get_option('pattern') != 'default') echo ' same-pattern'; ?><?php if(of_get_option('footer_dark_gototop')) echo ' dark-version'; ?>">
			<a href="#"><?php _e("Go to the Top", "avod"); ?></a>
		</div> <!-- #back-top-wrapper -->
	<?php endif; ?>

	<div id="footer-outerglow"<?php if(of_get_option('footer_hide_gototop')) echo ' class="no-shadow"'; ?>>
		<div id="footer-wrapper">
		
			<footer  class="container">
					
				<div id="footer-col-1">
					<ul>
						<?php dynamic_sidebar("footer-area-1"); ?>
					</ul>
				</div>
					
				<div id="footer-col-2">
					<ul>
						<?php dynamic_sidebar("footer-area-2"); ?>
					</ul>
				</div>
					
				<div id="footer-col-3">
					<ul>
						<?php dynamic_sidebar("footer-area-3"); ?>
					</ul>
				</div>
					
				<div id="footer-col-4">
					<ul>
						<?php dynamic_sidebar("footer-area-4"); ?>
					</ul>
				</div>

				<div class="clear clearboth"></div>
								
			</footer> <!-- footer -->
				
		</div> <!--#footer-wrapper -->
		
		<div id="down-footer-wrapper">
			<div id="down-footer" class="container">

				<div id="copyright-area">
					<?php if( of_get_option('down_footer_text') != '') : ?>
					<p>
						<?php echo of_get_option('down_footer_text'); ?>
					</p>
					<?php endif; ?>
					<?php if( of_get_option('wpml_footer') && function_exists('language_selector_flags') == true ) : ?>
						<div id="lang-logo-selector">
							<span id="lang-logo-selector-inner">
								<?php language_selector_flags(); ?>
							</span>
						</div>
					<?php endif; ?>
				</div> <!--#copy-1-->
				
				<div id="menu-footer">
					<?php 
						if(has_nav_menu('main_menu')) : 

							wp_nav_menu( array( 'theme_location' => 'footer_menu', 
								'container' => '', 'items_wrap' => '<ul>%3$s</ul>' ) );

						endif; ?>		
				</div> <!-- #menu footer -->

				<div class="clear clearboth"></div>
			</div><!-- #down-footer -->
		</div><!-- #down-footer-wrapper -->
	</div> <!-- #footer-outerglow -->

</div><!-- #container-full (open at header.php) -->

	<?php if( of_get_option('gcode') != '' ) : ?>

	<!-- Optional Analytics
	================================================== -->
	
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '<?php echo of_get_option('gcode'); ?>']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<?php endif; ?>

	<?php wp_footer(); ?>
	</body>
</html>