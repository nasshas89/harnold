export default {
    init() {
      // JavaScript to be fired on the home page
     
     let cartPopup= $('.js-cart-click');
     cartPopup.on('click', this.cartModal);

    },
        cartModal : function(){
          $('.cart-modal').addClass('full-modal');
	},

    finalize() {
      // JavaScript to be fired on the home page, after the init JS
    },
  };
  