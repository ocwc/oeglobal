{{--
  Template Name: Home Page Template
--}}

@extends('layouts.skeleton')

@section('content')
  @include('partials.header')

  @while(have_posts()) @php the_post() @endphp
  @include('partials.content-page')
  @endwhile

  @php(do_action('get_footer'))
  @include('components.footer')
@endsection
