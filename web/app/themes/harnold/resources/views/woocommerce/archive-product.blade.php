@extends('layouts.app') 

@section('content')

   @include('home.hero') 
     <section class="wrapper"> 
     @include('home.menu-picto') 
    </section>
    @include('home.block-recette-home') 
@endsection


{{-- @dump('archive')

@dump($product)
@php
$cart = WC()->cart->get_cart();

@endphp --}}
