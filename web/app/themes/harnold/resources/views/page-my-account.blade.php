@extends('layouts.app')

@section('content')
@php do_action( 'woocommerce_account_navigation' ); @endphp

<div class="woocommerce-MyAccount-content">
	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
</div>

 @dump('myaccount')
 
 
@endsection
