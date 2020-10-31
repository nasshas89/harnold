{{--
  Template Name: Compte
--}}


@extends('layouts.app')

@section('content')


<div class="woocommerce-MyAccount-content">
	@dump('my-account')
	{!! do_shortcode('[woocommerce_my_account]') !!}
	 
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
