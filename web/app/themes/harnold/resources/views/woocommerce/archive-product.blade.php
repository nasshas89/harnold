@extends('layouts.app') 

@section('content')

  @include('home.hero')
  <section class="wrapper">
  @include('home.menu-picto')
  </section>
  @dump('archive')

@endsection

{{-- @dump($wc->cart) --}}

