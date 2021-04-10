$(document).ready(function(){
        
    /*******************************************
     * 
     *  contact number and whats app number
     * 
     * *******************************************/ 

     var tel             = "08049314931";
     var displayPhone    = "080 49314931";
     var whatsApp        = "7624972583";
 
     var projectName     = "Gopalan%20LakeFront%20At%20Electronic%20City";
 
     // phone number 
     $('.phone-number').attr("href", "tel:" + tel);
     $('.phone-number').append(displayPhone);
 
     // whats app
     $('.whatsapp').attr("href", "https://api.whatsapp.com/send?phone=+91"+ whatsApp +"&text=Hi!%20I%20am%20Interested%20In%20"+ projectName +",%20Bengaluru.%20Please%20Share%20Details.");
     $('.whatsapp > span').text("+91 " + whatsApp);
     
     
     /*******************************************
      * 
      *  functions
      * 
      * *******************************************/ 
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