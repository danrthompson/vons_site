<?php
/****************************************************

	CUSTOMIZATION OF XIAOTHEMES SHORTCODES PLUGIN

****************************************************/

/*
	Add custom shortcodes that DON'T need generator
*/

global $XT_CUSTOM_NONGEN;

ob_start();

?>
	/*
	case 'mycustom':
		a = '[myCustom]'+selectedText+'[/my_custom]';
		tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
	break;
	*/

	case 'sub_text':
		a = '[xt_subtext]'+selectedText+'[/xt_subtext]';
		tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
	break;

	case 'align_right':
		a = '[xt_align_right]'+selectedText+'[/xt_align_right]';
		tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
	break;

<?php

$XT_CUSTOM_NONGEN = ob_get_contents();

ob_end_clean();

/*
	Custom Shortcodes that NEED generator
*/

global $XT_CUSTOM_MENU;

ob_start();

?>

	/* Default Example

	// ----------------------
	b.addSeparator();
	// ----------------------
	
		c=b.addMenu({title:"Shopaholic Only"});
			a.addWithDialog(c,"Section Title","section_title");
			c.addSeparator();	
			a.addWithDialog(c,"Contact Form","contact_form");
	*/

	// ----------------------
	b.addSeparator();
	// ----------------------
	
		c=b.addMenu({title:"AVOD Only"});
			a.addWithDialog(c,"Sub Text","sub_text");
			c.addSeparator();
			a.addWithDialog(c,"Align Right","align_right");

<?php

$XT_CUSTOM_MENU = ob_get_contents();

ob_end_clean();

/*
	Custom Shortcodes
*/

// SCRIPTS

function xt_custom_custom_enqueue_scripts() {

	//wp_enqueue_script( "script-id", get_template_directory_uri() . "/url-script", array(''), NULL, false );
}
add_action( 'init', 'xt_custom_custom_enqueue_scripts' );

// STYLES

function xt_custom_custom_enqueue_styles() {

	/*wp_register_style( 'style-id', get_template_directory_uri() . '/style-address', array(), '1', 'all' );
	wp_enqueue_style( 'style-id' );*/
}
add_action( 'init', 'xt_custom_custom_enqueue_styles' );

// CUSTOM SHORTCODES

/*-----------------------------------------------------------------------------------*/
/* Shortcode Template
/*-----------------------------------------------------------------------------------*/

/*function xt_custom_attr($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'attr' => '',
	), $atts));

	return '';
}
add_shortcode('attr', 'xt_custom_attr');*/

/*-----------------------------------------------------------------------------------*/
/* [xt_subtext] Sub Text
/*-----------------------------------------------------------------------------------*/

function xt_subtext($atts, $content = null, $code) {

	return '<div class="sub-text">'.do_shortcode($content).'</div>';
}
add_shortcode('xt_subtext', 'xt_subtext');

/*-----------------------------------------------------------------------------------*/
/* [xt_align_right] Align Right
/*-----------------------------------------------------------------------------------*/

function xt_align_right($atts, $content = null, $code) {

	return '<div class="xt-align-right">'.do_shortcode($content).'</div>';
}
add_shortcode('xt_align_right', 'xt_align_right');