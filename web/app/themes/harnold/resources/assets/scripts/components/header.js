export default {
  init() {
    // JavaScript to be fired on the home page
    $(window).scroll(this.sticky);
    $(window).scroll(this.stickyMob);

    $(window).click(this.clickBtnPromo);

  },
  sticky: function (event) {
    event.preventDefault();

    if (window.scrollY >= 30 && (window.innerWidth >= 900)) {
      $('.header-up').addClass('is-hidden');
      $('.header-harnold').addClass('is-fixe');
      $('.sticky-promo ').addClass('is-active');

    } else if (window.scrollY <= 30 && (window.innerWidth >= 900)) {
      $('.header-up').removeClass('is-hidden');
      $('.header-harnold').removeClass('is-fixe');
      $('.sticky-promo ').removeClass('is-active');
    }
  },

  stickyMob: function (event) {
    event.preventDefault();

    if (window.scrollY >= 5 && (window.innerWidth < 900)) {
      $('.header-harnold__main').addClass('is-fixe-mob');

    } else if (window.scrollY <= 5 && (window.innerWidth < 900)) {
      $('.header-harnold__main').removeClass('is-fixe-mob');
    }
  },

  clickBtnPromo : function (event){
    event.preventDefault();
    console.log('oo')

  },
  
};
