@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
    
 @dump('cart')
 @php the_content() @endphp
@endwhile
@endsection
