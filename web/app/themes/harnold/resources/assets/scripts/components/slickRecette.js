export default {

  init() {
    var slickOptions = {
      arrows: false,
      centerMode: true,
      slidesToShow: 1,
      dots: true,
      mobileFirst: true,

      responsive: [{
          breakpoint: 580,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
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
