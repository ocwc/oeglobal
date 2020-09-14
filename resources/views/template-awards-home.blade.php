{{--
  Template Name: Awards Home Page Template
--}}

@extends('layouts.skeleton')

@section('content')
  @include('partials.header')

  <div class="bg-blue-200">
    <div class="awards-hero bg-awards-blobs h-64">
      <div class="container pt-19">
        <div class="w-full lg:w-7/12 text-white px-6 py-4 awards-hero__text flex flex-col lg:ml-32">
          <h1 class="text-4xl font-bold mb-4">Open Education Awards for Excellence</h1>
          <p class="leading-relaxed">The Open Education Awards for Excellence provide annual recognition to outstanding
            contributions in the Open Education community, recognizing exemplary leaders, distinctive Open Educational
            Resources, and Open Projects &amp; Initiatives.</p>
        </div>
      </div>
    </div>

    <div class="awards-home__content">
      <div class="awards__navigation bg-blue-200 pt-3">
        <div class="container flex justify-between">
          <div class="flex gap-4">
            <a
              class="rounded-t bg-blue-300 text-yellow-500 py-2 px-5 border-b-2 border-yellow-500 font-semibold inline-flex items-center"
              href="#">
              @svg('icons/sparkles', 'h-6 mr-2 inline-block') Individual
            </a><a
              class="rounded-t text-white bg-blue-200 py-2 px-5 border-b-2 border-blue-750 font-semibold inline-flex items-center"
              href="#">
              @svg('icons/speakerphone', 'h-6 mr-2 inline-block') Individual

              Resources, Tools and Practices</a>
          </div>
          <a
            class="rounded-t text-white bg-blue-200 py-2 px-5 border-b-2 border-blue-750 font-semibold inline-flex items-center js-awards-home-years"
            href="#">
            @svg('icons/awards-calendar', 'h-6 mr-2 inline-block') Individual
            Previous Years
          </a>
        </div>
      </div>

      <div class="container mt-12 mb-8">
        <h2 class="text-2xl font-bold text-white">Individual Awards</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
          @foreach ($individual_awards as $award)
            @component('components/content-excerpt', [
            'title' =>  $award['title'],
            'link' => $award['url'],
            'terms' => $award['terms'],
            'image' => $award['image'],
            'term_label' => 'Webinar',
            'show_meta' => false,
            'is_tall' => true,
            'shadow' => false,
            ])@endcomponent
          @endforeach
        </div>
      </div>

      <div class="container">
        <h2 class="text-2xl font-bold text-white">Resources, Tools and Practices Awards</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
          @foreach ($tools_awards as $award)
            @component('components/content-excerpt', [
            'title' =>  $award['title'],
            'link' => $award['url'],
            'terms' => $award['terms'],
            'image' => $award['image'],
            'term_label' => 'Webinar',
            'show_meta' => false,
            'is_tall' => true,
            'shadow' => false,
            ])@endcomponent
          @endforeach
        </div>
      </div>
    </div>
  </div>

  @php(do_action('get_footer'))
  @include('components.footer')
@endsection
