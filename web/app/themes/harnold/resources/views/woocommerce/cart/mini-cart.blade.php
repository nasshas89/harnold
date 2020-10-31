@php do_action('woocommerce_before_mini_cart'); @endphp


{{woocommerce_cart_totals()}}

@php do_action('woocommerce_widget_shopping_cart_before_buttons'); @endphp



@php do_action('woocommerce_widget_shopping_cart_after_buttons'); @endphp

@php
	do_action('woocommerce_after_mini_cart');
@endphp
