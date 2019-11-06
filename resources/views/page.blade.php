@extends('layouts.app')

@section('container')
  <main class="main">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.breadcrumbs')
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
  </main>
@endsection
