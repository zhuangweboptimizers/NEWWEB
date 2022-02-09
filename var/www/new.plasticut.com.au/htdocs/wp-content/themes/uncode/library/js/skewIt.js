(function($) {
	"use strict";

	UNCODE.skewIt = function() {

	if ( $('body').hasClass('compose-mode') ) {
		return;
	}

	var justscrolled = false;

	var loadSkewIt = function(){

		var $pageHeader = $('#page-header'),
			$page_body = $('.page-body'),
			$header_skew = $('.uncode-skew.vc_row[data-parent]', $pageHeader);

		if ( $header_skew.length ) {
			$pageHeader.addClass('uncode-skew').css({
				position: 'relative',
				zIndex: 1
			});
			$header_skew.removeClass('uncode-skew');
			$page_body.css({
				position: 'relative',
				zIndex: 0
			});
		}

		var $skew = $('.uncode-skew'),
			stopSkewing,
			lastOffset = 0,
			lastDate = Date.now();

		if ( ! $skew.length ) {
			return;
		}

		var dropSkew = function(){
			if ( UNCODE.wwidth < UNCODE.mediaQuery )
				return;

			$skew.each(function(){
				var $this = $(this),
					$drop = $('.t-entry-drop:not(.drop-parent)', $this);

				if ( $drop.length ) {
					$this.css({
						'transform': 'skew(0)'
					});
					var bound = $this[0].getBoundingClientRect();
					$drop.css({
						left: bound.x * -1,
						top: bound.y * -1,
					});
				}
			});
		};
		dropSkew();

		$(window).on('resize', dropSkew);

		window.addEventListener( 'scroll', function() {

			if ( justscrolled !== true ) {
				justscrolled = true;
				return;
			}

			window.clearRequestTimeout( stopSkewing );

			var now = Date.now(),
				delayInMs = now - lastDate,
				offset = window.pageYOffset || window.document.documentElement.scrollTop,
				newOffset = offset - lastOffset,
				speed = Math.pow((newOffset / delayInMs), 3) * -1,
				body = document.body,
				html = document.documentElement,
				docH = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight ),
				wait = 50,
				maxSpeed = UNCODE.wwidth > UNCODE.mediaQuery ? 1 : 2;

			if ((lastDate + wait - now) < 0) {

				lastDate = now;
				lastOffset = offset;

				if ( speed > 6 ) {
					speed = 6;
				} else if ( speed < -6 ) {
					speed = -6;
				}

				if ( speed > 2 && offset < UNCODE.wheight ) {
					speed = 2;
				} else if ( speed < -2 && ( offset + (UNCODE.wheight*2) ) > docH ) {
					speed = -2;
				}

				gsap.killTweensOf($skew);
				gsap.to( $skew, {
					duration: 0.2,
					skewY: (speed * maxSpeed) + "deg",
					ease: Power0.easeNone,
					//transformPerspective: 900,
					transformOrigin: 'center',
					//force3D: true
				});

			}

			stopSkewing = requestTimeout(function() {
				gsap.killTweensOf($skew);
				gsap.to( $skew, {
					duration: 0.5,
					skewY: "0deg",
					ease: Power0.easeNone,
					//transformPerspective: 900,
					transformOrigin: 'center',
					//force3D: true,
					ease: Expo.easeOut,
				});

				$skew.each(function(){
					var $this = $(this),
						$drop = $('.t-entry-drop:not(.drop-parent)', $this);

					if ( $drop.length ) {
						var bound = $this[0].getBoundingClientRect()
						$drop.css({
							left: bound.x * -1,
							top: bound.y * -1,
						});
					}
				});

			}, 200);

		}, false);

	};

	$(window).on('load', loadSkewIt);

};


})(jQuery);
