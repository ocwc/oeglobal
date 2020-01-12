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

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-excerpt')
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
