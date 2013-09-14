<?php

	/* Project
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Single Project', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Thumbnail Hover Background', 'options_framework_theme'),
		'desc' => __('Define the background color of thumbnail when hovered.', 'options_framework_theme'),
		'id' => 'single_project_item_bg',
		'std' => '', 
		'type' => 'color' );

		$options[] = array( 'name' => 'Pagination Font',
		'desc' => 'Configure the font of portfolio filters (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'single_project_pagination_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Pagination Background Normal', 'options_framework_theme'),
		'desc' => __('Define the background color of filter at normal state.', 'options_framework_theme'),
		'id' => 'single_project_pagination_bg',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Pagination Background Hover', 'options_framework_theme'),
		'desc' => __('Define the background color of filter at hover state.', 'options_framework_theme'),
		'id' => 'single_project_pagination_bg_hover',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Pagination Text Hover', 'options_framework_theme'),
		'desc' => __('Define the text color of filter at hover state.', 'options_framework_theme'),
		'id' => 'single_project_pagination_text_hover',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Related Projects', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Related Heading Font',
		'desc' => 'Configure the font of related projects section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'single_project_related_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);
