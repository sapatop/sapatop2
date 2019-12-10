$(document).ready(function(){
  $('.owl-carousel').owlCarousel(
    {

      responsiveClass:true,
      responsive:{

          0:{
              items: 1,
      margin: 16,
      loop: true,
      stagePadding: 64,
      nav: true,
      dots: false,
      dotsEach: true,
      autoplay: true,
      autoplaySpeed: 500,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
          },

          600:{
              items: 2,
      margin: 16,
      loop: true,
      stagePadding: 64,
      nav: true,
      dots: false,
      dotsEach: true,
      autoplay: true,
      autoplaySpeed: 500,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
          },

          1000:{
              items: 4,
      margin: 16,
      loop: true,
      stagePadding: 64,
      nav: true,
      dots: false,
      dotsEach: false,
      autoplay: true,
      autoplaySpeed: 500,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
          }

        }
      }
  );

});