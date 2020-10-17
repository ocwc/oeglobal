@extends('layouts.app')

@section('container')
  <main class="main">
    @include('partials.breadcrumbs')
    <div class="container">
      @component('components.content-header', [
        'title' => 'CCCOER 10th Anniversary Retrospectives',
        'variant' => 'basic',
        'is_search' => false
      ])
      @endcomponent
    </div>

    <div class="container">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
        @php $first = true @endphp
        @while(have_posts()) @php the_post() @endphp
        @php($post = get_post())
        @component('components/content-excerpt', [
          'image' => get_the_post_thumbnail_url($post, 'large'),
          'link'  => get_permalink($post),
          'title' => get_the_title($post),
          'show_meta' => false,
          'featured' => false,
          'is_tall' => true
          ])@endcomponent
        @endwhile
      </div>

      <div class="flex justify-center">
        {!!  wp_pagenavi() !!}
      </div>
    </div>
  </main>
@endsection
