 $('#know').owlCarousel({
     loop: false,
     margin: 0,
     nav: false,
     navText: [
         "<i class='fa fa-caret-left'></i>",
         "<i class='fa fa-caret-right'></i>"
     ],
     autoplay: false,
     autoplayHoverPause: false,
     responsive: {
         0: {
             items: 1
         },
         600: {
             items: 3
         },
         1000: {
             items: 5
         }
     }
 })

 $('#best').owlCarousel({
     loop: false,
     margin: 30,

     navText: [
         '<i class="fas fa-chevron-left arrow-slider slider-left"> <div class = "circle left"></div></i>',
         '<i class="fas fa-chevron-right arrow-slider slider-right"><div class = "circle left"></div></i>'
     ],
     dots: true,
     nav: true,
     autoplay: false,
     autoplayHoverPause: false,
     responsive: {
         0: {
             items: 1
         },
         600: {
             items: 3
         },
         1000: {
             items: 5
         }
     }
 })