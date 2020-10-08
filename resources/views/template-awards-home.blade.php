{{--
  Template Name: Awards Home Page Template
--}}

@extends('layouts.skeleton')

@section('content')
  @include('partials.header')

  <div class="awards-hero bg-awards-blobs pb-10 md:pb-0">
    <div class="container pt-19">
      <div
        class="w-full lg:w-7/12 text-white px-6 py-4 awards-hero__text flex flex-col md:flex-row items-stretch lg:ml-32 gap-4">
        <div>
          @svg('icons/awards-trophy', 'h-30 md:h-full inline-block')
        </div>
        <div class="flex flex-col">
          <h1 class="text-3xl lg:text-4xl font-bold mb-4 leading-tight">Open Education Awards for Excellence</h1>
          <p class="leading-relaxed">The Open Education Awards for Excellence provide annual recognition to outstanding
            contributions in the Open Education community, recognizing exemplary leaders, distinctive Open Educational
            Resources, and Open Projects &amp; Initiatives.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="awards-home__content">
    <div class="awards__navigation bg-blue-200 pt-3 border-b-2 border-blue-750">
      <div class="container flex justify-between -mb-2px">
        <div class="flex gap-4 flex-col md:flex-row w-full lg:w-auto">
          <button class="awards__navigation__button js-awards-button-individual inline-flex">
            @svg('icons/sparkles', 'h-6 mr-2 inline-block') Individual
          </button>
          <button class="awards__navigation__button js-awards-button-practices inline-flex">
            @svg('icons/speakerphone', 'h-6 mr-2 inline-block') Open Practices
          </button>
          <button class="awards__navigation__button js-awards-button-assets inline-flex">
            @svg('icons/puzzle', 'h-6 mr-2 inline-block') Open Assets
          </button>
        </div>
        <div class="relative justify-self-end">
          <button
            class="awards__navigation__button js-awards-button-dropdown js-awards-home-years hidden lg:inline-flex relative">
            @svg('icons/awards-calendar', 'h-6 mr-2 inline-block') Previous Years
          </button>
          <ul
            class="absolute bg-white rounded w-full text-center font-semibold mt-1 hidden js-awards-button-dropdown-target">
            @foreach(range(2011, 2019) as $year)
              <li class="hover:bg-blue-300 hover:text-yellow-500"><a class="w-full block py-2"
                                                                     href="/year/{!! $year !!}/">{!! $year !!}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>

    <div class="container mt-12 mb-8 pt-6 md:pt-0" id="individual-awards">
      <h2 class="text-2xl font-bold text-white">Individual Awards</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 js-awards-individual">
        @foreach ($individual_awards as $award)
          @component('components/content-excerpt', [
          'title' =>  $award['title'],
          'link' => $award['url'],
          'terms' => $award['terms'],
          'image' => $award['image'],
          'show_meta' => false,
          'is_tall' => true,
          'shadow' => false,
          'meta_type' => 'string',
          'meta_string' => $award['country'],
          ])@endcomponent
        @endforeach
      </div>
    </div>

    <div class="container" id="practices-awards">
      <h2 class="text-2xl font-bold text-white">Open Practices Awards</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 js-awards-practices">
        @foreach ($practices_awards as $award)
          @component('components/content-excerpt', [
          'title' =>  $award['title'],
          'link' => $award['url'],
          'terms' => $award['terms'],
          'image' => $award['image'],
          'show_meta' => false,
          'is_tall' => true,
          'shadow' => false,
                      'meta_type' => 'string',
          'meta_string' => $award['institution'] . ", " . $award['country'],
          ])@endcomponent
        @endforeach
      </div>
    </div>

    <div class="container mb-8" id="assets-awards">
      <h2 class="text-2xl font-bold text-white">Open Assets Awards</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 js-awards-assets">
        @foreach ($assets_awards as $award)
          @component('components/content-excerpt', [
          'title' =>  $award['title'],
          'link' => $award['url'],
          'terms' => $award['terms'],
          'image' => $award['image'],
          'show_meta' => false,
          'is_tall' => true,
          'shadow' => false,
                      'meta_type' => 'string',
          'meta_string' => $award['institution'] . ", " . $award['country'],
          ])@endcomponent
        @endforeach
      </div>
    </div>
  </div>


  <div class="bg-awards-bottom">
    <div class="container flex justify-center items-center flex-col mt-40 pb-10">
      <span class="uppercase text-white font-sans text-sm mb-12 font-semibold">OE AWARDS 2020 are Sponsored by</span>
      <div class="grid grid-cols-2 gap-8 justify-items-center lg:w-2/3">
        <a href="https://feedbackfruits.com/" class="block h-16 md:h-24 flex justify-center bg-white p-2 rounded"><img
            src="@asset('images/logos/logo-feedbackfruits.png')" alt="Feedback Fruits" class="h-full w-auto"/></a>
        <a href="https://www.grasple.com/" class="block h-16 md:h-24 flex justify-center rounded"><img
            src="@asset('images/logos/logo-grasple.svg')" alt="Grasple" class="h-full w-auto"/></a>
        <a href="https://libretexts.org/" class="block h-16 md:h-24 flex justify-center bg-white p-2 rounded"><img
            src="@asset('images/logos/logo-libretexts.png')" alt="LibreTexts" class="h-full w-auto"/></a>
        <a href="https://www.achievingthedream.org/" class="block h-16 md:h-24 flex justify-center bg-white p-2 rounded"><img
            src="@asset('images/logos/logo-atd.png')" alt="Achieving the Dream" class="h-full w-auto"/></a>
      </div>
    </div>
  </div>

  @php(do_action('get_footer'))
  @include('components.footer')
@endsection
