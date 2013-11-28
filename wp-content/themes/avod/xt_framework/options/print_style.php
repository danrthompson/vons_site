<?php
/*
 *	Print style at wp_head hook with all custom changes made! *
*/

require_once('helpers.php');


add_action('wp_head', 'xt_print_custom_styles');
function xt_print_custom_styles() {
	?>
	<style type="text/css">

	/* General */

		/* Logo CSS rule */
		#logo-retina {
			display: none;
		}

		<?php if(of_get_option('logo') != '') : ?>
			#logo {
				display: block;
			}
		<?php endif; ?>

		<?php if(of_get_option('logo_retina') != '') : ?>
			@media all and (-webkit-min-device-pixel-ratio: 1.5) {
				#logo {
					display: none;
				}

				#logo-retina {
					display: block;
				}
			}
		<?php endif; ?>

		<?php if(of_get_option('logo_margin_left') != '') : ?>
			#logo {
				margin-left: <?php echo of_get_option('logo_margin_left'); ?>px;
			}
		<?php endif; ?>

		<?php if(of_get_option('logo_margin_top') != '') : ?>
			#logo {
				margin-top: <?php echo of_get_option('logo_margin_top'); ?>px;
			}
		<?php endif; ?>

		<?php if(of_get_option('logo_margin_bottom') != '') : ?>
			#logo {
				margin-bottom: <?php echo of_get_option('logo_margin_bottom'); ?>px;
			}
		<?php endif; ?>

		/* Main Background */

		<?php if( of_get_option('pattern') != 'default' && of_get_option('pattern') != '' ) : ?>

			body {
				background: url(<?php echo THEME_DIR; ?>/images/patterns/<?php echo of_get_option('pattern'); ?>.png) repeat;
			}

		<?php endif; ?>

		<?php xt_printBg('body_bg', 'body'); ?>

		<?php if(of_get_option('enable_cover')) : ?>
			body {
				-webkit-background-size: cover !important;
				-moz-background-size: cover !important;
				-o-background-size: cover !important;
				background-size: cover !important;
			}
		<?php endif; ?>

		/* Color Schemes */
		<?php

		$_baseColor = '';
		$_darkerColor = '';
		$_lighterColor = '';

		// Custom Base color
		if( of_get_option('base_color') != '') {
			$_baseColor = of_get_option('base_color');
			$_darkerColor = xt_getColor($_baseColor, -30);
			$_lighterColor = xt_getColor($_baseColor, 60);

			?>
				footer .tagcloud a:hover,
				footer .widget_ns_mailchimp input[type="submit"]:hover, footer .widget .button.button:hover,
				.sidebar .tagcloud a:hover,
				.sidebar .widget_ns_mailchimp input[type="submit"]:hover, .sidebar .widget .button.button:hover,
				.sidebar .widget_nav_menu .menu li.current-menu-item a, .sidebar .widget_nav_menu .menu li.current-menu-item a:visited,
				.post.post-large .post-details .post-format-icon span, .post.post-medium .side-post .post-format-icon, .post.post-single .post-details .post-format-icon span,
				.pagination a:hover,.pagination .current,
				.comments .blog_comment_user span,
				.xt-filters-wrapper ul.xt-filters li a:hover, .xt-filters-wrapper ul.xt-filters li a.current,
				body .post-navigation a:hover, body .post .flex-control-paging li a.flex-active, body .post .flex-control-paging li a:hover,
				.post-single .share-post .share-icons a:hover,
				#respond input[type="submit"]:hover,
				body .rev_banner_custom_arrows .tp-bullets.simplebullets.round .bullet.selected,
				body .camera_wrap .camera_pag .camera_pag_ul li.cameracurrent span, body .flex-control-paging li a.flex-active, body .flex-control-paging li a:hover,
				body .theme-default .nivo-controlNav a.active,
				body .tp-caption.default-heading,
				#main .button-default,
				body .list_carousel .prev:hover, body .list_carousel .next:hover,
				.the-content .block-font-icon .block-icon-wrapper .icon-wrap:hover, .the-content .block-font-icon .block-icon-wrapper .icon-wrap:hover:before, .the-content .block-font-icon .block-icon-wrapper .icon-wrap:hover:after,
				.xt-posts-list-wrapper .post-item .post-format-icon span,
				.the-content .skill-bar .skill-wrapper .skill-progress,
				#main .pricing-button a.button:hover,
				.the-content .xt-column-pricing .pricing-top,
				body .zocial-icon-wrap:hover,
				ul.xt_tabs_button li a {
					background-color: <?php echo $_baseColor; ?> !important;
				}

				.post .thumbnail .post-thumb-hover, body .project-item .thumbnail .xt-project-hover,
				body .project-media .xt-project-hover {
					background-color: rgba(<?php echo xt_hex2rgbImplode($_baseColor); ?>, 0.6) !important;
				}

				#main .button-default:hover {
					background-color: <?php echo $_lightColor; ?> !important;
				}

				.dropdown, .dropdown select > option {
					background-color: <?php echo $_darkerColor; ?> !important;
				}

				#top-menu ul li a:hover,
				footer .widget a:hover,
				#down-footer #menu-footer a:hover,
				.sidebar .widget a:hover,
				.post.post-large .post-details .post-infos .post-title h1 a:hover, .post.post-medium .post-details .post-infos .post-title h1 a:hover, 
				.post.post-single .post-details .post-infos .post-title h1 a:hover,
				.post.post-large .post-details .post-meta a:hover, .post.post-large .post-details .post-meta span a:hover, .post.post-medium .post-meta a:hover,
				 .post.post-medium .post-meta span a:hover,.post.post-single .post-details .post-meta a:hover, .post.post-single .post-details .post-meta span a:hover,
				.post.post-large .post-details .read-more a:hover, .post.post-medium .post-details .read-more a:hover,
				.post-single .post-tags p a:hover,
				.post-single .related-posts ol li:hover, .post-single .related-posts ol li a:hover,
				.comments .blog_comment_det .blog_comment_name_det a, .comments .blog_comment_det .blog_comment_name_det a:hover,
				.comments .blog_comment_text a, .comments .blog_comment_text a:visited, .comments .blog_comment_text a:hover,
				#respond .logged-in-as a, #respond .logged-in-as a:hover,
				body .tp-caption a:hover,
				.accordions .accordion-title a:hover, body .accordions .accordion-title.accordion-active a, .toggle .toggle-title a:hover,
				.the-content .box-font-icon i,
				body .xt-posts-wrapper .post-item .post-infos h1 a:hover,
				.xt-posts-wrapper .post-item .post-infos .post-meta a:hover,
				.xt-posts-list-wrapper .post-item .post-infos .post-title h1 a:hover,
				.xt-posts-list-wrapper .post-item .post-meta span a:hover,
				.xt-posts-list-wrapper .post-item .read-more a:hover,
				.the-content .member-block .member-social .zocial-icon-wrap:hover .the-content a:hover {
					color: <?php echo $_baseColor; ?> !important;
				}

				.dropdown select, .dropdown select > option,
				footer .tagcloud a:hover,
				.sidebar .tagcloud a:hover, .sidebar .widget_nav_menu .menu li.current-menu-item a:hover,
				body .zocial-icon-wrap:hover, body .widget .zocial-icon-wrap:hover {
					color: #ffffff !important;
				}

				#top-menu nav > ul > li > a:hover,
				.sidebar .widget_nav_menu .menu li.current-menu-item a, .sidebar .widget_nav_menu .menu li.current-menu-item a:visited,
				ul.xt_tabs_button li.current a,
				.the-content .pullquote, .the-content .pullquote p, .the-content .pullquote.pull-left, .the-content .pullquote.pull-right {
					border-color: <?php echo $_baseColor; ?> !important;
				}

				.dropdown {
					border-color: <?php echo $_darkerColor; ?> !important;
				}

				.dropdown:before, .dropdown:after {
					border-color: #ffffff transparent;
				}
			<?php
		}

		?>

		<?php xt_printFontFamily('skin_main_font', '#top-menu ul li a,
			#top-menu ul ul li a,
			#header-line h1, .full-callout-titlein #header-line h1,
			#header-line p,
			footer .widget .widget-title h3,
			footer .widget, footer .widget p, footer .cats-arch-tags-widget li, footer .recent-popular-comments li,
			.full-callout-titlein .page-title h1, .page-title h1,
			.the-content h1,
			.the-content h2,
			.the-content h3,
			.the-content h4,
			.the-content h5,
			.the-content h6,
			.sidebar .widget .widgettitle,
			.post.post-large .post-details .post-infos .post-title h1, .post.post-large .post-details .post-infos .post-title h1 a, 
			.post.post-medium .post-details .post-infos .post-title h1, .post.post-medium .post-details .post-infos .post-title h1 a,
			.post.post-single .post-details .post-infos .post-title h1, .post.post-single .post-details .post-infos .post-title h1 a,
			.post-single .author-meta .author-details h3, .post-single .author-meta .author-details h3 a,
			.post-single .related-posts h3,
			#comments #comments_header h3,
			.comments .blog_comment_det .blog_comment_name_det, .comments .blog_comment_det .blog_comment_name_det a,
			#reply-title, #reply-title small, #reply-title a, #reply-title a:hover,
			.xt-filters-wrapper ul.xt-filters li, .xt-filters-wrapper ul.xt-filters li a,
			body .project-item .project-infos h1, body .project-item .project-infos h1 a, body .project-item .project-infos h1 a:visited,
			body .project-item .project-infos h1 a:hover,
			.single-project-related .xt-related-headline h1,
			.accordions .accordion-title a, .toggle .toggle-title a,
			body .xt-posts-wrapper .post-item .post-infos h1, body .xt-posts-wrapper .post-item .post-infos h1 a,
			.xt-posts-list-wrapper .post-item .post-infos .post-title h1, .xt-posts-list-wrapper .post-item .post-infos .post-title h1 a,
			.xt-posts-list-wrapper .post-item .read-more a,
			.skill-bar .skill-title,
			body .xt-column-pricing h2,
			.the-content .xt-column-pricing .pricing-top', ' !important'); ?>

		<?php xt_printFontFamily('skin_sub_font', '#image-header h1,
			.the-content, .the-content p, .the-content address, .the-content .wpcf7-form p, .the-content label,
			.the-content li,
			.sidebar .widget, .sidebar .widget p, .sidebar .widget .textwidget, .sidebar .widget ul li, .sidebar .widget ol li, .sidebar .cats-arch-tags-widget, .sidebar .recent-popular-comments,
			.sidebar .widget_nav_menu .menu li a, .sidebar .widget_nav_menu .menu li a:visited,
			.post.post-large .post-details .post-meta, .post.post-large .post-details .post-meta span, .post.post-medium .post-meta, .post.post-medium .post-meta span,
			.post.post-single .post-details .post-meta, .post.post-single .post-details .post-meta span,
			.post.post-large .post-details .post-excerpt, .post.post-large .post-details .post-excerpt p, .post.post-medium .post-details .post-excerpt,
			.post.post-medium .post-details .post-excerpt p,
			.post.post-large .post-details .read-more a, .post.post-medium .post-details .read-more a,
			.pagination a, .pagination a:visited, .pagination span,
			.post-single .post-tags, .post-single .post-tags p,
			.post-single .share-post .share-text,
			.post-single .author-meta .author-details p,
			.post-single .related-posts ol li, .post-single .related-posts ol li a, .post-single .related-posts ol li a:visited,
			.comments .blog_comment_text, .comments .blog_comment_text p,
			.comments .blog_comment_det .blog_comment_name_det .comment-reply-link, .comments .blog_comment_det .blog_comment_name_det .comment-reply-link:hover,
			#respond .logged-in-as, #respond .logged-in-as a, #respond .logged-in-as a,
			body .project-item .project-infos .project-excerpt p,
			body .post-navigation a, body .post-navigation a:visited,
			body .tp-caption.default-heading,
			body .tp-caption.subheader-gray,
			body .tp-caption.paragraph,
			body .tp-caption.opacity-dark,
			body .tp-caption.very-big,
			body .tp-caption.very-big-dark,
			body .camera_caption, body .camera_caption>div, .camera_caption>div a, .camera_caption>div a:hover,
			 .flexslider .flex-caption, .flexslider .flex-caption a, .flexslider .flex-caption a:hover, .nivo-caption, .nivo-caption a, .nivo-caption a:hover,
			#main .button-default, .button.button, a.button,
			.xt-posts-wrapper .post-item .post-infos .post-meta,
			.xt-posts-list-wrapper .post-item .post-meta, .xt-posts-list-wrapper .post-item .post-meta span,
			body .xt-column-pricing h1,
			.xt-column-pricing h3,
			.xt-column-pricing ul li,
			#main .pricing-button a.button,
			body .image-header span', ' !important'); ?>

		/* Scheme Specific Styles */

	/* Header */

			<?php xt_printBg('header_bg', '#header-wrapper'); ?>

			<?php if(of_get_option('menu_height') != '') : ?>
				#header-wrapper, header .logo-wrapper, #top-menu nav > ul > li > a {
					height: <?php echo of_get_option('menu_height'); ?>px;
				}

				header .logo-wrapper, #top-menu nav > ul > li > a {
					line-height: <?php echo of_get_option('menu_height'); ?>px;
				}
			<?php endif; ?>

			<?php xt_disableShadow('header_shadow', '#header-wrapper'); ?>

		/* Main Menu */

			<?php xt_printFont('main_menu_font', '#top-menu ul li a', '', true); ?>

			<?php xt_printColor('main_menu_link_hover', '#top-menu ul li a:hover'); ?>

			<?php xt_printColorBorder('main_menu_link_hover', '#top-menu nav > ul > li > a:hover'); ?>

			<?php printOpts('main_select', array(
				'bg' => '.dropdown, .dropdown select > option',
				'border' => '.dropdown',
				'color_a' => '.dropdown select, .dropdown select > option',
				)); ?>

			<?php if( of_get_option('main_select_arrow_border') ) : ?>
				.dropdown:before, .dropdown:after {
					border-color: <?php echo of_get_option('main_select_arrow_border'); ?> transparent;
				}
			<?php endif; ?>
			

		/* Sub Menu */

			<?php xt_printColorBg('sub_menu_bg', '#top-menu ul ul, #top-menu ul ul ul'); ?>

			<?php xt_printFont('sub_menu_font', '#top-menu ul ul li a'); ?>

			<?php xt_printColor('sub_menu_link_hover', '#top-menu ul ul li a:hover'); ?>

			<?php xt_disableShadow('submenu_shadow', '#top-menu ul ul, #top-menu ul ul ul'); ?>

		/* Callouts */

			<?php xt_printFont('header_callout_main', '#header-line h1, .full-callout-titlein #header-line h1'); ?>
			<?php xt_printFont('header_callout_sub', '#header-line p'); ?>

		/* Header Blocks */

			<?php xt_printFont('header_block_font', '#image-header h1'); ?>
			<?php xt_disableTextShadow('header_block_txtshadow', '#image-header h1'); ?>
			<?php xt_disableShadow('header_block_shadow', '#image-header'); ?>
			<?php xt_printBg('header_block_bg', '#image-header'); ?>

		/* Content Wrapper */

			<?php if( of_get_option('pattern_content') != 'default' && of_get_option('pattern_content') != '' ) : ?>

				#main-outerglow {
					background: url(<?php echo THEME_DIR; ?>/images/patterns/<?php echo of_get_option('pattern_content'); ?>.png) repeat;
				}

			<?php endif; ?>
			
			<?php xt_printBg('content_wrapper_bg', '#main-outerglow'); ?>
			<?php xt_disableShadow('content_wrapper_shadow', '#main-outerglow'); ?>

			<?php if( of_get_option('content_wrapper_transparent') ) : ?>
				#main-outerglow {
					background: transparent !important;
				}
			<?php endif; ?>

		/* Content */

			<?php xt_printBg('content_bg', '.notebook, .notebook:after, .notebook:before, .image-header span, 
				.notepad-border:before, .post.format-standard .thumbnail a:before, .post.format-image .thumbnail a:before, .post .thumbnail .slides a:before, .post.post-large .thumbnail,
				.notepad-border, .post.format-standard .thumbnail a, .post.format-image .thumbnail a, .post .thumbnail .slides a,
				.notepad-border:after, .post.format-standard .thumbnail a:after, .post.format-image .thumbnail a:after, .post .thumbnail .slides a:after,
				.member-block .member-img, .the-content .member-block .member-img:before, .the-content .member-block .member-img:after'); ?>
			<?php xt_printColorBorder('content_border', '.notebook, .notebook:after, .notebook:before, 
				.notepad-border:before, .post.format-standard .thumbnail a:before, .post.format-image .thumbnail a:before, .post .thumbnail .slides a:before, .post.post-large .thumbnail,
				.notepad-border, .post.format-standard .thumbnail a, .post.format-image .thumbnail a, .post .thumbnail .slides a,
				.notepad-border:after, .post.format-standard .thumbnail a:after, .post.format-image .thumbnail a:after, .post .thumbnail .slides a:after,
				.member-block .member-img, .the-content .member-block .member-img:before, .the-content .member-block .member-img:after'); ?>

		/* Footer */

			<?php xt_disableShadow('footer_wrapper_shadow', '#footer-outerglow'); ?>

			<?php if( of_get_option('pattern_footer') != 'default' && of_get_option('pattern_footer') != '' ) : ?>

				#footer-wrapper {
					background: url(<?php echo THEME_DIR; ?>/images/patterns/<?php echo of_get_option('pattern_footer'); ?>.png) repeat;
				}

			<?php endif; ?>

			<?php xt_printBg('footer_bg', '#footer-wrapper'); ?>

			<?php if( of_get_option('footer_transparent') ) : ?>
				#footer-wrapper {
					background: transparent !important;
				}
			<?php endif; ?>

			<?php xt_printFont('footer_font_gototop', '#back-top-wrapper a, #back-top-wrapper a:visited'); ?>

			<?php xt_printFont('footer_widget_title', 'footer .widget .widget-title h3'); ?>
			<?php xt_printColorBorder('footer_widget_border', 'footer .widget'); ?>
			<?php xt_printFont('footer_widget_text', 'footer .widget, footer .widget p, footer .cats-arch-tags-widget li, footer .recent-popular-comments li'); ?>

			<?php xt_printColor('footer_widget_a', 'footer .widget a, footer .widget a:visited'); ?>
			<?php xt_printColor('footer_widget_a_hover', 'footer .widget a:hover'); ?>

			<?php xt_printColorBg('footer_widget_input_bg', 'footer .widget input[type="text"], footer .widget textarea, footer .widget select, footer .widget.widget_search input[type="text"]'); ?>
			<?php xt_printColor('footer_widget_input_color', 'footer .widget input[type="text"], footer .widget textarea, footer .widget select, footer .widget.widget_search input[type="text"]'); ?>
			<?php xt_printColorBorder('footer_widget_input_border', 'footer .widget input[type="text"], footer .widget input[type="text"]:focus, footer .widget textarea, footer .widget select,
				footer .widget.widget_search input[type="text"], footer .widget.widget_search input[type="text"]:focus'); ?>

			<?php xt_printColorBorder('footer_widget_framed_border', 'footer .xt_tabs_framed_container, footer .xt_tabs_framed_container .panes, footer .xt_tabs_framed a,
			footer .cats-arch-tags-widget .xt_tabs_framed li a, footer .cats-arch-tags-widget .xt_tabs_framed li a:first-child,
			footer .recent-popular-comments .xt_tabs_framed li a, footer .recent-popular-comments .xt_tabs_framed li a:first-child,
			footer .cats-arch-tags-widget .panes ul li, footer .recent-popular-comments .panes ul li'); ?>
			<?php xt_printColorBg('footer_widget_framed_bg', 'footer .xt_tabs_framed_container .panes'); ?>

			<?php xt_printColor('footer_widget_framed_tab_color', 'footer ul.xt_tabs_framed a, footer ul.xt_tabs_framed a:visited'); ?>
			<?php xt_printColorBg('footer_widget_framed_tab_bg', 'footer .cats-arch-tags-widget .xt_tabs_framed a, footer .recent-popular-comments .xt_tabs_framed a', ' !important'); ?>
			<?php xt_printColor('footer_widget_framed_tab_color_hover', 'footer ul.xt_tabs_framed .current a, footer ul.xt_tabs_framed a:hover,
				footer .recent-popular-comments .xt_tabs_framed li.current a, footer .cats-arch-tags-widget .xt_tabs_framed li.current a'); ?>
			<?php xt_printColorBg('footer_widget_framed_tab_bg_hover', 'footer .cats-arch-tags-widget .xt_tabs_framed a:hover, footer .cats-arch-tags-widget .xt_tabs_framed .current a,
				footer .recent-popular-comments .xt_tabs_framed .current a, footer .recent-popular-comments .xt_tabs_framed a:hover', ' !important'); ?>

			<?php xt_printColor('footer_widget_framed_text', 'footer .cats-arch-tags-widget .panes ul li a, footer .cats-arch-tags-widget .panes ul li a:hover,
				footer .recent-popular-comments .panes ul li a, footer .recent-popular-comments .panes ul li a:hover'); ?>
			<?php xt_printColor('footer_widget_framed_span', 'footer .cats-arch-tags-widget .panes ul li span, footer .cats-arch-tags-widget .panes ul li span:before, footer .cats-arch-tags-widget .panes ul li span:after,
			footer .recent-popular-comments .panes ul li .rpc_post_date'); ?>

			<?php xt_printColorBg('footer_widget_tag_bg', 'footer .tagcloud a, footer .tagcloud a:visited'); ?>
			<?php xt_printColor('footer_widget_tag_color', 'footer .tagcloud a, footer .tagcloud a:visited'); ?>
			<?php xt_printColorBg('footer_widget_tag_bg_hover', 'footer .tagcloud a:hover'); ?>
			<?php xt_printColor('footer_widget_tag_color_hover', 'footer .tagcloud a:hover'); ?>

			<?php xt_printColorBg('footer_widget_btn_bg', 'footer .widget_ns_mailchimp input[type="submit"], footer .widget_ns_mailchimp input[type="submit"]:active, footer .widget .button.button'); ?>
			<?php xt_printColorBg('footer_widget_btn_bg_hover', 'footer .widget_ns_mailchimp input[type="submit"]:hover, footer .widget .button.button:hover'); ?>
			<?php xt_printColor('footer_widget_btn_text', 'footer .widget_ns_mailchimp input[type="submit"], footer .widget_ns_mailchimp input[type="submit"]:active, footer .widget .button.button'); ?>
			<?php xt_printColor('footer_widget_btn_text_hover', 'footer .widget_ns_mailchimp input[type="submit"]:hover, footer .widget .button.button:hover'); ?>

		/* Down Footer */

			<?php xt_printBg('down_footer_bg', '#down-footer-wrapper'); ?>

			<?php if( of_get_option('down_footer_transparent') ) : ?>
				#down-footer-wrapper {
					background: transparent !important;
				}
			<?php endif; ?>

			<?php xt_printFont('down_footer_text_font', '#down-footer #copyright-area p'); ?>

			<?php xt_printFont('down_footer_menu_font', '#down-footer #menu-footer a, #down-footer #menu-footer a:visited'); ?>
			<?php xt_printColor('down_footer_menu_hover', '#down-footer #menu-footer a:hover'); ?>

			<?php //xt_printColorBg('footer_widget_social_icon_bg', ''); ?>
			<?php //xt_printColor('footer_widget_social_icon_color', ''); ?>
			<?php //xt_printColorBg('footer_widget_social_icon_bg_hover', ''); ?>
			<?php //xt_printColor('footer_widget_social_icon_color_hover', ''); ?>

		/* Pages */

			<?php xt_printFont('page_title_font', '.full-callout-titlein .page-title h1, .page-title h1'); ?>

			<?php xt_printFont('content_h1', '.the-content h1'); ?>
			<?php xt_printFont('content_h2', '.the-content h2'); ?>
			<?php xt_printFont('content_h3', '.the-content h3'); ?>
			<?php xt_printFont('content_h4', '.the-content h4'); ?>
			<?php xt_printFont('content_h5', '.the-content h5'); ?>
			<?php xt_printFont('content_h6', '.the-content h6'); ?>
			<?php xt_printFont('content_p', '.the-content, .the-content p, .the-content address, .the-content .wpcf7-form p, .the-content label'); ?>
			<?php xt_printFont('content_li', '.the-content li'); ?>

			<?php xt_printColor('content_a', '.the-content a', ''); ?>
			<?php xt_printColor('content_a_hover', '.the-content a:hover', ''); ?>

			<?php xt_printColorBg('content_input_bg', 'body .the-content .wpcf7-form input[type="text"], body .the-content .wpcf7-form input[type="password"], 
				body .the-content .wpcf7-form input[type="email"], body .the-content .wpcf7-form textarea, body .the-content .wpcf7-form select'); ?>
			<?php xt_printColor('content_input_color', 'body .the-content .wpcf7-form input[type="text"], body .the-content .wpcf7-form input[type="password"], 
				body .the-content .wpcf7-form input[type="email"], body .the-content .wpcf7-form textarea, body .the-content .wpcf7-form select'); ?>
			<?php xt_printColorBorder('content_input_border', 'body .the-content .wpcf7-form input[type="text"], body .the-content .wpcf7-form input[type="password"], 
				body .the-content .wpcf7-form input[type="email"], body .the-content .wpcf7-form textarea, body .the-content .wpcf7-form select'); ?>

		/* Sidebar */

			<?php xt_printFont('sidebar_title_font', '.sidebar .widget .widgettitle'); ?>
			<?php xt_printColorBorder('sidebar_widget_border', '.sidebar .widget'); ?>

			<?php xt_printFont('sidebar_font', '.sidebar .widget, .sidebar .widget p, .sidebar .widget .textwidget, .sidebar .widget ul li, .sidebar .widget ol li, .sidebar .cats-arch-tags-widget, .sidebar .recent-popular-comments'); ?>

			<?php xt_printColor('sidebar_a', '.sidebar .widget a, .sidebar .widget a:visited'); ?>

			<?php xt_printColor('sidebar_a_hover', '.sidebar .widget a:hover'); ?>

			<?php xt_printColorBg('sidebar_input_bg', '.sidebar .widget input, .sidebar .widget select, .sidebar .widget textarea,
				.sidebar .widget input:focus, .sidebar .widget select:focus, .sidebar .widget textarea:focus, .sidebar .widget.widget_search input[type="text"]'); ?>

			<?php xt_printColor('sidebar_input_color', '.sidebar .widget input, .sidebar .widget select, .sidebar .widget textarea,
				.sidebar .widget input:focus, .sidebar .widget select:focus, .sidebar .widget textarea:focus, .sidebar .widget.widget_search input[type="text"]'); ?>

			<?php xt_printColorBorder('sidebar_input_border', '.sidebar .widget input, .sidebar .widget select, .sidebar .widget textarea,
				.sidebar .widget input:focus, .sidebar .widget select:focus, .sidebar .widget textarea:focus, .sidebar .widget.widget_search input[type="text"]'); ?>

			<?php xt_printColorBorder('sidebar_widget_framed_border', '.sidebar .xt_tabs_framed_container, .sidebar .xt_tabs_framed_container .panes, .sidebar .xt_tabs_framed a,
			.sidebar .cats-arch-tags-widget .xt_tabs_framed li a, .sidebar .cats-arch-tags-widget .xt_tabs_framed li a:first-child,
			.sidebar .recent-popular-comments .xt_tabs_framed li a, .sidebar .recent-popular-comments .xt_tabs_framed li a:first-child,
			.sidebar .cats-arch-tags-widget .panes ul li, .sidebar .recent-popular-comments .panes ul li'); ?>
			<?php xt_printColorBg('sidebar_widget_framed_bg', '.sidebar .xt_tabs_framed_container .panes'); ?>

			<?php xt_printColor('sidebar_widget_framed_tab_color', '.sidebar ul.xt_tabs_framed a, .sidebar ul.xt_tabs_framed a:visited'); ?>
			<?php xt_printColorBg('sidebar_widget_framed_tab_bg', '.sidebar .cats-arch-tags-widget .xt_tabs_framed a, .sidebar .recent-popular-comments .xt_tabs_framed a', ' !important'); ?>
			<?php xt_printColor('sidebar_widget_framed_tab_color_hover', '.sidebar ul.xt_tabs_framed .current a, .sidebar ul.xt_tabs_framed a:hover'); ?>
			<?php xt_printColorBg('sidebar_widget_framed_tab_bg_hover', '.sidebar .cats-arch-tags-widget .xt_tabs_framed a:hover, .sidebar .cats-arch-tags-widget .xt_tabs_framed .current a,
				.sidebar .recent-popular-comments .xt_tabs_framed .current a, .sidebar .recent-popular-comments .xt_tabs_framed a:hover', ' !important'); ?>

			<?php xt_printColor('sidebar_widget_framed_text', '.sidebar .cats-arch-tags-widget .panes ul li a, .sidebar .cats-arch-tags-widget .panes ul li a:hover,
				.sidebar .recent-popular-comments .panes ul li a, .sidebar .recent-popular-comments .panes ul li a:hover'); ?>
			<?php xt_printColor('sidebar_widget_framed_span', '.sidebar .cats-arch-tags-widget .panes ul li span, .sidebar .cats-arch-tags-widget .panes ul li span:before, .sidebar .cats-arch-tags-widget .panes ul li span:after,
			.sidebar .recent-popular-comments .panes ul li .rpc_post_date'); ?>

			<?php xt_printColorBg('sidebar_widget_tag_bg', '.sidebar .tagcloud a, .sidebar .tagcloud a:visited'); ?>
			<?php xt_printColor('sidebar_widget_tag_color', '.sidebar .tagcloud a, .sidebar .tagcloud a:visited'); ?>
			<?php xt_printColorBg('sidebar_widget_tag_bg_hover', '.sidebar .tagcloud a:hover'); ?>
			<?php xt_printColor('sidebar_widget_tag_color_hover', '.sidebar .tagcloud a:hover'); ?>

			<?php xt_printColorBg('sidebar_widget_btn_bg', '.sidebar .widget_ns_mailchimp input[type="submit"], .sidebar .widget_ns_mailchimp input[type="submit"]:active, .sidebar .widget .button.button'); ?>
			<?php xt_printColorBg('sidebar_widget_btn_bg_hover', '.sidebar .widget_ns_mailchimp input[type="submit"]:hover, .sidebar .widget .button.button:hover'); ?>
			<?php xt_printColor('sidebar_widget_btn_text', '.sidebar .widget_ns_mailchimp input[type="submit"], .sidebar .widget_ns_mailchimp input[type="submit"]:active, .sidebar .widget .button.button'); ?>
			<?php xt_printColor('sidebar_widget_btn_text_hover', '.sidebar .widget_ns_mailchimp input[type="submit"]:hover, .sidebar .widget .button.button:hover'); ?>

			<?php xt_printFont('sidebar_features_font', '.sidebar .widget_nav_menu .menu li a, .sidebar .widget_nav_menu .menu li a:visited'); ?>
			<?php xt_printColorBorder('sidebar_features_border', '.sidebar .widget_nav_menu .menu li a, .sidebar .widget_nav_menu .menu li:last-child a'); ?>
			<?php xt_printColorBg('sidebar_features_bg', '.sidebar .widget_nav_menu .menu li a, .sidebar .widget_nav_menu .menu li a:visited'); ?>
			<?php xt_printColorBg('sidebar_features_hover_bg', '.sidebar .widget_nav_menu .menu li a:hover'); ?>
			<?php xt_printColor('sidebar_features_hover_color', '.sidebar .widget_nav_menu .menu li a:hover'); ?>

			<?php xt_printColorBg('sidebar_features_curr_bg', '.sidebar .widget_nav_menu .menu li.current-menu-item a, .sidebar .widget_nav_menu .menu li.current-menu-item a:visited'); ?>
			<?php xt_printColorBorder('sidebar_features_curr_bg', '.sidebar .widget_nav_menu .menu li.current-menu-item a, .sidebar .widget_nav_menu .menu li.current-menu-item a:visited'); ?>
			<?php xt_printColor('sidebar_features_curr_color', '.sidebar .widget_nav_menu .menu li.current-menu-item a'); ?>

		/* Blog */

			<?php xt_printColorBorder('blog_post_border', '.post, .single-project-related .xt-related-headline'); ?>

			<?php if(of_get_option('blog_thumb_bg')) : ?>
				.post .thumbnail .post-thumb-hover {
					background-color: rgba(<?php echo xt_hex2rgbImplode(of_get_option('blog_thumb_bg'));?>, 0.6);
				}
			<?php endif; ?>

			<?php xt_printColorBg('blog_pt_bg', '.post.post-large .post-details .post-format-icon span, .post.post-medium .side-post .post-format-icon, .post.post-single .post-details .post-format-icon span'); ?>
			<?php xt_printColor('blog_pt_color', '.post.post-large .post-details .post-format-icon span, .post.post-medium .side-post .post-format-icon, .post.post-single .post-details .post-format-icon span'); ?>

			<?php xt_printFont('blog_title_font', '.post.post-large .post-details .post-infos .post-title h1, .post.post-large .post-details .post-infos .post-title h1 a, 
				.post.post-medium .post-details .post-infos .post-title h1, .post.post-medium .post-details .post-infos .post-title h1 a,
				.post.post-single .post-details .post-infos .post-title h1, .post.post-single .post-details .post-infos .post-title h1 a'); ?>
			<?php xt_printColor('blog_title_hover', '.post.post-large .post-details .post-infos .post-title h1 a:hover, .post.post-medium .post-details .post-infos .post-title h1 a:hover, 
				.post.post-single .post-details .post-infos .post-title h1 a:hover'); ?>

			<?php xt_printFont('blog_meta_font', '.post.post-large .post-details .post-meta, .post.post-large .post-details .post-meta span, .post.post-medium .post-meta, .post.post-medium .post-meta span,
				.post.post-single .post-details .post-meta, .post.post-single .post-details .post-meta span'); ?>

			<?php xt_printColor('blog_meta_color', '.post.post-large .post-details .post-meta a, .post.post-large .post-details .post-meta span a, .post.post-medium .post-meta a, .post.post-medium .post-meta span a,
				.post.post-single .post-details .post-meta a, .post.post-single .post-details .post-meta span a'); ?>

			<?php xt_printColor('blog_meta_hover', '.post.post-large .post-details .post-meta a:hover, .post.post-large .post-details .post-meta span a:hover, .post.post-medium .post-meta a:hover,
			 .post.post-medium .post-meta span a:hover,	.post.post-single .post-details .post-meta a:hover, .post.post-single .post-details .post-meta span a:hover'); ?>

			<?php xt_printFont('blog_excerpt_font', '.post.post-large .post-details .post-excerpt, .post.post-large .post-details .post-excerpt p, .post.post-medium .post-details .post-excerpt,
				.post.post-medium .post-details .post-excerpt p'); ?>

			<?php xt_printFont('blog_readmore_font', '.post.post-large .post-details .read-more a, .post.post-medium .post-details .read-more a'); ?>
			<?php xt_printColor('blog_readmore_hover', '.post.post-large .post-details .read-more a:hover, .post.post-medium .post-details .read-more a:hover'); ?>

			<?php xt_printFont('blog_pagination_font', '.pagination a, .pagination a:visited, .pagination span'); ?>
			<?php xt_printColorBg('blog_pagination_bg', '.pagination a, .pagination a:visited, .pagination span'); ?>

			<?php xt_printColor('blog_pagination_text_hover', '.pagination a:hover, .pagination .current'); ?>
			<?php xt_printColorBg('blog_pagination_bg_hover', '.pagination a:hover,.pagination .current'); ?>

			<?php xt_printColorBg('blog_gallery_bg', '.post .flex-control-nav li', ' !important'); ?>
			<?php xt_printColorBg('blog_gallery_bullet', '.post .flex-control-paging li a', ' !important'); ?>
			<?php xt_printColorBg('blog_gallery_bullet_hover', 'body .post .flex-control-paging li a.flex-active, body .post .flex-control-paging li a:hover', ' !important'); ?>

		/* Post */

			<?php xt_printColorBorder('post_tags_border', '.post-single .post-tags p'); ?>
			<?php xt_printFont('post_tags', '.post-single .post-tags, .post-single .post-tags p'); ?>
			<?php xt_printColor('post_tags_link', '.post-single .post-tags p a, .post-single .post-tags p a:visited'); ?>
			<?php xt_printColor('post_tags_hover', '.post-single .post-tags p a:hover'); ?>

			<?php xt_printFont('post_share', '.post-single .share-post .share-text'); ?>
			<?php xt_printColor('post_share_color', '.post-single .share-post .share-icons a, .post-single .share-post .share-icons a:visited'); ?>
			<?php xt_printColorBg('post_share_bg', '.post-single .share-post .share-icons a, .post-single .share-post .share-icons a:visited'); ?>
			<?php xt_printColor('post_share_hover', '.post-single .share-post .share-icons a:hover'); ?>
			<?php xt_printColorBg('post_share_bg_hover', '.post-single .share-post .share-icons a:hover', ' !important'); ?>

			<?php xt_printFont('post_authorbox_name', '.post-single .author-meta .author-details h3, .post-single .author-meta .author-details h3 a'); ?>
			<?php xt_printFont('post_authorbox_bio', '.post-single .author-meta .author-details p'); ?>
			<?php xt_printColorBg('post_authorbox_bg', '.post-single .author-meta'); ?>
			<?php xt_printColorBorder('post_authorbox_bg', '.post-single .author-meta .author-image img'); ?>

			<?php xt_printFont('post_relatedposts', '.post-single .related-posts h3'); ?>
			<?php xt_printFont('post_relatedposts_items', '.post-single .related-posts ol li, .post-single .related-posts ol li a, .post-single .related-posts ol li a:visited'); ?>
			<?php xt_printColor('post_relatedposts_hover', '.post-single .related-posts ol li:hover, .post-single .related-posts ol li a:hover'); ?>

			<?php xt_printFont('post_comments', '#comments #comments_header h3'); ?>
			<?php xt_printColorBorder('post_comments_border', '.comments .comment'); ?>
			<?php xt_printColorBg('post_comments_bg', '.comments .comment'); ?>
			<?php xt_printColorBg('post_comments_authortag_bg', '.comments .blog_comment_user span'); ?>
			<?php xt_printColor('post_comments_authortag_color', '.comments .blog_comment_user span'); ?>
			<?php xt_printFont('post_comments_author', '.comments .blog_comment_det .blog_comment_name_det, .comments .blog_comment_det .blog_comment_name_det a'); ?>
			<?php xt_printColor('post_comments_author_color', '.comments .blog_comment_det .blog_comment_name_det a, .comments .blog_comment_det .blog_comment_name_det a:hover'); ?>
			<?php xt_printFont('post_comments_content', '.comments .blog_comment_text, .comments .blog_comment_text p'); ?>
			<?php xt_printColor('post_comments_content_color', '.comments .blog_comment_text a, .comments .blog_comment_text a:visited, .comments .blog_comment_text a:hover'); ?>
			<?php xt_printFont('post_comments_reply', '.comments .blog_comment_det .blog_comment_name_det .comment-reply-link, .comments .blog_comment_det .blog_comment_name_det .comment-reply-link:hover'); ?>
			<?php xt_printColorBorder('post_comments_reply_border', '.comments .blog_comment_det .blog_comment_name_det .comment-reply-link, .comments .blog_comment_det .blog_comment_name_det .comment-reply-link:hover'); ?>
			<?php xt_printColorBg('post_comments_reply_bg', '.comments .blog_comment_det .blog_comment_name_det .comment-reply-link, .comments .blog_comment_det .blog_comment_name_det .comment-reply-link:hover'); ?>

			<?php xt_printFont('post_lac', '#reply-title, #reply-title small, #reply-title a, #reply-title a:'); ?>
			<?php xt_printFont('post_lac_logged', '#respond .logged-in-as, #respond .logged-in-as a, #respond .logged-in-as a'); ?>
			<?php xt_printColor('post_lac_logged_color', '#respond .logged-in-as a, #respond .logged-in-as a:hover'); ?>
			<?php xt_printColorBg('post_lac_input_bg', '#respond input[type="text"], #respond textarea'); ?>
			<?php xt_printColorBorder('post_lac_input_border', '#respond input[type="text"], #respond textarea'); ?>
			<?php xt_printColor('post_lac_input_color', '#respond input[type="text"], #respond textarea'); ?>
			<?php xt_printColorBg('post_lac_btn_bg', '#respond input[type="submit"], #respond input[type="submit"]:hover', ' !important'); ?>
			<?php xt_printColor('post_lac_btn_text', '#respond input[type="submit"], #respond input[type="submit"]:hover'); ?>
			<?php xt_printColorBg('post_lac_btn_bg_hover', '#respond input[type="submit"]:hover', ' !important'); ?>
			<?php xt_printColor('post_lac_btn_text_hover', '#respond input[type="submit"]:hover'); ?>

		/* Portfolio */

			<?php xt_printFont('portfolio_filter_font', '.xt-filters-wrapper ul.xt-filters li, .xt-filters-wrapper ul.xt-filters li a'); ?>
			<?php xt_printColorBg('portfolio_filter_bg', '.xt-filters-wrapper ul.xt-filters li a'); ?>
			<?php xt_printColorBg('portfolio_filter_bg_hover', '.xt-filters-wrapper ul.xt-filters li a:hover, .xt-filters-wrapper ul.xt-filters li a.current'); ?>
			<?php xt_printColor('portfolio_filter_text_hover', '.xt-filters-wrapper ul.xt-filters li a:hover, .xt-filters-wrapper ul.xt-filters li a.current'); ?>

			<?php xt_printColorBorder('portfolio_item_border', '.the-content .project-item .thumbnail'); ?>

			<?php if(of_get_option('portfolio_item_bg')) : ?>
				body .project-item .thumbnail .xt-project-hover {
					background-color: rgba(<?php echo xt_hex2rgbImplode(of_get_option('portfolio_item_bg'));?>, 0.6) !important;
				}
			<?php endif; ?>

			<?php xt_printFont('portfolio_item_title', 'body .project-item .project-infos h1, body .project-item .project-infos h1 a, body .project-item .project-infos h1 a:visited,
				body .project-item .project-infos h1 a:hover'); ?>
			<?php xt_printFont('portfolio_item_excerpt', 'body .project-item .project-infos .project-excerpt p'); ?>

		/* Single Project */

			<?php if(of_get_option('single_project_item_bg')) : ?>
				body .project-media .xt-project-hover {
					background-color: rgba(<?php echo xt_hex2rgbImplode(of_get_option('single_project_item_bg'));?>, 0.6) !important;
				}
			<?php endif; ?>

			<?php xt_printFont('single_project_pagination_font', 'body .post-navigation a, body .post-navigation a:visited'); ?>
			<?php xt_printColorBg('single_project_pagination_bg', 'body .post-navigation a, body .post-navigation a:visited'); ?>
			<?php xt_printColorBg('single_project_pagination_bg_hover', 'body .post-navigation a:hover'); ?>
			<?php xt_printColor('single_project_pagination_text_hover', 'body .post-navigation a:hover'); ?>

			<?php xt_printFont('single_project_related_font', '.single-project-related .xt-related-headline h1'); ?>

		/* Sliders */

			<?php xt_printColorBg('slider_nav_bg', 'body .rev_banner_custom_arrows .tp-bullets.simplebullets.round .bullet,
				body .camera_wrap .camera_pag .camera_pag_ul li, body .elastislide-wrapper nav span,
				body .flex-control-nav li', ' !important'); ?>
			<?php xt_printColorBorder('slider_nav_bg', 'body .rev_banner_custom_arrows .tp-bullets.simplebullets.round .bullet,
				body .theme-default .nivo-controlNav a', ' !important'); ?>

			<?php xt_printColorBg('slider_nav_bullet', 'body .rev_banner_custom_arrows .tp-bullets.simplebullets.round .bullet,
				body .camera_wrap .camera_pag .camera_pag_ul li span, body .flex-control-paging li a,  body .theme-default .nivo-controlNav a', ' !important'); ?>

			<?php xt_printColorBg('slider_nav_bullet_hover', 'body .rev_banner_custom_arrows .tp-bullets.simplebullets.round .bullet.selected,
				body .camera_wrap .camera_pag .camera_pag_ul li.cameracurrent span, body .flex-control-paging li a.flex-active, body .flex-control-paging li a:hover,
				body .theme-default .nivo-controlNav a.active', ' !important'); ?>

			<?php xt_printFont('slider_rev_default', 'body .tp-caption.default-heading'); ?>
			<?php xt_printColorBg('slider_rev_default_bg', 'body .tp-caption.default-heading', ' !important'); ?>

			<?php xt_printFont('slider_rev_subgray', 'body .tp-caption.subheader-gray'); ?>
			<?php xt_printFont('slider_rev_paragraph', 'body .tp-caption.paragraph'); ?>
			<?php xt_printFont('slider_rev_opacdark', 'body .tp-caption.opacity-dark'); ?>
			<?php xt_printFont('slider_rev_verybig', 'body .tp-caption.very-big'); ?>
			<?php xt_printFont('slider_rev_verybigdark', 'body .tp-caption.very-big-dark'); ?>

			<?php xt_printColor('slider_rev_link', 'body .tp-caption a'); ?>
			<?php xt_printColor('slider_rev_link_hover', 'body .tp-caption a:hover'); ?>

			<?php xt_printFont('slider_all_caption', 'body .camera_caption, body .camera_caption>div, .camera_caption>div a, .camera_caption>div a:hover,
			 .flexslider .flex-caption, .flexslider .flex-caption a, .flexslider .flex-caption a:hover, .nivo-caption, .nivo-caption a, .nivo-caption a:hover'); ?>
			<?php xt_printColorBg('slider_all_caption_bg', 'body .camera_caption, body .camera_caption>div, .flexslider .flex-caption, .nivo-caption', ' !important'); ?>

		/* Shortcodes */

			<?php
				/*
			<?php printOpts('sc_accordion', array(
				'border' => '',
				'font' => '',
				'color_a' => '',
				'bg' => '',
				'color_a_hover' => '',
				'bg_hover' => '',
				)); ?>
				*/
			?>

			<?php printOpts('sc_accordion', array(
				'border' => '.accordions .accordion-title a, .toggle .toggle-title a, .toggle .toggle-content',
				'font' => '.accordions .accordion-title a, .toggle .toggle-title a',
				'color_a' => '.accordions .accordion-title a, .toggle .toggle-title a',
				'bg' => '.accordions .accordion-title a, .toggle .toggle-title a',
				'color_a_hover' => '.accordions .accordion-title a:hover, body .accordions .accordion-title.accordion-active a, .toggle .toggle-title a:hover',
				'bg_hover' => '.accordions .accordion-title a:hover, body .accordions .accordion-title.accordion-active a, .toggle .toggle-title a:hover',
				)); ?>

			<?php printOpts('sc_button', array(
				'font' => '#main .button-default, .button.button, a.button',
				'color_a' => '#main .button-default',
				'bg' => '#main .button-default',
				'color_a_hover' => '#main .button-default:hover',
				'bg_hover' => '#main .button-default:hover',
				)); ?>

			<?php printOpts('sc_carousel', array(
				'color_a' => 'body  .list_carousel .prev, body .list_carousel .next',
				'bg' => 'body  .list_carousel .prev, body .list_carousel .next',
				'color_a_hover' => 'body .list_carousel .prev:hover, body .list_carousel .next:hover',
				'bg_hover' => 'body .list_carousel .prev:hover, body .list_carousel .next:hover',
				)); ?>

			<?php xt_printColorBg('sc_carousel_timebar_bg', 'body .list_carousel .timer'); ?>

			<?php xt_printColorBg('sc_divider_border', 'body .divider.divider-shadow'); ?>
			<?php xt_printColorBorder('sc_divider_border', 'body .divider.divider-normal'); ?>

			<?php printOpts('sc_dropcap', array(
				'border' => '.dropcap, .dropcap-circle, .dropcap-square, .dropcap-classic',
				'color_a' => '.dropcap, .dropcap-circle, .dropcap-square, .dropcap-classic',
				'bg' => '.dropcap-circle, .dropcap-square',
				)); ?>

			<?php printOpts('sc_iconbox_title', array(
				'font' => '.the-content .box-font-icon h3',
				'color_a' => '.the-content .box-font-icon i',
				)); ?>

			<?php printOpts('sc_iconbox_text', array(
				'font' => '.the-content .box-font-icon p',
				)); ?>

			<?php printOpts('sc_blockicon', array(
				'border' => '.the-content .block-font-icon .block-icon-wrapper .icon-wrap, .the-content .block-font-icon .block-icon-wrapper .icon-wrap:before, .the-content .block-font-icon .block-icon-wrapper .icon-wrap:after',
				'color_a' => '.the-content .block-font-icon .block-icon-wrapper .icon-wrap, .the-content .block-font-icon .block-icon-wrapper .icon-wrap i',
				'bg' => '.the-content .block-font-icon .block-icon-wrapper .icon-wrap, .the-content .block-font-icon .block-icon-wrapper .icon-wrap:before, .the-content .block-font-icon .block-icon-wrapper .icon-wrap:after',
				'color_a_hover' => '.the-content .block-font-icon .block-icon-wrapper .icon-wrap:hover i',
				'bg_hover' => '.the-content .block-font-icon .block-icon-wrapper .icon-wrap:hover, .the-content .block-font-icon .block-icon-wrapper .icon-wrap:hover:before, .the-content .block-font-icon .block-icon-wrapper .icon-wrap:hover:after',
				'border_hover' => '.the-content .block-font-icon .block-icon-wrapper .icon-wrap:hover, .the-content .block-font-icon .block-icon-wrapper .icon-wrap:hover:before, .the-content .block-font-icon .block-icon-wrapper .icon-wrap:hover:after',
				)); ?>

			<?php printOpts('sc_latest_post', array(
				'font' => 'body .xt-posts-wrapper .post-item .post-infos h1, body .xt-posts-wrapper .post-item .post-infos h1 a',
				'color_a_hover' => 'body .xt-posts-wrapper .post-item .post-infos h1 a:hover',
				)); ?>

			<?php printOpts('sc_latest_post_meta', array(
				'font' => '.xt-posts-wrapper .post-item .post-infos .post-meta',
				'color_a' => '.xt-posts-wrapper .post-item .post-infos .post-meta a, .xt-posts-wrapper .post-item .post-infos .post-meta a:visited',
				'color_a_hover' => '.xt-posts-wrapper .post-item .post-infos .post-meta a:hover',
				)); ?>

			<?php printOpts('sc_lastest_post_list', array(
				'font' => '.xt-posts-list-wrapper .post-item .post-infos .post-title h1, .xt-posts-list-wrapper .post-item .post-infos .post-title h1 a',
				'color_a_hover' => '.xt-posts-list-wrapper .post-item .post-infos .post-title h1 a:hover',
				)); ?>

			<?php printOpts('sc_lastest_post_list_icon', array(
				'color_a' => '.xt-posts-list-wrapper .post-item .post-format-icon span',
				'bg' => '.xt-posts-list-wrapper .post-item .post-format-icon span',
				)); ?>

			<?php printOpts('sc_latest_post_list_meta', array(
				'font' => '.xt-posts-list-wrapper .post-item .post-meta, .xt-posts-list-wrapper .post-item .post-meta span',
				'color_a' => '.xt-posts-list-wrapper .post-item .post-meta a',
				'color_a_hover' => '.xt-posts-list-wrapper .post-item .post-meta span a:hover',
				)); ?>

			<?php printOpts('sc_lastest_post_list_rm', array(
				'font' => '.xt-posts-list-wrapper .post-item .read-more a',
				'color_a_hover' => '.xt-posts-list-wrapper .post-item .read-more a:hover',
				)); ?>

			<?php printOpts('sc_member_name', array(
				'font' => '.the-content .member-block .member-header h2',
				)); ?>

			<?php printOpts('sc_member_role', array(
				'font' => '.the-content .member-block .member-header h4',
				)); ?>

			<?php printOpts('sc_member_content', array(
				'font' => 'body .member-block .member-content, body .member-block .member-content p',
				)); ?>

			<?php printOpts('sc_member_icon', array(
				'color_a' => '.the-content .member-block .member-social .zocial-icon-wrap',
				'bg' => '.the-content .member-block .member-social .zocial-icon-wrap',
				'color_a_hover' => '.the-content .member-block .member-social .zocial-icon-wrap:hover',
				'bg_hover' => '.the-content .member-block .member-social .zocial-icon-wrap:hover',
				)); ?>

			<?php printOpts('sc_skill_name', array(
				'font' => '.skill-bar .skill-title',
				)); ?>

			<?php printOpts('sc_skill_bar', array(
				'bg' => '.skill-bar .skill-wrapper',
				)); ?>

			<?php printOpts('sc_skill_bar_inner', array(
				'bg' => '.the-content .skill-bar .skill-wrapper .skill-progress',
				)); ?>

			<?php printOpts('sc_msgbox', array(
				'font' => '.notification-box',
				)); ?>

			<?php printOpts('sc_ptable', array(
				'border' => '.xt-column-pricing, body .xt-column-pricing .pricing-details, .xt-column-pricing ul li, .the-content .xt-column-pricing .pricing-button, .xt-column-pricing .pricing-content',
				)); ?>

			<?php if(of_get_option('sc_ptable_bg')) : ?>
				.xt-column-pricing, body #container-full .xt-column-pricing .pricing-details, body #container-full .xt-column-pricing ul li, body #container-full .the-content .xt-column-pricing .pricing-button {
					background: <?php echo of_get_option('sc_ptable_bg'); ?> !important;
				}
			<?php endif; ?>

			<?php printOpts('sc_ptable_plan', array(
				'font' => 'body .xt-column-pricing h1',
				)); ?>

			<?php printOpts('sc_ptable_price', array(
				'font' => 'body .xt-column-pricing h2',
				)); ?>

			<?php printOpts('sc_ptable_freq', array(
				'font' => '.xt-column-pricing h3',
				)); ?>

			<?php printOpts('sc_ptable_items', array(
				'font' => '.xt-column-pricing ul li',
				)); ?>

			<?php printOpts('sc_ptable_btn', array(
				'font' => '#main .pricing-button a.button',
				'border' => '#main .pricing-button a.button',
				'bg' => '#main .pricing-button a.button',
				'bg_hover' => '#main .pricing-button a.button:hover',
				'color_a_hover' => '#main .pricing-button a.button:hover',
				)); ?>

			<?php printOpts('sc_ptable_featured', array(
				'font' => '.the-content .xt-column-pricing .pricing-top',
				'bg' => '.the-content .xt-column-pricing .pricing-top',
				)); ?>

			<?php printOpts('sc_ptable_top', array(
				'border' => 'body #container-full .xt-column-pricing .pricing-details',
				)); ?>

			<?php if(of_get_option('sc_ptable_top_bg')) : ?>
				body #container-full .xt-column-pricing .pricing-details {
					background: <?php echo of_get_option('sc_ptable_top_bg'); ?> !important;
				}
			<?php endif; ?>

			<?php printOpts('sc_ptable_middle', array(
				'border' => 'body #container-full .xt-column-pricing ul li',
				)); ?>

			<?php if(of_get_option('sc_ptable_middle_bg')) : ?>
				body #container-full .xt-column-pricing ul li {
					background: <?php echo of_get_option('sc_ptable_middle_bg'); ?> !important;
				}
			<?php endif; ?>

			<?php printOpts('sc_ptable_bottom', array(
				'border' => 'body #container-full .the-content .xt-column-pricing .pricing-button',
				)); ?>

			<?php if(of_get_option('sc_ptable_bottom_bg')) : ?>
				body #container-full .the-content .xt-column-pricing .pricing-button {
					background: <?php echo of_get_option('sc_ptable_bottom_bg'); ?> !important;
				}
			<?php endif; ?>

			<?php printOpts('sc_smedia', array(
				'color_a' => 'body .zocial-icon-wrap',
				'bg' => 'body .zocial-icon-wrap',
				'color_a_hover' => 'body .zocial-icon-wrap:hover',
				'bg_hover' => 'body .zocial-icon-wrap:hover',
				)); ?>

			<?php printOpts('sc_table', array(
				'border' => 'table, .table_style_zebra table',
				)); ?>

			<?php printOpts('sc_table_head', array(
				'border' => '.table_style_zebra table thead tr th, .table_style_normal table thead tr th, .table_style_minimal table thead tr th',
				'bg' => '.table_style_zebra table thead tr th, .table_style_normal table thead tr th, .table_style_minimal table thead tr th',
				'font' => '.table_style_zebra table thead tr th, .table_style_normal table thead tr th, .table_style_minimal table thead tr th',
				)); ?>

			<?php printOpts('sc_table_rows', array(
				'border' => '.table_style_zebra table tbody tr, .table_style_zebra table tbody tr td, .table_style_normal table tbody tr, .table_style_normal table tbody tr td, .table_style_minimal table tbody tr',
				'bg' => '.table_style_zebra table tbody tr, .table_style_zebra table tbody tr td, .table_style_normal table tbody tr, .table_style_normal table tbody tr td, .table_style_minimal table tbody tr',
				'font' => '.table_style_zebra table tbody tr, .table_style_zebra table tbody tr td, .table_style_normal table tbody tr, .table_style_normal table tbody tr td, .table_style_minimal table tbody tr',
				)); ?>

			<?php printOpts('sc_table_rowsh', array(
				'bg' => '.table_style_zebra table tbody tr:nth-child(even) td, .table_style_normal table tbody tr:hover td, .table_style_minimal table tbody tr:hover td',
				)); ?>

			<?php printOpts('sc_table_foot', array(
				'border' => '.table_style_zebra table tfoot tr td, .table_style_normal table tfoot tr td, .table_style_minimal table tfoot tr td',
				'bg' => '.table_style_zebra table tfoot tr td, .table_style_normal table tfoot tr td, .table_style_minimal table tfoot tr td',
				'font' => '.table_style_zebra table tfoot tr td, .table_style_normal table tfoot tr td, .table_style_minimal table tfoot tr td',
				)); ?>

			<?php printOpts('sc_tabsf', array(
				'border' => '.xt_tabs_framed_container .panes, ul.xt_tabs_framed a, ul.xt_tabs_framed li.current a',
				'font' => 'ul.xt_tabs_framed a, ul.xt_tabs_framed li.current a',
				'color_a' => '.xt_tabs_framed_container .panes a, .xt_tabs_framed_container .panes a:hover',
				'bg' => '.xt_tabs_framed_container .panes, ul.xt_tabs_framed li.current a',
				'color_a_hover' => 'ul.xt_tabs_framed a',
				'bg_hover' => 'ul.xt_tabs_framed a',
				)); ?>

			<?php if(of_get_option('sc_tabsf_bg')) : ?>
				ul.xt_tabs_framed li.current a {
					border-bottom-color: <?php echo of_get_option('sc_tabsf_bg'); ?> !important;
				}
			<?php endif; ?>

			<?php printOpts('sc_tabsf_content', array(
				'font' => '.xt_tabs_framed_container .panes',
				)); ?>

			<?php printOpts('sc_tabsb', array(
				'border' => 'ul.xt_tabs_button li.current a',
				'font' => 'ul.xt_tabs_button a',
				'color_a' => 'ul.xt_tabs_button li.current a',
				'bg' => 'ul.xt_tabs_button li.current a',
				'color_a_hover' => 'ul.xt_tabs_button li a',
				'bg_hover' => 'ul.xt_tabs_button li a',
				)); ?>

			<?php printOpts('sc_tabsb_content', array(
				'font' => '.xt_tabs_button_container .panes',
				)); ?>

			<?php printOpts('sc_tabsv', array(
				'border' => 'ul.xt_tabs_vertical li a, ul.xt_tabs_vertical li.current a',
				'font' => 'ul.xt_tabs_vertical li a',
				'color_a' => 'ul.xt_tabs_vertical li.current a',
				'bg' => 'ul.xt_tabs_vertical li.current a',
				'color_a_hover' => 'ul.xt_tabs_vertical li a',
				'bg_hover' => 'ul.xt_tabs_vertical li a',
				)); ?>

			<?php if(of_get_option('sc_tabsv_bg_hover')) : ?>
				ul.xt_tabs_vertical li a {
					background: <?php echo of_get_option('sc_tabsv_bg_hover'); ?> !important;
				}
			<?php endif; ?>

			<?php printOpts('sc_tabsv_content', array(
				'font' => '.xt_tabs_vertical_container .panes',
				)); ?>

			<?php printOpts('sc_teasersimple', array(
				'border' => '.teaser-box, .teaser-box .teaser-box-content',
				'font' => '.teaser-box .teaser-box-content, .teaser-box .teaser-box-content p',
				'bg' => '.teaser-box .teaser-box-content',
				)); ?>

			<?php printOpts('sc_teasersimple_h', array(
				'font' => '.teaser-box h1, .teaser-box h2, .teaser-box h3, .teaser-box h4, .teaser-box h5, .teaser-box h6',
				)); ?>

			<?php printOpts('sc_callout', array(
				'border' => '.callout-box, .callout-box .callout-box-content',
				'font' => '.callout-box .callout-box-content, .callout-box .callout-box-content p',
				'bg' => '.callout-box .callout-box-content',
				)); ?>

			<?php printOpts('sc_callout_h', array(
				'font' => '.callout-box .callout-box-title',
				)); ?>

			<?php printOpts('sc_testimonialb', array(
				'font' => 'body .testimonial-content-bubble, .testimonial-content-bubble p',
				'bg' => '.testimonial-content-bubble',
				'border' => '.testimonial-content-bubble',
				)); ?>

			<?php if(of_get_option('sc_testimonialb_bg')) : ?>
				.testimonial-content-bubble:after {
					border-top-color: <?php echo of_get_option('sc_testimonialb_bg'); ?> !important;
				}
			<?php endif; ?>

			<?php if(of_get_option('sc_testimonialb_border')) : ?>
				.testimonial-content-bubble:before {
					border-top-color: <?php echo of_get_option('sc_testimonialb_border'); ?> !important;
				}
			<?php endif; ?>

			<?php printOpts('sc_testimonialb_author', array(
				'font' => '.testimonial .testimonial-meta',
				)); ?>

			<?php printOpts('sc_testimonialblock', array(
				'font' => 'body .testimonial-block .testimonial-content, body .testimonial-block .testimonial-content p',
				)); ?>

			<?php printOpts('sc_testimonialblock_author', array(
				'font' => '.testimonial-block .testimonial-meta .author-name',
				)); ?>

			<?php printOpts('sc_blockquote', array(
				'font' => 'blockquote, .blockquote, .the-content blockquote p, .the-content .blockquote p',
				'border' => 'blockquote, .blockquote',
				)); ?>

			<?php printOpts('sc_blockquote_author', array(
				'font' => '.blockquote blockquote .author',
				)); ?>

			<?php printOpts('sc_pullquote', array(
				'font' => '.the-content .pullquote, .the-content .pullquote p, .the-content .pullquote.pull-left, .the-content .pullquote.pull-right',
				'border' => '.the-content .pullquote, .the-content .pullquote p, .the-content .pullquote.pull-left, .the-content .pullquote.pull-right',
				)); ?>

			<?php printOpts('sc_headerimg', array(
				'font' => 'body .image-header span',
				'bg' => 'body .image-header span',
				)); ?>

			<?php printOpts('sc_code', array(
				'bg' => 'body pre',
				'color_a' => 'body pre',
				'border' => 'body pre',
				)); ?>


		/* Custom CSS Rules */

		<?php echo of_get_option('custom_css'); ?>

	</style>
	<?php
}

/* Footer Styles
==============================*/

add_action('wp_footer', 'xt_print_custom_styles_footer');

function xt_print_custom_styles_footer() {
	?>
	<style type="text/css">

	</style>
	<?php
}