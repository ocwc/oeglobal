@extends('layouts.app')

@section('container')
  @component('components.content-header', [
    'title' => 'Awards for year ' . $year,
    'is_search' => false,
    'background_image' => $featured_image_large,
    'attribution' => $featured_image_attribution,
])
  @endcomponent

  <div class="container mt-12 mb-8" id="individual-awards">
    <h2 class="text-2xl font-bold">Individual Awards</h2>
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
        'shadow' => true,
        'meta_type' => 'string',
        'meta_string' => $award['country'],
        ])@endcomponent
      @endforeach
    </div>
  </div>

  <div class="container" id="tools-awards">
    <h2 class="text-2xl font-bold">Resources, Tools and Practices Awards</h2>
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
        'shadow' => true,
        'meta_type' => 'string',
        'meta_string' => (key_exists('institution', $award) ? $award['institution'] . ", " : '') . $award['country'],
        ])@endcomponent
      @endforeach
    </div>
  </div>
  </div>
@endsection
