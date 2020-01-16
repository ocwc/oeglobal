@extends('layouts.app')

@section('container')
  <main class="main">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.breadcrumbs')

    <div class="container">
      <div class="flex flex-wrap -mx-2">
      <div class="my-2 px-2 w-full lg:w-2/3">
          @include('partials.post-header')
          @include('partials.content-single')
        </div>
        <div class="my-2 px-2 w-full lg:w-1/3">
          @include('partials.sidebar')
        </div>
      </div>
      @endwhile
    </div>
  </main>
@endsection
