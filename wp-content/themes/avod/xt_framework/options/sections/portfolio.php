<?php

	/* Portfolio
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Filters', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Filter Font',
		'desc' => 'Configure the font of portfolio filters (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'portfolio_filter_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Filter Background Normal', 'options_framework_theme'),
		'desc' => __('Define the background color of filter at normal state.', 'options_framework_theme'),
		'id' => 'portfolio_filter_bg',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Filter Background Hover', 'options_framework_theme'),
		'desc' => __('Define the background color of filter at hover state.', 'options_framework_theme'),
		'id' => 'portfolio_filter_bg_hover',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Filter Text Hover', 'options_framework_theme'),
		'desc' => __('Define the text color of filter at hover state.', 'options_framework_theme'),
		'id' => 'portfolio_filter_text_hover',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Portfolio Items', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Item Border Color', 'options_framework_theme'),
		'desc' => __('Define the border color of portfolio item.', 'options_framework_theme'),
		'id' => 'portfolio_item_border',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Thumbnail Hover Background', 'options_framework_theme'),
		'desc' => __('Define the background color of thumbnail when hovered.', 'options_framework_theme'),
		'id' => 'portfolio_item_bg',
		'std' => '', 
		'type' => 'color' );

		$options[] = array( 'name' => 'Project Title Font',
		'desc' => 'Configure the font of portfolio item title (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'portfolio_item_title',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array( 'name' => 'Project Excerpt Font',
		'desc' => 'Configure the font of portfolio item excerpt (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'portfolio_item_excerpt',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);