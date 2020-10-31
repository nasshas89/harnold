export default {
  init() {
    $(window).scroll(this.launchNumb);
    $(window).resize(this.launchNumb);
    $(window).ready(this.launchNumb);

  

  },
  launchNumb: function () {

    $('.count').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).attr('data-counter'),
      }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now));
        },
      });

    });


  },


};
