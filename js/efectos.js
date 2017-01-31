

      
       $(document).ready(function() {
        $(function(){
          $("audio").on("play", function() {
            $("audio").not(this).each(function(index, audio) {
              audio.pause();
              });});});



         $( "#productionmenu" ).click(function() {
      $( "#productionlist" ).toggle( "slow", function() {
        });


      if( $('#bookinglist').is(":visible") ){
              $( "#bookinglist" ).toggle( "slow", function() {
        });
          }else{
        
          }



     
      });




         $( "#bookingmenu" ).click(function() {
      $( "#bookinglist" ).toggle( "slow", function() {
        });


        if( $('#productionlist').is(":visible") ){
              $( "#productionlist" ).toggle( "slow", function() {
        });
          }else{
        
          }

      });


            $( ".icon" ).click(function() {
      $( "#playlist" ).toggle( "slow", function() {
        });
      });












      });