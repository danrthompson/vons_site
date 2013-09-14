<?php

	function xt_bool($s) {
		if($s == 'yes')
			$s = 'true';
		else
			$s = 'false';

		return $s;
	}

	/*-----------------------------------------------------------------------------------*/
	/* WP Auto Formatting Fix w/Raw shortocde
	/*-----------------------------------------------------------------------------------*/	

	if(!function_exists("xt_wp_empty_paragraph_fix")) :

		add_filter('the_content', 'xt_wp_empty_paragraph_fix');

		function xt_wp_empty_paragraph_fix($content)
		{   
		    $array = array (
		        '<p>[' => '[', 
		        ']</p>' => ']', 
		        ']<br />' => ']'
		    );

		    $content = strtr($content, $array);

			return $content;
		}

	endif;

	/*-----------------------------------------------------------------------------------*/
	/* [xt_slider]
	/*-----------------------------------------------------------------------------------*/

	function xt_slider($atts) {
		extract(shortcode_atts(array(
			'id' => '',
		), $atts));

		if($id == '') return '';

		$query = new WP_Query( array('name' => $id, 'post_type' => 'xt_sliders') );

		if($query->have_posts()) { $query->the_post();

			$type = get_post_meta(get_the_ID(), 'slider-type', true);

			if($type == '')
				return '';

			if($type == 'nivo')
				return xt_slider_nivo(get_the_ID());

			if($type == 'camera')
				return xt_slider_camera(get_the_ID());

			if($type == 'kenburnpanel')
				return xt_slider_kenburnpanel(get_the_ID());

			if($type == 'ios')
				return xt_slider_ios(get_the_ID());

			if($type == 'dream')
				return xt_slider_dream(get_the_ID());

			if($type == 'scarousel')
				return xt_slider_scarousel(get_the_ID());

			if($type == 'flick')
				return xt_slider_flick(get_the_ID());

			if($type == 'jfancytile')
				return xt_slider_jfancytile(get_the_ID());

			if($type == 'revolution')
				return xt_slider_revolution(get_the_ID());

			if($type == 'piecemaker')

				return xt_slider_piecemaker(get_the_ID());

			if($type == 'mediaslider')
				return xt_slider_mediaslider(get_the_ID());

			if($type == 'elastislide')
				return xt_slider_elastislide(get_the_ID());
			
			if($type == 'flexslider')
				return xt_slider_flexslider(get_the_ID());			

		} 
	}
	add_shortcode('xt_slider', 'xt_slider');