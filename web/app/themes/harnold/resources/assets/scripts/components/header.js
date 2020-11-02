export default {
  init() {
    // JavaScript to be fired on the home page
    $(window).scroll(this.sticky);
  },
  sticky: function (event) {
    event.preventDefault();
    if (window.scrollY >= 30) {
      $('.header-up').addClass('is-hidden');
      $('.header-harnold').addClass('is-fixe');
    } else if (window.scrollY <= 30) {
      $('.header-up').removeClass('is-hidden');
      $('.header-harnold').removeClass('is-fixe');
    }
  },
  finalize() {

  },
};
