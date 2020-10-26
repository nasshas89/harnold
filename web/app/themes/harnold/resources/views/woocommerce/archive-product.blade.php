@extends('layouts.app') 

@section('content')

  @include('home.hero')
  <section class="wrapper">
  @include('home.menu-picto')
  </section>
  @dump('archive')

  @dump($product)
@php
  $cart = WC()->cart->get_cart();
 
@endphp




@endsection
