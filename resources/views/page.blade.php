@extends('layouts.app')

@section('container')
  <main class="main">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.breadcrumbs')
    @if(OEG_SITE === 'CCCOER')
      <div class="container w-full">
        <div class="lg:w-2/3 lg:ml-1/12">
            <h1 class="text-3xl font-bold lg:p-6 h1">{!! $title !!}</h1>
        </div>
      </div>
    @else
      @include('partials.page-header')
    @endif
    @include('partials.content-page')
    @endwhile
  </main>
@endsection
