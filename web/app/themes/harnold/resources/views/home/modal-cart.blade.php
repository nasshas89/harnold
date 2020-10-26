
    <div class="sidenav">
        <div class="bloc-sidenav">
            <div class="cart-modal-up">
                <div class="picto-cart-up">
                    <img src="@asset('images/cart.svg')" alt="" >
                </div>
                <p>Votre panier</p>    
                {{-- <a href="" class="js-closeModalCart" >&times;</a> --}}
                <div class="cross-cart-up">
                    <img class="js-closeModalCart" src="@asset('images/cross.svg')" alt="" >
                </div>
            </div>
            <div class="">
    @php 
      $cart=WC()->cart;
      global $woocommerce;
      $items = $woocommerce->cart->get_cart();

    @endphp
  
 
            </div>  
        </div> 
    </div>
