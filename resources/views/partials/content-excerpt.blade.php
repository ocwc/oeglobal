@component('components/content-excerpt', [
  'image' => get_the_post_thumbnail_url(null, 'large'),
  'terms' => App::TermsWithLinks($post),
  'link'  => get_permalink(),
  'title' => get_the_title(),
  'description' => get_the_excerpt(),
  'show_meta' => true,
  'featured' => false,
])@endcomponent
