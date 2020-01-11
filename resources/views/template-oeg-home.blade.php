{{--
  Template Name: OEG Static Home Page Template
--}}

@extends('layouts.skeleton')

@section('content')
  @include('partials.header')

  @while(have_posts()) @php the_post() @endphp
    @component('components.oeg-hero', [])@endcomponent

  @endwhile

  @php(do_action('get_footer'))
  @include('components.footer')
@endsection
