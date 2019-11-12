{{--
  Title: Grid of People
  Description: Adds a grid of people images
  Category: oeg-custom
  Icon: media-default
  Keywords: people grid
--}}

@component('components.person-grid',
['items' => get_field('items')])
@endcomponent
