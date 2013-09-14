<?php

	/* Shortcodes
	========================*/

	/*
	customizationOpts($options, 'sc_accordion', 'Accordion/Toggle', array(
			'border' => true,
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));
	*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Accordion/Toggle', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_accordion', 'Accordion/Toggle', array(
			'border' => true,
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Button', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Button Font',
		'desc' => 'Configure the font of button (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'sc_button_font',
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

		customizationOpts($options, 'sc_button', 'Button', array(
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Carousel', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_carousel', 'Carousel', array(
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		customizationOpts($options, 'sc_carousel_timebar', 'Carousel Timebar', array(
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Divider', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_divider', 'Divider', array(
			'border' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Dropcap', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_dropcap', 'Accordion/Toggle', array(
			'border' => true,
			'color_a' => true,
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Icon Box', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_iconbox_title', 'Icon Box Title and Icon', array(
			'font' => true,
			'color_a' => true,
		));

		customizationOpts($options, 'sc_iconbox_text', 'Icon Box Text', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Block Icons', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_blockicon', 'Block Icon', array(
			'border' => true,
			'border_hover' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Latest Post Grid', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_latest_post', 'Latest Post Grid Title', array(
			'font' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'sc_latest_post_meta', 'Latest Post Grid Meta', array(
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Latest Post List', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_lastest_post_list', 'Latest Post List Title', array(
			'font' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'sc_lastest_post_list_icon', 'Latest Post List Icon', array(
			'bg' => true,
			'color_a' => true,
		));

		customizationOpts($options, 'sc_latest_post_list_meta', 'Latest Post List Meta', array(
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'sc_lastest_post_list_rm', 'Latest Post List Read More', array(
			'font' => true,
			'color_a_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Member Block', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_member_name', 'Member Name', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_member_role', 'Member Role', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_member_content', 'Member Content', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_member_icon', 'Member Social Icons', array(
			'bg' => true,
			'bg_hover' => true,
			'color_a' => true,
			'color_a_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Skill Bars', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_skill_name', 'Skill Heading', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_skill_bar', 'Skill Bar', array(
			'bg' => true,
		));

		customizationOpts($options, 'sc_skill_bar_inner', 'Skill Bar Inner', array(
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Message Boxes', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Messabe Box Font',
		'desc' => 'Configure the font of message box content (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'sc_msgbox_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts,
			'disable-color' => true,
			 )
		);

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Pricing Table', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_ptable', 'Pricing Table', array(
			'bg' => true,
			'border' => true,
		));

		customizationOpts($options, 'sc_ptable_plan', 'Pricing Table Plan Name', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_ptable_price', 'Pricing Table Price', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_ptable_freq', 'Pricing Table Plan Frequency', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_ptable_items', 'Pricing Table Items', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_ptable_btn', 'Pricing Table Button', array(
			'font' => true,
			'border' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true
		));

		customizationOpts($options, 'sc_ptable_featured', 'Pricing Table Featured Section', array(
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_ptable_top', 'Pricing Table Top Area', array(
			'bg' => true,
			'border' => true,
		));

		customizationOpts($options, 'sc_ptable_middle', 'Pricing Table Middle Area', array(
			'bg' => true,
			'border' => true,
		));

		customizationOpts($options, 'sc_ptable_bottom', 'Pricing Table Bottom Area', array(
			'bg' => true,
			'border' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Social Media', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_smedia', 'Social Icons', array(
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Tables', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_table', 'Table', array(
			'border' => true,
		));

		customizationOpts($options, 'sc_table_head', 'Table Head', array(
			'font' => true,
			'bg' => true,
			'border' => true,
		));

		customizationOpts($options, 'sc_table_rows', 'Table Rows', array(
			'font' => true,
			'bg' => true,
			'border' => true,
		));

		customizationOpts($options, 'sc_table_rowsh', 'Table Highlight Row', array(
			'bg' => true,
		));

		customizationOpts($options, 'sc_table_foot', 'Table Foot', array(
			'font' => true,
			'bg' => true,
			'border' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Framed Tabs', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_tabsf', 'Framed Tabs', array(
			'border' => true,
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		customizationOpts($options, 'sc_tabsf_content', 'Framed Tabs Content', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Button Tabs', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_tabsb', 'Button Tabs', array(
			'border' => true,
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		customizationOpts($options, 'sc_tabsb_content', 'Button Tabs Content', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Vertical Tabs', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_tabsv', 'Vertical Tabs', array(
			'border' => true,
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		customizationOpts($options, 'sc_tabsv_content', 'Vertical Tabs Content', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Teasers', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_teasersimple', 'Teaser', array(
			'border' => true,
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_teasersimple_h', 'Teaser Headings', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Callouts', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_callout', 'Callout', array(
			'border' => true,
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_callout_h', 'Callout Headings', array(
			'font' => true,
		));

		$options[] = array(
		'name' => __('Box Styled', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_boxstyled', 'Box Styled', array(
			'color_a' => true,
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Testimonial Bubble', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_testimonialb', 'Testimonial Bubble', array(
			'font' => true,
			'bg' => true,
			'border' => true,
		));

		customizationOpts($options, 'sc_testimonialb_author', 'Testimonial Bubble Author', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Testimonial Block', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_testimonialblock', 'Testimonial Block', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_testimonialblock_author', 'Testimonial Block Author', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Blockquote', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_blockquote', 'Blockquote', array(
			'font' => true,
			//'border' => true,
		));

		customizationOpts($options, 'sc_blockquote_author', 'Blockquote Author', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Pulquote', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_pullquote', 'Pullquote', array(
			'font' => true,
			'border' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Header Image', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Header Image Font',
		'desc' => 'Configure the font of Header Image (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'sc_headerimg_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts,
			'disable-line-height' => true,
			'disable-size' => true,
			'disable-styles' => true,
			 )
		);

		customizationOpts($options, 'sc_headerimg', 'Header Image', array(
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Code', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_code', 'Code', array(
			'bg' => true,
			'color_a' => true,
			'border' => true,
		));