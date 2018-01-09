// Corrado Financial Group

(function($) {

	var scrollTimer = null;

	jQuery.fn.setScrollClass = function() {

		if ( $(window).scrollTop() > 40 ) {
			var isScrolled = true;
		} else {
			var isScrolled = false;
		}

		var hasScrolled = $(this).hasClass('scrolled');

		if ( hasScrolled == false ) {
			if ( isScrolled == true ) {
				$(this).addClass('scrolled');
			}
		} else if ( hasScrolled == true ) {
			if ( isScrolled == false ) {
				$(this).removeClass('scrolled');
			}
		}

	}

	function handleScroll() {
	    scrollTimer = null;
		$('.banner').setScrollClass();
	}

	$(window).scroll(function(){
		// Resize actions are in handleScroll()

	    if (scrollTimer) {
	        clearTimeout(scrollTimer);   // clear any previous pending timer
	    }
	    scrollTimer = setTimeout(handleScroll, 1);   // set new timer

	});

	// Smooth Scrolling
	$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	  });


})(jQuery);