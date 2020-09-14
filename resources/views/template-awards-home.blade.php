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
      <div class="awards__navigation bg-blue-200 pt-3 border-b-2 border-blue-750">
        <div class="container flex justify-between -mb-2px">
          <div class="flex gap-4 flex-col lg:flex-row w-full lg:w-auto">
            <button class="awards__navigation__button js-awards-button-individual inline-flex">
              @svg('icons/sparkles', 'h-6 mr-2 inline-block') Individual
            </button>
            <button class="awards__navigation__button js-awards-button-tools inline-flex">
              @svg('icons/speakerphone', 'h-6 mr-2 inline-block') Resources, Tools and Practices
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

      <div class="container mt-12 mb-8" id="individual-awards">
        <h2 class="text-2xl font-bold text-white">Individual Awards</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 js-awards-individual">
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
            'meta_type' => 'string',
            'meta_string' => $award['country'],
            ])@endcomponent
          @endforeach
        </div>
      </div>

      <div class="container" id="tools-awards">
        <h2 class="text-2xl font-bold text-white">Resources, Tools and Practices Awards</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 js-awards-tools">
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
                        'meta_type' => 'string',
            'meta_string' => $award['institution'] . ", " . $award['country'],
            ])@endcomponent
          @endforeach
        </div>
      </div>
    </div>
  </div>

  @php(do_action('get_footer'))
  @include('components.footer')
@endsection
