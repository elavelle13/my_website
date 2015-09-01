$(document).ready(function(){
      $(".about-container").show();
        $('#about').toggleClass("active");
	    	$('#media').not(this).removeClass("active");
	           $('#web').not(this).removeClass("active");
	              $('#resume').not(this).removeClass("active");
	                    $( ".media-container" ).hide( "fast" );
	                      $( ".web-container" ).hide( "fast" );
	                        $( ".resume-container" ).hide( "fast" );
    });

    
   $(document).ready(function() {
        $('#media').click(function() {
          $('#about').not(this).removeClass("active");
            $('#web').not(this).removeClass("active");
              $('#resume').not(this).removeClass("active");
                $(this).toggleClass("active");
                  $('.media-container').slideToggle("fast");
                    $( ".about-container" ).hide( "fast" );
                      $( ".resume-container" ).hide( "fast" );
                        $( ".web-container" ).hide( "fast" );
        });
    });

   $(document).ready(function() {
        $('#about').click(function() {
          $('#media').not(this).removeClass("active");
            $('#web').not(this).removeClass("active");
              $('#resume').not(this).removeClass("active");
                $(this).toggleClass("active");
                  $('.about-container').slideToggle("fast");
                    $( ".media-container" ).hide( "fast" );
                      $( ".web-container" ).hide( "fast" );
                        $( ".resume-container" ).hide( "fast" );

        });
    });

      $(document).ready(function() {
        $('#web').click(function() {
          $('#about').not(this).removeClass("active");
            $('#media').not(this).removeClass("active");
              $('#resume').not(this).removeClass("active");
                $(this).toggleClass("active");
                  $('.web-container').slideToggle("fast");
                    $( ".about-container" ).hide( "fast" );
                      $( ".media-container" ).hide( "fast" );
                        $( ".resume-container" ).hide( "fast" );
        });
    });

   $(document).ready(function() {
        $('#resume').click(function() {
          $('#about').not(this).removeClass("active");
            $('#media').not(this).removeClass("active");
              $('#web').not(this).removeClass("active");
                $(this).toggleClass("active");
                  $('.resume-container').hide("fast");
                    $( ".about-container" ).hide( "fast" );
                      $( ".media-container" ).hide( "fast" );
                        $( ".web-container" ).hide( "fast" );
        });

    });

