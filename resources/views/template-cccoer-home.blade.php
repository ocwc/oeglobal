{{--
  Template Name: CCCOER Home Page Template
--}}

@extends('layouts.skeleton')

@section('content')
  @include('partials.header')

  <div class="bg-turq-800 h-32 flex items-center">
    <div class="container flex items-center">
      <span class="text-turq-300 font-bold text-2xl">Community of Practice for Open Education</span>
      <a class="btn oeg md:ml-8" href="#">Get Involved</a>
    </div>
  </div>

  <div class="bg-gray-900">
    <article class="container flex justify-center py-16">
      <div class="content content-excerpt
              md:w-2/3
              flex items-stretch justify-between flex-row
              shadow-lg rounded bg-white relative">

        @svg('icons/megaphone', 'h-22 w-22 absolute cccoer__featured__icon')

        <a href="{!! $get_featured['link'] !!}"
           class="bg-cover bg-center w-1/4 mr-4"
           style="background-image: url('{!! $get_featured['image']['sizes']['large'] !!}');">
        </a>

        <div class="w-3/4 px-6 pb-4">
          <header>
            <h2 class="entry-title font-sans text-left mt-2">
              <a href="{!! $get_featured['link'] !!}">
                {!! $get_featured['title'] !!}
              </a>
            </h2>
          </header>
          <main class="entry-summary">
            {!! $get_featured['description'] !!}
          </main>
        </div>
      </div>
    </article>

    @component('components/section-header', ['title' => 'Webinars', 'url' => '/webinar/'])@endcomponent
    <div class="container grid grid-cols-3 gap-4">
      @foreach($webinars as $webinar)
        @component('components/featured', [
            'title' => $webinar['title'],
            'excerpt' => $webinar['excerpt'],
            'webinar_date' => $webinar['date'],
            'url' => $webinar['url'],
            'image' => $webinar['image']])@endcomponent
      @endforeach
    </div>

  </div>

  @php(do_action('get_footer'))
  @include('components.footer')
@endsection
