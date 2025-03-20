$(document).ready(function(){
  $('.news-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      centerMode: false,
      focusOnSelect: true,
      prevArrow: $('.news-prev'),
      nextArrow: $('.news-next'),
      responsive: [
          {
              breakpoint: 992,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
              }
          },
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  centerMode: true,
                  centerPadding: '40px'
              }
          }
      ]
  });
});