@extends('layouts.app')

@section('container')
  <main class="main">
  @include('partials.breadcrumbs')
  @include('partials.page-header')

  @php $first = true @endphp
  @while(have_posts()) @php the_post() @endphp
    @if ($first)
      @php $first = false @endphp
      @include('partials.content-full')
    @else
      @include('partials.content-excerpt')
    @endif
  @endwhile

@endsection
