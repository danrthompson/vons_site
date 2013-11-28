<?php

	add_filter('xt_apply_skin', 'xt_apply_custom_skin');

	function xt_apply_custom_skin($opts) {
		$previousSkin = of_get_option('default_skin');
		$actualSkin = $opts['default_skin'];

		if($previousSkin != $actualSkin) :
			$opts = array_merge($opts, xt_getSkin($actualSkin));
		endif;

		return $opts;
	}

	//add_action('optionsframework_after_validate', 'xt_print_opts_fields');
	function xt_print_opts_fields($opts) {

		$allowed = array('layout_mode', 'pattern', 'body_bg', 
			'base_color', 'skin_main_font', 'skin_sub_font',
			'header_bg', 'header_fixed', 'header_shadow', 'submenu_shadow',
			'header_callout_main', 'header_callout_sub', 'pattern_content', 'content_wrapper_bg', 'content_wrapper_shadow', 'content_wrapper_transparent',  
			"pattern_footer", 'footer_bg', 'footer_transparent', 'footer_wrapper_shadow', 'footer_hide_gototop', 'footer_font_gototop', 
			'down_footer_bg', 'down_footer_transparent', 'down_footer_text_font', 'down_footer_menu_font', 'down_footer_menu_hover',
			  );
		$opts = array_intersect_key($opts, array_flip($allowed));

		ob_start();
			$var = var_export($opts, true);
			$var = str_replace('),', '),<br />', $var);
			echo $var;
			//var_dump($opts);
			$r = ob_get_contents();
		ob_end_clean();
		add_settings_error(
		'xt_text_string',
		'xt_texterror',
		$r,
		'error'
		);
	}

	include( 'skins_fn.php' );