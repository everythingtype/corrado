// Corrado Financial Group

(function($) {

	var homeResizeTimer = null;
	var lastScrollPosition = 0;
	var topofpage = true;

	var headerisabsolute = true;
	var headerisfixed = false;

	var scrollingup = false;
	var scrollingdown = false;

	var navisopen = false;

	var modalScrollTop = 0;
	var modalisopen = false;

	function isInternetExplorer() {

	  var rv = -1;
	  if (navigator.appName == 'Microsoft Internet Explorer')
	  {
	    var ua = navigator.userAgent;
	    var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
	    if (re.exec(ua) != null)
	      rv = parseFloat( RegExp.$1 );
	  }
	  else if (navigator.appName == 'Netscape')
	  {
	    var ua = navigator.userAgent;
	    var re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
	    if (re.exec(ua) != null)
	      rv = parseFloat( RegExp.$1 );
	  }

		if ( rv != -1 ) {
			return true;
		}

	}

	function scrollDisable() {

		// console.log('scrollDisable');

		if ( modalisopen == false ) {

			if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {

				modalScrollTop = $('body').scrollTop();

				var wpadminbar = 0;
				if ($('#wpadminbar').length != 0) {
					wpadminbar = $('#wpadminbar').outerHeight();
				}

				var thisOffset = modalScrollTop - wpadminbar;
				var offsetString = "-" + thisOffset + "px";

				$('.scrollingcontent').css({
				    'top': offsetString,
				    'position':'fixed'
				});

			}

			$('body').addClass('hasmodal');

			modalisopen = true;

		}

	}

	function scrollEnable() {

		// console.log('scrollEnable');

		if ( modalisopen == true ) {

			if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {

				$('.scrollingcontent').css({
				    'top': "auto",
				    'position':'static'
				});

				$( "body" ).scrollTop( modalScrollTop );
				modalScrollTop = 0;

			}

			$('body').removeClass('hasmodal');

			modalisopen = false;

		}

	}


	function topnavOpen() {

		// console.log('topnavOpen');

		if ( !navisopen ) {

			navisopen = true;

			$('.topnav').addClass('pinned');
			$('.topnav .shade').addClass('open');
			scrollDisable();

		}

	}

	function topnavClose() {

		// console.log('topnavClose');

		if ( navisopen ) {

			navisopen = false;

			$('.topnav .shade').removeClass('open');

			scrollDisable();

			var dofade = true;

			$('.topnav .shade').one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function(event) {
					if ( dofade ) {
						$('.topnav').removeClass('pinned');
						dofade = false;
					}
			});

			scrollEnable();

		}

	}

	function handleResize() {

		// console.log('handleResize');

		$('.carousel').flickity('resize');
		setupHeights();
		handleScroll();
	}

	function handleScroll() {

		// console.log('handleScroll');

		pinheader();
		pinfooter();
	}


	function headerSetToMidPage() {

		// console.log('headerSetToMidPage');

		$('header').addClass('pinned');
		$('header').addClass('hidden');

		contactButtonShow();

	}

	function headerSetToPageTop() {

		// console.log('headerSetToPageTop');

		scrollingup = false;
		scrollingdown = false;

		$('header').removeClass('hidden');
		$('header').removeClass('pinned');

		contactButtonHide();

	}

	function headerFadeOut() {

		// console.log('headerFadeOut');

		$('header .inner').removeClass('visible')

		$('header .inner').one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function(event) {
			if ( scrollingdown ) {

				$('header').addClass('hidden');

			}

		});

	}

	function headerFadeIn() {

		// console.log('headerFadeIn');

		$('header').removeClass('hidden')
		$('header .inner').addClass("visible");

	}


	function contactButtonHide() {

		// console.log('contactButtonHide');

		$('.contactbutton a').removeClass('visible')

		var dofade = true;

		$('.contactbutton a').one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function(event) {
			if ( dofade ) {

				$('.contactbutton').addClass('hidden');
				dofade = false;
			}

		});

	}

	function contactButtonShow() {

			// console.log('contactButtonShow');

			$('.contactbutton').removeClass('hidden')
			$('.contactbutton a').addClass("visible");

	}

	function pinheader() {

		// console.log('pinheader');

		var scrollPosition = $(window).scrollTop();

		if ( topofpage ) {

			var windowHeight = window.innerHeight;

			if ( scrollPosition < windowHeight ) {

			} else {

				topofpage = false;
				headerSetToMidPage();

			}

		} else {

			var alittlebitofpadding = 0;
			if ($('.alittlebitofpadding').length != 0) {
				alittlebitofpadding = $('.alittlebitofpadding').outerHeight();
			}

			if ( scrollPosition > alittlebitofpadding ) {

				if ( scrollPosition == lastScrollPosition ) {

				} else {

					if ( scrollPosition > lastScrollPosition ) {

						if ( !scrollingdown ) {

							scrollingup = false;
							scrollingdown = true;

							headerFadeOut();

						} else {

						}


					} else {

						if ( !scrollingup ) {

							scrollingdown = false;
							scrollingup = true;

							headerFadeIn();

						} else {

						}

					}

				}

				lastScrollPosition = scrollPosition;

			} else {

				topofpage = true;
				headerSetToPageTop();

			}

		}

	}

	function pinfooter() {

		// console.log('pinfooter');

		var wpadminbar = 0;
		if ($('#wpadminbar').length != 0) {
			wpadminbar = $('#wpadminbar').outerHeight();
		}

		var pagebodyHeight = $('.pagebody').outerHeight();
		var footerHeight = $('footer').outerHeight();
		var windowHeight = window.innerHeight;

		var adjustedPagebodyHeight = pagebodyHeight + footerHeight - windowHeight + wpadminbar;

		var scrollPosition = $(window).scrollTop() + 1;

		if ( scrollPosition >= adjustedPagebodyHeight ) {
			$('.sitefooter').addClass('pinned');
		} else {
			$('.sitefooter').removeClass('pinned');
		}

	}

	function setupHeights() {

		// console.log('setupHeights');

		var wpadminbar = 0;
		if ($('#wpadminbar').length != 0) {
			wpadminbar = $('#wpadminbar').outerHeight();
		}

		$('.adminspacer').css({'height': wpadminbar + 'px'});

		if ($('.navinner').length != 0) {
			$('.navinner').css({'top': wpadminbar + 'px'});
		}

		if ($('#lightbox').length != 0) {
			$('#lightbox').css({'top': wpadminbar + 'px'});
		}

		var sitefooter = 0;
		if ($('.sitefooter').length != 0) {
			sitefooter = $('.sitefooter').outerHeight();
		}

		$('.pagebody').css({'margin-bottom': sitefooter + 'px'});

		var tipswrap = 0;
		if ($('.tipswrap').length != 0) {
			tipswrap = $('.tipswrap').outerHeight();
		}

		var negativemargin = sitefooter + tipswrap;

		$('.sitefooter').css({'margin-top': '-' + negativemargin + 'px'});

	}

	$(document).ready( function() {

		if ( isInternetExplorer() ) {
			$('body').addClass('ie');
		}

		$( ".menubutton" ).click(function() {
		  topnavOpen();
		});

		$( ".closebutton" ).click(function() {
		  topnavClose();
		});

		$( ".tapout" ).click(function() {
		  topnavClose();
		});

		$( ".ourservices .service button" ).click(function() {
				$(this).parents('.service').find('.fold').slideToggle(300, function() {
					$(this).parents('.service').toggleClass('open');
  			});

		});

		$('.carousel').flickity({
			wrapAround: true,
			arrowShape: 'M70.97 100 74.18 97.11 31.64 50 74.18 2.89 70.97 0 25.82 50 70.97 100'
		});

		handleResize();

	});

	$(window).load( function() {

		handleResize();

	});

	$(window).resize( function() {

	    if (homeResizeTimer) {
	        clearTimeout(homeResizeTimer);   // clear any previous pending timer
	    }
	    homeResizeTimer = setTimeout(handleResize, 1);   // set new timer

	});

	$(window).scroll( function() {

		handleScroll();

	});

})(jQuery);
