@extends('layouts.app')

@section('content')
@php do_action( 'woocommerce_account_navigation' ); @endphp

<div class="woocommerce-MyAccount-content">
	@dump('my-account')
	@php the_content() @endphp
</div>
 
 
@endsection
