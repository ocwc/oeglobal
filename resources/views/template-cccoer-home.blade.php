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

    @component('components/section-header', ['title' => 'Updates', 'url' => '/news/'])@endcomponent
    <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      @foreach($news as $item)
        @component('components/content-excerpt', [
            'title' => $item['title'],
            'description' => $item['excerpt'],
            'link' => $item['url'],
            'image' => $item['image'],
            'terms' => $item['terms'],
            'meta_type' => 'string',
            'meta_string' => $item['date'],
            'is_tall' => true,
            'post' => $post
            ])@endcomponent
      @endforeach
    </div>
  </div>

  <div class="bg-white py-8 lg:py-0">
    <div class="container flex justify-center">
      <div class="lg:w-5/6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
          @component('components/stories-block', [
              'title' => 'Student Stories',
              'url' => '/student-stories/',
              'items' => $student_stories,
              'background' => '/wp-content/uploads/2020/08/studentstories.jpg',
          ])@endcomponent
          @component('components/stories-block', [
              'title' => 'Equity & Openess',
              'url' => '/edi/',
              'items' => $edi_stories,  //$student_stories,
              'background' => '/wp-content/uploads/2020/08/edi.jpg',
          ])@endcomponent
          @component('components/stories-block', [
              'title' => 'Case Studies',
              'url' => '/case-studies/',
              'items' => $case_studies,
              'background' => '/wp-content/uploads/2020/08/casestudies.jpg',
          ])@endcomponent
        </div>
      </div>
    </div>
  </div>
  @php(do_action('get_footer'))
  @include('components.footer')
@endsection
