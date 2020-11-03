export default {
    init() {
        let openBurger= $('#js-open-burger');
        openBurger.on('click', this.burgerModal);

        let closeButton= $('.close-button');
        closeButton.on('click', this.closeburgerModal);

    },
        
    burgerModal: function (event) {
        event.preventDefault();
        $('.modal-menu-mobile').addClass('is-active');
        $('body').addClass('hidden-scroll');
      },

      closeburgerModal: function (event) {
        event.preventDefault();
        $('.modal-menu-mobile').removeClass('is-active');
        $('body').removeClass('hidden-scroll');
      },
  };

  