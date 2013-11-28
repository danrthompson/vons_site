<?php

	/* Skins
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Ready Skins', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
			'name' => "Default Skins",
			'desc' => "Select a default skin to theme",
			'id' => "default_skin",
			'std' => "default",
			'type' => "images",
			'options' => array(
				'default' => $imagepath . 'default.png',
				'blue_dark' => $imagepath . 'blue_dark.png',
				'green_wood' => $imagepath . 'green_wood.png',
				'yellow_dark' => $imagepath . 'yellow_dark.png',
				'red_transparent' => $imagepath . 'red_transparent.png',
				'light_blue_wood' => $imagepath . 'light_blue_wood.png',
				'gray_scale_dark' => $imagepath . 'gray_scale_dark.png',
				'orange_light' => $imagepath . 'orange_light.png',
				'brown_wood' => $imagepath . 'brown_wood.png',
				'pink_light' => $imagepath . 'pink_light.png',
				'navy_light' => $imagepath . 'navy_light.png',
				)
		);

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Fast Custom Skin', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Custom Base Color', 'options_framework_theme'),
		'desc' => __('Select the base color to build a custom skin.', 'options_framework_theme'),
		'id' => 'base_color',
		'std' => '', // use something like #2accee
		'type' => 'color' );

		$options[] = array( 'name' => 'Main Serif Font',
		'desc' => 'Configure the main serif font of theme (font family only!)<br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'skin_main_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts,
			'disable-line-height' => true,
			'disable-styles' => true,
			'disable-color' => true,
			'disable-size' => true,
			 )
		);

		$options[] = array( 'name' => 'Secondary Sans Serif Font',
		'desc' => 'Configure the secondary sans serif font of theme (font family only!)<br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'skin_sub_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts,
			'disable-line-height' => true,
			'disable-styles' => true,
			'disable-color' => true,
			'disable-size' => true,
			 )
		);