export default {

  init() {
    var slickOptions = {
      centerMode: true,
      slidesToShow: 1,
      dots: true,
      
      mobileFirst: true,
      adaptiveHeight: true,

      responsive: [{
          breakpoint: 580,
          settings: {
            slidesToShow: 1,
            adaptiveHeight: true,
          },
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            adaptiveHeight: true,
            arrows: true,
      prevArrow: '<button class="sliderArrow sliderArrow--left"></button>',
      nextArrow: '<button class="sliderArrow sliderArrow--right"></button>',
          },
        },
      ],
    };


    // JavaScript to be fired on the home page
    $('.recette__slick').slick(slickOptions);


    $(window).on('resize', function () {
      if ($(window).width() < 992 && $('.recette__slick').length === 0) {

        $('.recette__slick').slick(slickOptions);

      }
    });
    


  },

};
