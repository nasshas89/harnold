
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
    {{-- @php 
      $cart=WC()->cart;
      global $woocommerce;
      $items = $woocommerce->cart->get_cart();

    @endphp --}}
   

    @php do_action('woocommerce_before_mini_cart'); @endphp


    {{woocommerce_cart_totals()}}
    
    @php do_action('woocommerce_widget_shopping_cart_before_buttons'); @endphp
    
    
    
    @php do_action('woocommerce_widget_shopping_cart_after_buttons'); @endphp
    
    @php
        do_action('woocommerce_after_mini_cart');
    @endphp
    
  
 
            </div>  
        </div> 
    </div>


    {{-- {{-- @php do_action( 'woocommerce_before_mini_cart' ); @endphp

{{-- @include('molecules.basket-header')
@include('atoms.separation')

@include('organisms.basket-items')

@include('molecules.promo-code') --}}

{{-- {{woocommerce_cart_totals()}}

@php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); @endphp



@php do_action( 'woocommerce_widget_shopping_cart_after_buttons' ); @endphp

@php
	do_action( 'woocommerce_after_mini_cart' );
@endphp --}} 