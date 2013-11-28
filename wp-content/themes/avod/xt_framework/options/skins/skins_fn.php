<?php

	if(function_exists('xt_getSkin') == false) :
		function xt_getSkin($name) {
			$skins = array();

			if($name == 'default') :

				return array ( 'layout_mode' => 'boxed', 'pattern' => 'default', 'body_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'base_color' => '', 'skin_main_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', ),
					'skin_sub_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', ),
					'header_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'header_shadow' => false, 'header_fixed' => '1', 'submenu_shadow' => false, 'header_callout_main' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'header_callout_sub' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'pattern_content' => 'default', 'content_wrapper_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'content_wrapper_transparent' => false, 'content_wrapper_shadow' => false, 'pattern_footer' => 'default', 'footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'footer_transparent' => false, 'footer_wrapper_shadow' => false, 'footer_hide_gototop' => false, 'footer_font_gototop' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'down_footer_transparent' => false, 'down_footer_text_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_hover' => '', 'footer_dark_gototop' => '0', );

			elseif($name == 'blue_dark') :

				return array ( 'layout_mode' => 'wide', 'pattern' => '5', 'body_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'base_color' => '#0081c6', 'skin_main_font' => array ( 'size' => '', 'face' => 'PT Serif, sans-serif', 'style' => '', 'color' => '', ),
					'skin_sub_font' => array ( 'size' => '', 'face' => 'Source Sans Pro, sans-serif', 'style' => '', 'color' => '', ),
					'header_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'header_shadow' => false, 'header_fixed' => '1', 'submenu_shadow' => false, 'header_callout_main' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '#ffffff', 'line_height' => '', ),
					'header_callout_sub' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '#ffffff', 'line_height' => '', ),
					'pattern_content' => '5', 'content_wrapper_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'content_wrapper_transparent' => false, 'content_wrapper_shadow' => '1', 'pattern_footer' => 'default', 'footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'footer_transparent' => false, 'footer_wrapper_shadow' => false, 'footer_hide_gototop' => false, 'footer_font_gototop' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'down_footer_transparent' => false, 'down_footer_text_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_hover' => '', 'footer_dark_gototop' => '0', );

			elseif($name == 'yellow_dark') :

				return array ( 'layout_mode' => 'boxed', 'pattern' => '14', 'body_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'base_color' => '#fac740', 'skin_main_font' => array ( 'size' => '', 'face' => 'Monda, sans-serif', 'style' => '', 'color' => '', ),
					'skin_sub_font' => array ( 'size' => '', 'face' => 'Noto Sans, sans-serif', 'style' => '', 'color' => '', ),
					'header_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'header_shadow' => false, 'header_fixed' => '1', 'submenu_shadow' => false, 'header_callout_main' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '#ffffff', 'line_height' => '', ),
					'header_callout_sub' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '#ffffff', 'line_height' => '', ),
					'pattern_content' => '5', 'content_wrapper_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'content_wrapper_transparent' => false, 'content_wrapper_shadow' => false, 'pattern_footer' => 'default', 'footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'footer_transparent' => false, 'footer_wrapper_shadow' => false, 'footer_hide_gototop' => '1', 'footer_font_gototop' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'down_footer_transparent' => false, 'down_footer_text_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_hover' => '', );

			elseif($name == 'green_wood') :

				return array ( 'layout_mode' => 'boxed', 'pattern' => '18', 'body_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'base_color' => '#03b984', 'skin_main_font' => array ( 'size' => '', 'face' => 'Bree Serif, sans-serif', 'style' => '', 'color' => '', ),
					'skin_sub_font' => array ( 'size' => '', 'face' => 'Muli, sans-serif', 'style' => '', 'color' => '', ),
					'header_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'header_shadow' => false, 'header_fixed' => '1', 'submenu_shadow' => false, 'header_callout_main' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'header_callout_sub' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'pattern_content' => 'default', 'content_wrapper_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'content_wrapper_transparent' => false, 'content_wrapper_shadow' => false, 'pattern_footer' => 'default', 'footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'footer_transparent' => false, 'footer_wrapper_shadow' => false, 'footer_hide_gototop' => false, 'footer_font_gototop' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '#101010', 'line_height' => '', ),
					'down_footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'down_footer_transparent' => false, 'down_footer_text_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_hover' => '',  'footer_dark_gototop' => '1', );
			
			elseif($name == 'red_transparent') :

				return array ( 'layout_mode' => 'wide', 'pattern' => '17', 'body_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'base_color' => '#e15a59', 'skin_main_font' => array ( 'size' => '', 'face' => 'Fjord One, sans-serif', 'style' => '', 'color' => '', ),
					'skin_sub_font' => array ( 'size' => '', 'face' => 'Open Sans, sans-serif', 'style' => '', 'color' => '', ),
					'header_callout_main' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'header_callout_sub' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'pattern_content' => '17', 'content_wrapper_transparent' => '1', 'content_wrapper_shadow' => '1', 'footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'footer_transparent' => '1', 'footer_wrapper_shadow' => false, 'footer_hide_gototop' => '1', 'footer_font_gototop' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_bg' => array ( 'color' => '#cccccc', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'down_footer_text_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '#555555', 'line_height' => '', ),
					'down_footer_menu_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_hover' => '#ffffff', );

			elseif($name == 'light_blue_wood') :

				return array ( 'layout_mode' => 'boxed', 'pattern' => '18', 'body_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'base_color' => '#93c7e7', 'skin_main_font' => array ( 'size' => '', 'face' => 'Arvo, sans-serif', 'style' => '', 'color' => '', ),
					'skin_sub_font' => array ( 'size' => '', 'face' => 'Oxygen, sans-serif', 'style' => '', 'color' => '', ),
					'header_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'header_shadow' => '1', 'header_fixed' => false, 'submenu_shadow' => false, 'header_callout_main' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'header_callout_sub' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'pattern_content' => '8', 'content_wrapper_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'content_wrapper_transparent' => false, 'content_wrapper_shadow' => '1', 'pattern_footer' => '8', 'footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'footer_transparent' => false, 'footer_wrapper_shadow' => '1', 'footer_hide_gototop' => false, 'footer_font_gototop' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '#333333', 'line_height' => '', ),
					'down_footer_bg' => array ( 'color' => '#93c7e7', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'down_footer_transparent' => false, 'down_footer_text_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '#ffffff', 'line_height' => '', ),
					'down_footer_menu_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '#ffffff', 'line_height' => '', ),
					'down_footer_menu_hover' => '#0075b5', 'footer_dark_gototop' => '1', );

			elseif($name == 'gray_scale_dark') :

				return array ( 'layout_mode' => 'boxed', 'pattern' => '15', 'body_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'base_color' => '#a0a0a0', 'skin_main_font' => array ( 'size' => '', 'face' => 'PT Sans Narrow, sans-serif', 'style' => '', 'color' => '', ),
					'skin_sub_font' => array ( 'size' => '', 'face' => 'Oxygen, sans-serif', 'style' => '', 'color' => '', ),
					'header_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'header_shadow' => false, 'header_fixed' => '1', 'submenu_shadow' => false, 'header_callout_main' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'header_callout_sub' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'pattern_content' => '1', 'content_wrapper_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'content_wrapper_transparent' => false, 'content_wrapper_shadow' => '1', 'pattern_footer' => 'default', 'footer_bg' => array ( 'color' => '#ffffff', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'footer_transparent' => false, 'footer_wrapper_shadow' => '1', 'footer_hide_gototop' => false, 'footer_font_gototop' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_bg' => array ( 'color' => '#222222', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'down_footer_transparent' => false, 'down_footer_text_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_hover' => '', );
			
			elseif($name == 'orange_light') :

				return array ( 'layout_mode' => 'wide', 'pattern' => '13', 'body_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'base_color' => '#e67e2a', 'skin_main_font' => array ( 'size' => '', 'face' => 'Crete Round, sans-serif', 'style' => '', 'color' => '', ),
					'skin_sub_font' => array ( 'size' => '', 'face' => 'Ubuntu, sans-serif', 'style' => '', 'color' => '', ),
					'header_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'header_shadow' => false, 'header_fixed' => '1', 'submenu_shadow' => false, 'header_callout_main' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'header_callout_sub' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'pattern_content' => '8', 'content_wrapper_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'content_wrapper_transparent' => false, 'content_wrapper_shadow' => false, 'pattern_footer' => '8', 'footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'footer_transparent' => false, 'footer_wrapper_shadow' => false, 'footer_hide_gototop' => '1', 'footer_font_gototop' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'down_footer_transparent' => false, 'down_footer_text_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_hover' => '', );
			
			elseif($name == 'brown_wood') :

				return array ( 'layout_mode' => 'boxed', 'pattern' => '18', 'body_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'base_color' => '#734724', 'skin_main_font' => array ( 'size' => '', 'face' => 'PT Sans, sans-serif', 'style' => '', 'color' => '', ),
					'skin_sub_font' => array ( 'size' => '', 'face' => 'Open Sans, sans-serif', 'style' => '', 'color' => '', ),
					'header_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'header_shadow' => false, 'header_fixed' => '1', 'submenu_shadow' => false, 'header_callout_main' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'header_callout_sub' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'pattern_content' => 'default', 'content_wrapper_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'content_wrapper_transparent' => false, 'content_wrapper_shadow' => false, 'pattern_footer' => 'default', 'footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'footer_transparent' => false, 'footer_wrapper_shadow' => false, 'footer_hide_gototop' => false, 'footer_font_gototop' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '#000000', 'line_height' => '', ),
					'down_footer_bg' => array ( 'color' => '#734724', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'down_footer_transparent' => false, 'down_footer_text_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '#ffffff', 'line_height' => '', ),
					'down_footer_menu_hover' => '#281600', 'footer_dark_gototop' => '1', );
			
			elseif($name == 'pink_light') :

				return array ( 'layout_mode' => 'boxed', 'pattern' => '17', 'body_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'base_color' => '#e46fac', 'skin_main_font' => array ( 'size' => '', 'face' => 'Oxygen, sans-serif', 'style' => '', 'color' => '', ),
					'skin_sub_font' => array ( 'size' => '', 'face' => 'Exo, sans-serif', 'style' => '', 'color' => '', ),
					'header_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'header_shadow' => '1', 'header_fixed' => '1', 'submenu_shadow' => false, 'header_callout_main' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'header_callout_sub' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'pattern_content' => 'default', 'content_wrapper_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'content_wrapper_transparent' => false, 'content_wrapper_shadow' => '1', 'pattern_footer' => 'default', 'footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'footer_transparent' => false, 'footer_wrapper_shadow' => '1', 'footer_hide_gototop' => '1', 'footer_font_gototop' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'down_footer_transparent' => false, 'down_footer_text_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_hover' => '', 'footer_dark_gototop' => '1', );

			elseif($name == 'navy_light') :

				return array ( 'layout_mode' => 'wide', 'pattern' => '14', 'body_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'base_color' => '#248f79', 'skin_main_font' => array ( 'size' => '', 'face' => 'Droid Serif, sans-serif', 'style' => '', 'color' => '', ),
					'skin_sub_font' => array ( 'size' => '', 'face' => 'Lato, sans-serif', 'style' => '', 'color' => '', ),
					'header_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'header_shadow' => false, 'header_fixed' => '1', 'submenu_shadow' => false, 'header_callout_main' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'header_callout_sub' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'pattern_content' => 'default', 'content_wrapper_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'content_wrapper_transparent' => false, 'content_wrapper_shadow' => false, 'pattern_footer' => 'default', 'footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'footer_transparent' => false, 'footer_wrapper_shadow' => false, 'footer_hide_gototop' => false, 'footer_font_gototop' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_bg' => array ( 'color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll', ),
					'down_footer_transparent' => false, 'down_footer_text_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_font' => array ( 'size' => '', 'face' => '', 'style' => '', 'color' => '', 'line_height' => '', ),
					'down_footer_menu_hover' => '', 'footer_dark_gototop' => '0', );

			endif;

			return false;
		}
	endif;