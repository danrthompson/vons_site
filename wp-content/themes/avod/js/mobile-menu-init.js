
jQuery(document).ready( function($) {
	$('#top-menu ul').mobileMenu({
		switchWidth: 768,                   //width (in px to switch at)
		topOptionText: mobile_menu_init_translation.select_page,     //first option text
		indentString: '&nbsp;&nbsp;&nbsp;'  //string for indenting nested items
	});
});