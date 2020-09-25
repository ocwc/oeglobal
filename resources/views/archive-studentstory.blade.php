@extends('layouts.app')

@section('container')
  <main class="main">
    @include('partials.breadcrumbs')
    <div class="container">
      @component('components.content-header', [
        'title' => 'Student stories',
        'variant' => 'basic',
        'is_search' => false,
      ])
      @endcomponent
    </div>


    <div class="container">
      @php $first = true @endphp
      @while(have_posts()) @php the_post() @endphp
      @if ($first && $site === 'oeglobal')
        @php $first = false @endphp
        @include('partials.content-full')
      @else
        @include('partials.content-excerpt')
      @endif
      @endwhile

      <div class="flex justify-center">
        {!!  wp_pagenavi() !!}
      </div>
    </div>
  </main>
@endsection
