{{--
  Title: LATAM Home Gallery
  Description: Adds Top Block
  Category: oeg-custom
  Icon: media-default
  Keywords: home gallery latam
--}}

@component('components.latam-home-gallery', [])
  @component('components.image-grid',
  ['items' => get_field('items')])
  @endcomponent
@endcomponent
