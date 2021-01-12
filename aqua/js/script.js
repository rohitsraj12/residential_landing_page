$(document).ready(function(){
    $("#hamburger").click(function(){
        $("#header-nav").slideToggle();
    })

    
    // scroll down fixed body header 
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 600) {
            // $("#body-header").addClass("header__fixed");
            $("#body-header").css({
                width: '100%',
                position: 'fixed',
                background: "rgba(255, 255, 255, 0.96)",
                'z-index': '99'
            });
        } else {
            // $("#body-header").removeClass("header__fixed");
            $("#body-header").css({
                position: 'absolute',
                background: 'rgba(255, 255, 255, 0.87)'
            });
        }
    });
})