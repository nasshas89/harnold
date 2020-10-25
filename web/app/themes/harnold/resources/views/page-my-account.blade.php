@extends('layouts.app')

@section('content')
@php do_action( 'woocommerce_account_navigation' ); @endphp

<div class="woocommerce-MyAccount-content">
	@dump('my-account')
	
	 
{{-- 
	@dump($cat_product) 
	@dump($all_product)

  @foreach ($cat_product as $item)
	@if($item->slug == 'fruit')
	 <p>Nass top</p>
	 @endif

  @endforeach --}}

 @dump($product_by_fruits)
 @dump($product_by_legumes)
</div>
 
@endsection
