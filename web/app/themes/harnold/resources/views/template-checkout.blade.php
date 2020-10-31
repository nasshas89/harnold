{{--
  Template Name: Paiement
--}}

@extends('layouts.app')

@section('content')
	<div class="checkout-page container">
		{!! do_shortcode('[woocommerce_checkout]') !!}
	</div>
@endsection
