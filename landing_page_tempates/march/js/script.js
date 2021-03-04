$(document).ready(function(){
    $("#hamberger").click(function(){
        $('#header-nav').slideToggle();
    })

    // amenity scrolling
    $('.carousel-wrap .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
          "<i class='fa fa-long-arrow-left'></i>",
          "<i class='fa fa-long-arrow-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 2
          },
          600: {
            items: 3
          },
          800: {
            items: 4
          },
          1400: {
            items: 5
          }
        }
    })

    function switchStyle() {
      if (document.getElementById('styleSwitch').checked) {
        document.getElementById('gallery').classList.add("custom");
        document.getElementById('exampleModal').classList.add("custom");
      } else {
        document.getElementById('gallery').classList.remove("custom");
        document.getElementById('exampleModal').classList.remove("custom");
      }
    }
})