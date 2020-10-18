
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
    @php
      foreach($items as $item => $values) { 
        $_product =  wc_get_product( $values['data']->get_id() );
        //product image
        $getProductDetail = wc_get_product( $values['product_id'] );
        echo $getProductDetail->get_image(); // accepts 2 arguments ( size, attr )

        echo "<b>".$_product->get_title() .'</b>  <br> Quantity: '.$values['quantity'].'<br>'; 
        $price = get_post_meta($values['product_id'] , '_price', true);
        echo "  Price: ".$price."<br>";
        /*Regular Price and Sale Price*/
        echo "Regular Price: ".get_post_meta($values['product_id'] , '_regular_price', true)."<br>";
        echo "Sale Price: ".get_post_meta($values['product_id'] , '_sale_price', true)."<br>";
    }
    @endphp
            </div>  
        </div> 
    </div>
