{{--
  Template Name: Full Width
--}}

@extends('layouts.app')

@section('container')
    <main class="main">
        @while(have_posts()) @php the_post() @endphp
        @include('partials.breadcrumbs')
            <div class="container w-full">
                <h1 class="text-3xl font-bold h1">{!! $title !!}</h1>
            </div>

        @include('partials.content-page-fw')
        @endwhile
    </main>
@endsection
