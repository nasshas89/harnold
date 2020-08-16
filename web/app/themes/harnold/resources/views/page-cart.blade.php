@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
    
 @dump('cart')
    @php 
      $cart=WC()->cart;
    @endphp
    @dump($cart)
@endwhile
@endsection
