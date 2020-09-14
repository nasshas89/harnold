export default {
    init() {
      // JavaScript to be fired on the home page
     
     let cartPopup= $('.js-cart-click');
     cartPopup.on('click', this.cartModal);

     let closebtn=$('.js-closeModalCart');
     closebtn.on('click', this.ClosecartModal);

    },
        cartModal : function(){
          $('.sidenav').addClass('div-opening');
          $('body').addClass('body-right');
          
          $('.sidenav').removeClass('div-opening-close');
          $('body').removeClass('body-right-close');

          $('html').addClass('hidden-scroll');
        },
          ClosecartModal: function(event){
            event.preventDefault();
            $('.sidenav').addClass('div-opening-close');
            $('body').addClass('body-right-close');
            $('html').removeClass('hidden-scroll');
	},

    finalize() {
      // JavaScript to be fired on the home page, after the init JS
    },
  };
  