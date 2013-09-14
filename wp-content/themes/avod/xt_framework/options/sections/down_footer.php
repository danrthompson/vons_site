<?php

	/* Down Footer
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Down Footer', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' =>  __('Down Footer Background', 'options_framework_theme'),
		'desc' => __('Define here the down footer background', 'options_framework_theme'),
		'id' => 'down_footer_bg',
		'std' => $content_bg,
		'type' => 'background' );

		$options[] = array(
			'name' => __('Transparent Background?', 'options_framework_theme'),
			'desc' => __('Check it turn off down footer bg.', 'options_framework_theme'),
			'id' => 'down_footer_transparent',
			'std' => '0',
			'type' => 'checkbox');

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Footer Copyright Text', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Copyright Text', 'options_framework_theme'),
		'desc' => __('Define copyright text that will appear at down footer.', 'options_framework_theme'),
		'id' => 'down_footer_text',
		'std' => 'Your copyright text goes here.',
		'type' => 'text' );

		$options[] = array( 'name' => 'Copyright Text Font',
		'desc' => 'Configure the fonts of copyright text (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'down_footer_text_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		/***********************************/
		/***********************************/
		/*$options[] = array(
		'name' => __('Social Icons', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Social Icon Text Color', 'options_framework_theme'),
		'desc' => __('Select the color to be used in social_icon text.', 'options_framework_theme'),
		'id' => 'footer_widget_social_icon_color',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Social Icon Background Color', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in social_icon.', 'options_framework_theme'),
		'id' => 'footer_widget_social_icon_bg',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Social Icon Text Color Hover', 'options_framework_theme'),
		'desc' => __('Select the color to be used in social_icon text at hover.', 'options_framework_theme'),
		'id' => 'footer_widget_social_icon_color_hover',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Social Icon Background Color Hover', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in social_icon at hover.', 'options_framework_theme'),
		'id' => 'footer_widget_social_icon_bg_hover',
		'std' => '',
		'type' => 'color' );*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Menu', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Menu Font',
		'desc' => 'Configure the fonts of down footer menu (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'down_footer_menu_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Menu Link Hover', 'options_framework_theme'),
		'desc' => __('Select the color to links in menu when hovered.', 'options_framework_theme'),
		'id' => 'down_footer_menu_hover',
		'std' => '',
		'type' => 'color' );