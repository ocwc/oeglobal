@extends('layouts.app')

@section('container')
  <main class="main">
    @include('partials.breadcrumbs')

    <div class="container">
      @component('components.content-header', [
        'title' => 'Case Studies',
        'variant' => 'basic',
        'is_search' => false
      ])
      @endcomponent
    </div>

    <div class="container flex">
      <div class="w-full lg:w-1/4">
        @component('components/casestudy-filter', [])@endcomponent
      </div>
      <div class="w-full lg:w-3/4 lg:ml-4">
        @if(have_posts())
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @php $first = true @endphp
            @while(have_posts()) @php the_post() @endphp
            @php($post = get_post())
            @component('components/content-excerpt', [
              'image' => get_the_post_thumbnail_url($post, 'large'),
              'terms' => App::TermsWithLinks($post),
              'link'  => get_permalink($post),
              'title' => get_the_title($post),
              'description' => \Illuminate\Support\Str::words( strip_tags(get_field( 'casestudy_overview', $post )), 64, ' [..]' ),
              'show_meta' => true,
              'featured' => false,
              'is_tall' => true,
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
  </main>
@endsection
