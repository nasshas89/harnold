export default {
    init() {
        let openBurger= $('#js-open-burger');
        openBurger.on('click', this.burgerModal);

    },
        
    burgerModal: function (event) {
        event.preventDefault();
        console.log('oo')
      },
  };