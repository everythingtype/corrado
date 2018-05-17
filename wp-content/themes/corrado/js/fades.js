(function($) {

	var fadeResizeTimer = null;
	var pagecolor = null;
	var tempcolor = null;

	jQuery.fn.isBegun = function () {

		var heightToThis = $(this).offset().top;
		var thisHeight = $(this).outerHeight();

		var scrollPosition = $(window).scrollTop();
		var windowHeight = window.innerHeight;

		var midpoint = scrollPosition + ( windowHeight / 2);

		if ( (midpoint >= heightToThis ) ) {
			return true;
		}

	}


	jQuery.fn.isInView = function () {

		var heightToThis = $(this).offset().top;
		var thisHeight = $(this).outerHeight();
		var thisRange = heightToThis + thisHeight;

		var scrollPosition = $(window).scrollTop();
		var windowHeight = window.innerHeight;

		var midpoint = scrollPosition + ( windowHeight / 2);

		if ( (midpoint >= heightToThis ) && ( midpoint <= thisRange ) ) {
			return true;
		}

	}

	function getpagecolor() {

		if ( $('body').hasClass('black') ) {
			pagecolor = 'black';
		} else if ( $('body').hasClass('gray') ) {
			pagecolor = 'gray';
		} else {
			pagecolor = 'white';
		}

	}

	function colorHome() {

		if ( $('.homegrey').isInView() ) {

			// console.log('is ScrolledIntoView');

			if ( tempcolor != 'gray' ) {

				// console.log('tempcolor not gray, setting to gray');

				tempcolor = 'gray';

				$('body').addClass(tempcolor).removeClass(pagecolor);

			} else {

				// console.log('tempcolor is gray');

			}

		} else {

			// console.log(' not ScrolledIntoView');

			if ( tempcolor ) {

				// console.log('theres a tempcolor. removing it');

				$('body').addClass(pagecolor).removeClass(tempcolor);
				tempcolor = null;

			} else {

				// console.log('theres no tempcolor');

			}

		}

	}

	function colorWhywork() {

		if ( $('.contactinclude').isBegun() ) {

			if ( tempcolor != 'white' ) {

				tempcolor = 'white';

				$('body').addClass(tempcolor).removeClass(pagecolor);

			} else {

			}

		} else {

			if ( tempcolor ) {

				$('body').addClass(pagecolor).removeClass(tempcolor);
				tempcolor = null;

			} else {

				// console.log('theres no tempcolor');

			}

		}

	}


  function handleFades() {

		if ( $('.homepage').length != 0 ) {

			colorHome();

		} else if ( $('.whywork').length != 0 ) {

			colorWhywork();

		}

  }

  $(document).ready( function() {

		getpagecolor();
    handleFades();

  });

  $(window).load( function() {

    handleFades();

  });

  $(window).resize( function() {

      if (fadeResizeTimer) {
          clearTimeout(fadeResizeTimer);   // clear any previous pending timer
      }
      fadeResizeTimer = setTimeout(handleFades, 1);   // set new timer

  });

  $(window).scroll( function() {
    handleFades();
  });

})(jQuery);
