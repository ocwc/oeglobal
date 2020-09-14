{{--
  Template Name: Awards Home Page Template
--}}

@extends('layouts.skeleton')

@section('content')
  @include('partials.header')

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

  <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($individual_awards as $award)
      @component('components/content-excerpt', [
      'title' =>  $award['title'],
      'link' => $award['url'],
      'terms' => $award['terms'],
      'image' => $award['image'],
      'term_label' => 'Webinar',
      'show_meta' => false,
      'is_tall' => true,
      ])@endcomponent
    @endforeach
  </div>

  <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($tools_awards as $award)
      @component('components/content-excerpt', [
      'title' =>  $award['title'],
      'link' => $award['url'],
      'terms' => $award['terms'],
      'image' => $award['image'],
      'term_label' => 'Webinar',
      'show_meta' => false,
      'is_tall' => true,
      ])@endcomponent
    @endforeach
  </div>

  @php(do_action('get_footer'))
  @include('components.footer')
@endsection
