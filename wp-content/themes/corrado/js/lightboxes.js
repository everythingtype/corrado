(function($) {

  var ajaxEnabled = true;

  function populatelightbox(html) {
    $('#ajaxtarget').html( html );
    openlightbox();
  }

  function openlightbox() {
    $('#lightbox').addClass('open');
  }

  function closelightbox() {
    $('#lightbox').removeClass('open');
  }

  $(document).ready( function() {

    $( "#lightbox .closebutton" ).click(function() {
       closelightbox();
    });

    $( ".ajaxlink" ).click(function() {

      if ( ajaxEnabled ) {

        event.preventDefault();

        var postid = $(this).data("postid");
        var posttype = $(this).data("posttype");

        $.ajax({
          url: ajaxloading.ajaxurl,
          type: 'post',
          data: {
            action: 'ajax_action',
    				postid: postid,
    				posttype: posttype
          },
          success: function( html ) {
    				populatelightbox(html);
    			}
        })

      }

    });

  });

})(jQuery);
