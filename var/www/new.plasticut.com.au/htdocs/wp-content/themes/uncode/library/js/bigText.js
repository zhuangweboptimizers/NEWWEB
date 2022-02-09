(function($) {
	"use strict";

	UNCODE.bigText = function(el) {
	if (el == undefined) {
		el = $('body');
	}
	$.each($('.bigtext', el), function(index, val) {
		$(val).bigtext({
			minfontsize: 24
		});
		if (!$(val).parent().hasClass('blocks-animation') && !$(val).hasClass('animate_when_almost_visible')) $(val).css({
			opacity: 1
		});
		requestTimeout(function() {
			if ($(val).find('.animate_when_almost_visible').length != 0) {
				$(val).css({opacity: 1});
			}
		}, 400);
	});
};


})(jQuery);
