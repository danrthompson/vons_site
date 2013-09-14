jQuery(document).ready(function() {

	/* Scroll to Top */
	jQuery("#back-top-wrapper a").click(function() {
		jQuery("html, body").animate({
			scrollTop: "0px"
		}, {
			duration: 500,
			easing: "swing"
		});
		return false;
	});

	if(menu_settings.fixed) {

		/* Fixed Header */
		jQuery('.fixed-header #header-wrapper').waypoint('sticky');

		var dScroll = 80;

		var cHeight = jQuery('.fixed-header #header-wrapper').height();
		var dHeight = 50;
		var perStep = Math.abs(dHeight - cHeight) / dScroll;

		jQuery(window).scroll(function() {

			var cScroll = jQuery(window).scrollTop();

			if(cScroll <= dScroll) {
				//jQuery('.fixed-header #header-wrapper').height(cHeight - ( cHeight * (cScroll / 100) ) );
				//jQuery('.fixed-header #header-wrapper').height(cHeight - cScroll);
				var _c = cHeight - ( perStep * cScroll );
				jQuery('.fixed-header #header-wrapper, 	#top-menu nav > ul > li > a, header .logo-wrapper').height( _c );
				jQuery('#top-menu nav > ul > li > a, header .logo-wrapper').css('line-height', _c + 'px' );
				//console.log( dScroll * ( cScroll / 100 ) );
			}
			else {
				jQuery('.fixed-header #header-wrapper, 	#top-menu nav > ul > li > a, header .logo-wrapper').height(dHeight);
				jQuery('#top-menu nav > ul > li > a, header .logo-wrapper').css('line-height', dHeight + 'px' );
			}
		});
	}

});
