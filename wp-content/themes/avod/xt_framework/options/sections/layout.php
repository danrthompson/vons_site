<?php

	/* Layout
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Configurations', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
			'name' => __('Layout Mode', 'options_framework_theme'),
			'desc' => __('Select the layout mode to be used in the website', 'options_framework_theme'),
			'id' => 'layout_mode',
			'std' => 'boxed', // change here to wide
			'type' => 'select',
			'class' => 'mini', //mini, tiny, small
			'options' => $layout_opts);

		$options[] = array(
			'name' => "Patterns",
			'desc' => "Select a built in pattern to be aplied at background - it is replaced if Body Background is defined!",
			'id' => "pattern",
			'std' => "default",
			'type' => "images",
			'options' => array(
				'default' => $patternpath . 'default.png',
				'1' => $patternpath . '1.png',
				'2' => $patternpath . '2.png',
				'3' => $patternpath . '3.png',
				'4' => $patternpath . '4.png',
				'5' => $patternpath . '5.png',
				'6' => $patternpath . '6.png',
				'7' => $patternpath . '7.png',
				'8' => $patternpath . '8.png',
				'9' => $patternpath . '9.png',
				'10' => $patternpath . '10.png',
				'11' => $patternpath . '11.png',
				'12' => $patternpath . '12.png',
				'13' => $patternpath . '13.png',
				'14' => $patternpath . '14.png',
				'15' => $patternpath . '15.png',
				'16' => $patternpath . '16.png',
				'17' => $patternpath . '17.png',
				'18' => $patternpath . '18.png',
				)
		);

		$options[] = array(
			'name' => __('Body Background', 'options_framework_theme'),
			'desc' => __('Upload optional background color or image to page background.', 'options_framework_theme'),
			'id' => 'body_bg',
			'std' => $body_bg,
			'type' => 'background' );

		$options[] = array(
			'name' => __('Enable background cover?', 'options_framework_theme'),
			'desc' => __('Check it to make background cover all the background of page.', 'options_framework_theme'),
			'id' => 'enable_cover',
			'std' => '0',
			'type' => 'checkbox');
	 
		$options[] = array(
			'name' => __('Disable Responsive Layout?', 'options_framework_theme'),
			'desc' => __('Check this to disable responsiveness', 'options_framework_theme'),
			'id' => 'disable_responsive',
			'std' => '0',
			'type' => 'checkbox');

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('WPML Integration', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
			'name' => __('Enable Footer Flags at Footer?', 'options_framework_theme'),
			'desc' => __('Only works if WPML plugin is installed.', 'options_framework_theme'),
			'id' => 'wpml_footer',
			'std' => '0',
			'type' => 'checkbox');

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Titles and Headings', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
			'name' => __('Single Post Title', 'options_framework_theme'),
			'desc' => __('Type the single post title that will be displayed when users view posts.', 'options_framework_theme'),
			'id' => 'title_post',
			'std' => 'Our Blog', // use something like #2accee
			'type' => 'text' );

		$options[] = array(
		'name' => __('(Optional) Single Post Callout - Main', 'options_framework_theme'),
		'desc' => __('Define the main callout text to single posts.', 'options_framework_theme'),
		'id' => 'callout_single_main',
		'std' => '', // use something like #2accee
		'type' => 'text' );

		$options[] = array(
		'name' => __('(Optional) Single Post Callout - Sub', 'options_framework_theme'),
		'desc' => __('Define the sub callout text to single posts.', 'options_framework_theme'),
		'id' => 'callout_single_sub',
		'std' => '', // use something like #2accee
		'type' => 'text' );

		$options[] = array(
		'name' => __('(Optional) Single Project Callout - Main', 'options_framework_theme'),
		'desc' => __('Define the main callout text to single projects.', 'options_framework_theme'),
		'id' => 'callout_project_main',
		'std' => '', // use something like #2accee
		'type' => 'text' );

		$options[] = array(
		'name' => __('(Optional) Single Project Callout - Sub', 'options_framework_theme'),
		'desc' => __('Define the sub callout text to single projects.', 'options_framework_theme'),
		'id' => 'callout_project_sub',
		'std' => '', // use something like #2accee
		'type' => 'text' );