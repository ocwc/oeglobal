@extends('layouts.app')

@section('container')
  @include('partials.breadcrumbs')
  @include('partials.search-header')

  @if (!have_posts())
    <article class="container">
      <div class="content lg:mb-6 lg:p-6 w-full">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
    </article>
  @endif

  <article class="container">
    @while(have_posts()) @php the_post() @endphp
    @php($post = get_post())
    @if(get_post_type() === 'award')
      @component('components/content-excerpt', [
        'title' =>  get_the_title(),
        'link' => get_permalink(),
        'terms' => array_merge([0 => ['name' => get_field('year')]], App::TermsWithLinks($post, 'award_category')),
        'image' => get_the_post_thumbnail_url($post, 'large'),
        'show_meta' => false,
        'is_tall' => false,
        'shadow' => true,
        'meta_type' => 'string',
        'meta_string' => get_field('institution') ? get_field('institution') . ', ' . get_field('country') : get_field('country'),
        ])@endcomponent
    @else
      @include('partials.content-excerpt')
    @endif
    @endwhile
  </article>

  <div class="container">
    <div class="flex justify-center">
      {!!  wp_pagenavi() !!}
    </div>
  </div>
@endsection
