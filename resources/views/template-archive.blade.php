{{--
  Template Name: Archive (Post)
--}}

@extends('layouts.app')

@section('container')
  <main class="main">
    @include('partials.breadcrumbs')
    <div class="container">
      @component('components.content-header', [
        'title' => 'News Archive',
        'variant' => 'basic',
        'is_search' => false
      ])
      @endcomponent
    </div>


    <div class="container">
      @php $first = true @endphp
      @while ($archive_posts->have_posts()) @php $archive_posts->the_post() @endphp
        @php($post = get_post())
        @component('components/content-excerpt', [
        'image' => get_the_post_thumbnail_url($post, 'large'),
        'terms' => App::TermsWithLinks($post),
        'link'  => get_permalink($post),
        'title' => get_the_title($post),
        'description' => get_the_excerpt($post),
        'show_meta' => true,
        'featured' => false,
        ])@endcomponent
      @endwhile

      <div class="flex justify-center">
        {!!  wp_pagenavi([ 'query' => $archive_posts ]) !!}
      </div>
    </div>
  </main>
@endsection
