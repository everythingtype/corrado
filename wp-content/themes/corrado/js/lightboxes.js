(function($) {

  var ajaxEnabled = true;

  var modalScrollTop = 0;
	var modalisopen = false;

	function scrollDisable() {

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

  function openlightbox() {
    $('#lightbox').addClass('open');
    $('#lightbox .lightboxinner').addClass('visible');

    scrollDisable();

  }

  function closelightbox() {
    $('#lightbox .lightboxinner').removeClass('visible');

    var dofade = true;

    $('#lightbox .lightboxinner').one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function(event) {
        if ( dofade ) {
          $('#lightbox').removeClass('open');
          dofade = false;
        }
    });

    scrollEnable();

  }

  $(document).ready( function() {

    $( "#lightbox .closebutton" ).click(function() {
      event.preventDefault();

      var thispath = $(this).data("path");
      window.history.replaceState("", "", thispath );

      closelightbox();

    });

    $('#lightbox').on("click", function(event) {
			event.preventDefault();

			var thispath = $(this).find('.closebutton').data("path");
			window.history.replaceState("", "", thispath );

			closelightbox();

		});


    $( ".ajaxlink" ).click(function() {

      if ( ajaxEnabled ) {

        event.preventDefault();

        var thispath = $(this).attr('href');
        var postid = $(this).data("postid");
        var posttype = $(this).data("posttype");

        $('#lightbox').addClass('empty');
        $('#ajaxtarget').html('');
        openlightbox();

        $.ajax({
          url: ajaxloading.ajaxurl,
          type: 'post',
          data: {
            action: 'ajax_action',
    				postid: postid
          },
          success: function( html ) {

            $('#lightbox').removeClass('empty');
            $('#ajaxtarget').html( html );

      			window.history.replaceState("", "", thispath );

    			}
        })

      }

    });

    $(document).ajaxComplete(function(){

      $('.stoppropagation').on("click", function(event) {
  		    event.stopPropagation();
  		});

    })


  });

})(jQuery);
