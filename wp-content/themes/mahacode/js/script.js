jQuery(document).ready(function ($) {
    "use strict"

////Add Active Class For Menu Links
//    $(".all-menu .menu-content .menu li a:first-child").addClass("active");
//    $(".all-menu .menu-content .menu li a").click(function(){
//        $(this).addClass("active").siblings().removeClass("active");
//    });
    
    $(".menu-button").click(function(){
        $(this).toggleClass("go");
        $(".all-menu .menu-content .menu").slideToggle();
    });
    
    

    
    
	$('#fullpage').fullpage({
        controlArrows: true,
    });
            $("[data-src]").each(function() {
            var backgroundImage = $(this).attr("data-src");
            $(this).css("background-image", "url(" + backgroundImage + ")");
        });
});
