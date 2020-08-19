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
    <div class="container flex justify-center">
      <div class="w-5/6 lg:w-3/4 mt-8 mb-12">
        @component('components/content-excerpt', [
            'link' => $get_featured['link'],
            'image' =>  $get_featured['image']['sizes']['large'],
            'title' => $get_featured['title'],
            'description' => $get_featured['description'],
            'featured' => true,
            'term_label' => null,
            'show_meta' => false,
          ])@endcomponent
      </div>
    </div>

    @component('components/section-header', ['title' => 'Webinars', 'url' => '/webinar/'])@endcomponent
    <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      @foreach($webinars as $webinar)
        @component('components/content-excerpt', [
            'title' => $webinar['title'],
            'description' => $webinar['excerpt'],
            'webinar_date' => $webinar['date'],
            'link' => $webinar['url'],
            'image' => $webinar['image'],
            'term_label' => 'Webinar',
            'show_meta' => false,
            'is_tall' => true,
            ])@endcomponent
      @endforeach
    </div>

  </div>

  @php(do_action('get_footer'))
  @include('components.footer')
@endsection
