  jQuery(document).ready(function($){
    $('.testimonial-slider').slick({
      dots: true,
      arrows: false,
      autoplay: false,
      autoplaySpeed: 3000,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });
  });
