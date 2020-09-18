@extends('layouts.app')

@section('container')
  <main class="main">
    @include('partials.breadcrumbs')

    @component('components.content-header', [
    'title' => 'Archive of Awards recepients',
    'excerpt' => $excerpt_simple,
    'variant' => $variant,
    'attribution' => $featured_image_attribution,
    'is_search' => false,
  ])
    @endcomponent

    <div class="container flex">
      <div class="w-full">
        @if(have_posts())
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @while(have_posts()) @php the_post() @endphp
            @php($post = get_post())
            @component('components/content-excerpt', [
            'title' =>  get_the_title(),
            'link' => get_permalink(),
            'terms' => App::TermsWithLinks($post),
            'image' => get_the_post_thumbnail_url($post, 'large'),
            'show_meta' => false,
            'is_tall' => true,
            'shadow' => true,
            'meta_type' => 'string',
            'meta_string' => get_field('country'),
            ])@endcomponent

            @endwhile
          </div>
          <div class="flex justify-center">
            {!!  wp_pagenavi() !!}
          </div>
        @else
          <div class="mt-8 text-center">
            <p>No results. Please try with a more general search.</p>
          </div>
        @endif
      </div>
    </div>
@endsection
