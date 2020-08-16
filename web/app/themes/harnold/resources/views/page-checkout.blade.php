@extends('layouts.app')

@section('content')
@dump('checkout')
@while(have_posts()) @php the_post() @endphp
 
@endwhile
@endsection
