Text: {!! $variant !!}

@component('components.content-header', [
  'title' => $title,
  'excerpt' => $excerpt_simple,
  'background_image' => $featured_image_large,
  'variant' => $variant,
])
@endcomponent
