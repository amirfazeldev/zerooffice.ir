$(window).scroll(function(){
               if($(window).scrollTop()>350) {
                   $("#Back-to-Top").show();
               } else {
                   $("#Back-to-Top").hide();
               }
           })
$("#Back-to-Top").click(function(e){
               e.preventDefault();
               $('html,body').animate({scrollTop:0},'500');
           })