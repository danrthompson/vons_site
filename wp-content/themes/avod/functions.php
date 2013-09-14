<?php

	// Theme Directory URI Constant
	define("THEME_DIR", get_template_directory_uri());
	
	// Remove Generator Tag to improve security
	remove_action('wp_head', 'wp_generator');
	
	// Multilanguage Support	
	load_theme_textdomain( 'avod', get_template_directory().'/languages' );
	$locale = get_locale();
	$locale_file = get_template_directory()."/languages/$locale.php";
	if ( is_readable($locale_file) )
		require_once($locale_file);
		
	// Define Theme Content Width
	if ( ! isset( $content_width ) )
		$content_width = 600;
		
	/* XT LAYOUT BUILDER */	
	require("xt_framework/layout-builder/layout-builder.php");
	
	if(!is_admin())
		require("xt_framework/layout-builder/init.php");
	
	/* XT CUSTOM SHORTCODES */
	require("xt_framework/shortcodes/init.php");
	
	/* XT PORTFOLIO */
	require("xt_framework/portfolio/portfolio-init.php");
	
	/* XT Options Panel */
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/xt_framework/options/' );
	// Options Framework
	require_once dirname( __FILE__ ) . '/xt_framework/options/options-framework.php';
	// Fonts Selector Helpers
	require_once dirname( __FILE__ ) . '/xt_framework/options/fonts_functions.php';
	// Print Style Function
	require_once dirname( __FILE__ ) . '/xt_framework/options/print_style.php';
	
	/* XT LAYOUTS */
	require("xt_framework/layouts/layouts-init.php");

	/* XT CUSTOM FUNCTIONS */
	require("xt_framework/custom/header_bg.php");
	require("xt_framework/custom/header_headings.php");

	/* WPML Integration */
	require_once('wpml-integration.php');
		
	// Function to avoid styles at Login Page
	function is_login_page() {
		return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
	}
	
	/* Enqueue Styles */	
	function enqueue_styles() {
		if(!is_admin() && !is_login_page()) :

			wp_register_style( 'museo-fonts', THEME_DIR . '/css/fonts.css', array(), '1', 'all' );
			//wp_enqueue_style( 'museo-fonts' );

			// Museo Slab Fallback
			wp_register_style( 'options_typography_Rokkitt', 'http://fonts.googleapis.com/css?family=Rokkitt:300,400,700,400italic,700italic,100,900', array(), '1', 'all' );
			wp_enqueue_style( 'options_typography_Rokkitt' );

			// Museo Sans Fallback
			wp_register_style( 'options_typography_Droid+Sans', 'http://fonts.googleapis.com/css?family=Droid+Sans:300,400,700,400italic,700italic,100,900', array(), '1', 'all' );
			wp_enqueue_style( 'options_typography_Droid+Sans' );

			// Skeleton Framework Base Classes
			wp_register_style( 'skeleton-fixed', THEME_DIR . '/css/skeleton.css', array(), '1', 'all' );
			wp_enqueue_style( 'skeleton-fixed' );
			
			if(of_get_option('disable_responsive') == false) :
			// Skeleton Framework Responsive Sizes
			wp_register_style( 'skeleton-responsive', THEME_DIR . '/css/skeleton-responsive.css', array(), '1', 'all' );
			wp_enqueue_style( 'skeleton-responsive' );
			endif;
			
			/* Base Style */
			wp_register_style( 'base-style', THEME_DIR . '/css/base.css', array(), '1', 'all' );
			wp_enqueue_style( 'base-style' );

			if(of_get_option('disable_responsive') == false) :
			/* Layout Responsive Style */
			wp_register_style( 'layout-style', THEME_DIR . '/css/layout.css', array(), '1', 'all' );
			wp_enqueue_style( 'layout-style' );
			endif;

			// Includes Main Stylesheet
			wp_enqueue_style("main-style", get_stylesheet_directory_uri() ."/style.css", false, "1.0", "all");
			
			// Includes RLT Styles
			//wp_enqueue_style("rtl-style", get_stylesheet_directory_uri() ."/rtl.css", false, "1.0", "all");

		endif;
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
	
	/*Enqueue Scripts */
	function enqueue_scripts() {
		if(!is_admin() && !is_login_page()) :

			/* Default jQuery */
			wp_enqueue_script( 'jquery' );
			
			// HTML5 Compatibility
			wp_register_script( 'html5-shim', THEME_DIR. '/js/html5.js', array(), null, false );
			wp_enqueue_script( 'html5-shim' );

			/* Fixed Menu */
			wp_register_script( 'jquery-waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), NULL );
			wp_enqueue_script( 'jquery-waypoints' );

			wp_register_script( 'jquery-waypoints-sticky', get_template_directory_uri() . '/js/waypoints-sticky.min.js', array('jquery'), NULL );
			wp_enqueue_script( 'jquery-waypoints-sticky' );

			if(of_get_option('disable_responsive') == false) :
			/* Responsive Menu */
			wp_enqueue_script( 'jquery.mobilemenu', get_template_directory_uri() . '/js/jquery.mobilemenu.js', array('jquery'), NULL );
			wp_enqueue_script( 'mobile-menu-init', get_template_directory_uri() . '/js/mobile-menu-init.js', array('jquery'), NULL );
			$select_menu_localized = array( 'select_page' => __( 'Select a page', 'avod' ) );
			wp_localize_script( 'mobile-menu-init', 'mobile_menu_init_translation', $select_menu_localized );
			endif;

			wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), NULL );
			wp_enqueue_script( 'main-script' );

			$_menuH = 80;
			if(of_get_option('menu_height') != '')
				$_menuH = of_get_option('menu_height');
				
			$_menuFixed = of_get_option('header_fixed');
				
			$menu_settings = array( 'height' => $_menuH,
				'fixed' => $_menuFixed );
			wp_localize_script( 'main-script', 'menu_settings', $menu_settings );

			//wp_enqueue_script( 'search-box', get_template_directory_uri() . '/js/init.js', array('jquery'), NULL );

		endif;
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

	/*== ENABLE CUSTOM MENUS ==**/
	if ( function_exists( 'register_nav_menu' ) ) {
	
		register_nav_menu( 'main_menu', 'Main Menu' );
		register_nav_menu( 'footer_menu', 'Footer Menu' );

	}
	
	/* Sidebar Areas */

	register_sidebar( array(
        'id'          => 'footer-area-1',
        'name'        => 'Footer Area #1',
        'description' => '',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '</h3></div>',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>'
    ) );
	
	register_sidebar( array(
        'id'          => 'footer-area-2',
        'name'        => 'Footer Area #2',
        'description' => '',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '</h3></div>',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>'
    ) );
	
	register_sidebar( array(
        'id'          => 'footer-area-3',
        'name'        => 'Footer Area #3',
        'description' => '',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '</h3></div>',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>'
    ) );
	
	register_sidebar( array(
        'id'          => 'footer-area-4',
        'name'        => 'Footer Area #4',
        'description' => '',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '</h3></div>',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>'
    ) );
	
	add_filter('widget_text', 'do_shortcode');
	
	/**== BLOG POSTS ==**/
	
	if (function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
	}

	// Support to Excerpt in Pages
	add_post_type_support('page', 'excerpt');
	
	if ( function_exists( 'add_image_size' ) ) { 
		//add_image_size( 'blog-size', 560, 9999 );
	}

	// Add Custom Styles to Revolution Layer Manager

	function xt_custom_lm_styles() {
		wp_register_style( 'xt-custom-lm-styles', THEME_DIR . '/css/custom_lm_styles.css', array('dc-settings-css-admin'), '1', 'all' );
		wp_enqueue_style( 'xt-custom-lm-styles' );
	}

	add_action('xt_lm_styles', 'xt_custom_lm_styles', 1);

	/* WPML Flag only Selector */

	function language_selector_flags(){
		if( function_exists('icl_get_languages') ) : 
			$languages = icl_get_languages('skip_missing=0&orderby=code');
			if(!empty($languages)){
				foreach($languages as $l){
					if(!$l['active']) echo '<a href="'.$l['url'].'">';
					echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
					if(!$l['active']) echo '</a>';
				}
			}
		endif;
	}