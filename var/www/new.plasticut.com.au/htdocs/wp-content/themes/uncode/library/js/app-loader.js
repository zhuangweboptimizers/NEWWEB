/* ----------------------------------------------------------
 * Uncode App Loader
 * ---------------------------------------------------------- */

(function($) {
    "use strict";

		UNCODE.init = function() {
		var wfl_check = false, wfl_request, waypoint_request;
		UNCODE.preventDoubleTransition();
		UNCODE.utils();
		if (typeof UNCODE.share !== 'undefined') {
			UNCODE.share();
		}
		if (typeof UNCODE.tooltip !== 'undefined') {
			UNCODE.tooltip();
		}
		if (typeof UNCODE.counters !== 'undefined') {
			UNCODE.counters();
		}
		if (typeof UNCODE.countdowns !== 'undefined') {
			UNCODE.countdowns();
		}
		if (typeof UNCODE.tabs !== 'undefined') {
			UNCODE.tabs();
		}
		if (typeof UNCODE.collapse !== 'undefined') {
			UNCODE.collapse();
		}
		if (typeof UNCODE.bigText !== 'undefined') {
			UNCODE.bigText();
		}
		UNCODE.menuSystem();
		if (typeof UNCODE.bgChanger !== 'undefined') {
			UNCODE.bgChanger();
		}
		if (typeof UNCODE.magicCursor !== 'undefined') {
			UNCODE.magicCursor();
		}
		if (typeof UNCODE.magneticCursor !== 'undefined') {
			UNCODE.magneticCursor();
		}
		if (typeof UNCODE.dropImage !== 'undefined') {
			UNCODE.dropImage();
		}
		if (typeof UNCODE.postTable !== 'undefined') {
			UNCODE.postTable();
		}
		if (typeof UNCODE.rotatingTxt !== 'undefined') {
			UNCODE.rotatingTxt();
		}
		if (typeof UNCODE.okvideo !== 'undefined') {
			UNCODE.okvideo();
		}
		if (typeof UNCODE.backgroundSelfVideos !== 'undefined') {
			UNCODE.backgroundSelfVideos();
		}
		UNCODE.tapHover();
		if (typeof UNCODE.isotopeLayout !== 'undefined') {
			UNCODE.isotopeLayout();
		}
		if (typeof UNCODE.justifiedGallery !== 'undefined') {
			UNCODE.justifiedGallery();
		}
		if (typeof UNCODE.lightbox !== 'undefined') {
			UNCODE.lightbox();
		}
		if (typeof UNCODE.carousel !== 'undefined') {
			UNCODE.carousel($('body'));
		}
		if (typeof UNCODE.lettering !== 'undefined') {
			UNCODE.lettering();
		}
		UNCODE.animations();
		if (typeof UNCODE.stickyElements !== 'undefined' && !SiteParameters.is_frontend_editor) {
			UNCODE.stickyElements();
		}
		if (typeof UNCODE.twentytwenty !== 'undefined') {
			UNCODE.twentytwenty();
		}
		UNCODE.disableHoverScroll();
		UNCODE.printScreen();
		if (typeof UNCODE.particles !== 'undefined') {
			UNCODE.particles();
		}
		if (typeof UNCODE.filters !== 'undefined') {
			UNCODE.filters();
		}
		if (typeof UNCODE.widgets !== 'undefined') {
			UNCODE.widgets();
		}
		if (typeof UNCODE.unmodal !== 'undefined') {
			UNCODE.unmodal();
		}
		if (typeof UNCODE.checkScrollForTabs !== 'undefined') {
			if ( !UNCODE.isFullPage ) {
				UNCODE.checkScrollForTabs();
			}
		}
		if (typeof UNCODE.onePage !== 'undefined') {
			UNCODE.onePage(UNCODE.isMobile);
		}
		if (typeof UNCODE.fullPage !== 'undefined') {
			$(document).ready(function(){
				UNCODE.fullPage();
			});
		}
		if (typeof UNCODE.skewIt !== 'undefined') {
			UNCODE.skewIt();
		}
		if (typeof UNCODE.rotateIt !== 'undefined') {
			UNCODE.rotateIt();
		}
		if (typeof UNCODE.textMarquee !== 'undefined') {
			UNCODE.textMarquee();
		}
		if (typeof UNCODE.verticalText !== 'undefined') {
			UNCODE.verticalText();
		}
		if (typeof UNCODE.revslider !== 'undefined') {
			UNCODE.revslider();
		}
		if (typeof UNCODE.layerslider !== 'undefined') {
			UNCODE.layerslider();
		}
		$(window).on('load',function(){
			clearRequestTimeout(waypoint_request);
			waypoint_request = requestTimeout( function(){
				Waypoint.refreshAll();
			}, 1000);

			if (typeof UNCODE.parallax !== 'undefined') {
				UNCODE.parallax();
			}
		});
	}

	if ( ! SiteParameters.is_frontend_editor ) {
		UNCODE.init();
	}


})(jQuery);
