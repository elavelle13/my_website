$(document).ready(function() {
  $(".skills-container").hide();  
    $(".courses-container").hide();  
        $('#skills').click(function() {
          $('#courses').not(this).removeClass("active");
                $(this).toggleClass("active");
                  $('.skills-container').slideToggle("fast");
                    $( ".courses-container" ).hide( "fast" );
                      
        });
    });

 $(document).ready(function() {
        $('#courses').click(function() {
          $('#skills').not(this).removeClass("active");
                $(this).toggleClass("active");
                  $('.courses-container').slideToggle("fast");
                    $( ".skills-container" ).hide( "fast" );
                      
        });
    });
