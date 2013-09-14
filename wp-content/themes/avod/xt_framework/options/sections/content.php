<?php

	/* Content
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Callouts/Heading Titles', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Header Callout - Main',
		'desc' => 'Configure the fonts of main page header callout (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'header_callout_main',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array( 'name' => 'Header Callout - Sub',
		'desc' => 'Configure the fonts of sub page header callout (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'header_callout_sub',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Header Block', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Header Block Font',
		'desc' => 'Configure the fonts of header block text (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'header_block_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
			'name' => __('Disable Text Shadow?', 'options_framework_theme'),
			'desc' => __('Check it turn off header block text shadow.', 'options_framework_theme'),
			'id' => 'header_block_txtshadow',
			'std' => '0',
			'type' => 'checkbox');

		$options[] = array(
			'name' => __('Disable Shadow?', 'options_framework_theme'),
			'desc' => __('Check it turn off header block drop shadow.', 'options_framework_theme'),
			'id' => 'header_block_shadow',
			'std' => '0',
			'type' => 'checkbox');

		$options[] = array(
			'name' =>  __('Default Block Background', 'options_framework_theme'),
			'desc' => __('Define here default background to avoid a lot of uploads.', 'options_framework_theme'),
			'id' => 'header_block_bg',
			'std' => $content_bg,
			'type' => 'background' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Content Wrapper', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
			'name' => "Patterns",
			'desc' => "Select a built in pattern to be aplied at background - it is replaced if Content Wrapper is defined!",
			'id' => "pattern_content",
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
			'name' => __('Content Wrapper Background', 'options_framework_theme'),
			'desc' => __('Upload optional background color or image to content background background.', 'options_framework_theme'),
			'id' => 'content_wrapper_bg',
			'std' => $body_bg,
			'type' => 'background' );

		$options[] = array(
			'name' => __('Transparent Background?', 'options_framework_theme'),
			'desc' => __('Check it turn off content wrapper bg.', 'options_framework_theme'),
			'id' => 'content_wrapper_transparent',
			'std' => '0',
			'type' => 'checkbox');

		$options[] = array(
			'name' => __('Disable Shadow?', 'options_framework_theme'),
			'desc' => __('Check it turn off content wrapper drop shadow.', 'options_framework_theme'),
			'id' => 'content_wrapper_shadow',
			'std' => '0',
			'type' => 'checkbox');

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Content', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' =>  __('Content Background', 'options_framework_theme'),
		'desc' => __('Define here the content background', 'options_framework_theme'),
		'id' => 'content_bg',
		'std' => $content_bg,
		'type' => 'background' );

		$options[] = array(
		'name' => __('Content Border', 'options_framework_theme'),
		'desc' => __('Select the color to content border.', 'options_framework_theme'),
		'id' => 'content_border',
		'std' => '', // use something like #2accee
		'type' => 'color' );