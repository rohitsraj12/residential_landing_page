$(document).ready(function(){
    $("#hamburger").click(function(){
        $("#header-nav").slideToggle();
    })

    
    // scroll down fixed body header 
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 600) {
            $("#body-header").addClass("header__fixed");
        } else {
            $("#body-header").removeClass("header__fixed");
        }
    });
})