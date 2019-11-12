{{--
  Title: Person Image
  Description: OEG Specific design of Person Image
  Category: oeg-custom
  Icon: media-default
  Keywords: people grid
--}}

@component('components.person-image', [
 'src' => get_field('image')['sizes']['square'],
 'size' => get_field('size')])
@endcomponent
