export default {
    init() {
        let openBurger= $('#js-open-burger');
        openBurger.on('click', this.burgerModal);

    },
        
    burgerModal: function (event) {
        event.preventDefault();
        $('.modal-menu-mobile').addClass('is-active');
        $('body').addClass('hidden-scroll');
      },
  };