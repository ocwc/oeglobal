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


    <div class="container">
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
        ])@endcomponent

      @endwhile

      <div class="flex justify-center">
        {!!  wp_pagenavi() !!}
      </div>
    </div>
  </main>
@endsection
