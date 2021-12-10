$(document).ready(function(){
    
    var isMenuopened = false;
    
    $(".menu-icon").click(function(){
        
        if(isMenuopened) {
            $(".menu-icon").removeClass("Active");
            $("body").removeClass("open-menu");
        }
        else{
            $(".menu-icon").addClass("Active");
            $("body").addClass("open-menu");
        }
        isMenuopened = !isMenuopened;
    });
    
});