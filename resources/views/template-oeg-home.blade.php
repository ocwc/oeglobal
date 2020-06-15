{{--
  Template Name: OEG Static Home Page Template
--}}

@extends('layouts.skeleton')

@section('content')
  @include('partials.header')

  @while(have_posts()) @php the_post() @endphp
    @component('components.oeg-featured',
      [
          'featured_items' => $get_featured,
          'spotlight_items' => $get_spotlight
      ])@endcomponent
    @component('components.oeg-projects', [])@endcomponent
    @component('components.oeg-highlight', [])@endcomponent
    @include('partials.home-news')
  @endwhile

  @php(do_action('get_footer'))
  @include('components.footer')
@endsection
