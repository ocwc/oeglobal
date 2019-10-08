{{--
  Title: LATAM Home Gallery
  Description: Adds Top Block
  Category: oeg-custom
  Icon: media-default
  Keywords: home gallery latam
--}}
@component('components.latam-home-gallery', [])
  @component('components.image-grid',
  ['items' => array(
      (object) [
        'url' => '#',
        'title' => 'Brasil',
        'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/d42dd4/ffffff.png']],
        'attribution_name' => 'Photo By CC',
        'attribution_url' => '#'
      ],
      (object) [
        'url' => '#',
        'title' => 'Chile',
        'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/2f8ad4/ffffff.png']],
        'attribution_name' => 'Photo By CC',
        'attribution_url' => '#'
      ],
      (object) [
        'url' => '#',
        'title' => 'Mexico',
        'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/36d431/ffffff.png']],
        'attribution_name' => 'Photo By CC',
        'attribution_url' => '#'
      ],
      (object) [
        'url' => '#',
        'title' => 'Costa Rica',
        'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/2f8ad4/ffffff.png']],
        'attribution_name' => 'Photo By CC',
        'attribution_url' => '#'
      ],
      (object) [
        'url' => '#',
        'title' => 'Guatemala',
        'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/36d431/ffffff.png']],
        'attribution_name' => 'Photo By CC',
        'attribution_url' => '#'
      ],
      (object) [
        'url' => '#',
        'title' => 'Uruguay',
        'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/d42dd4/ffffff.png']],
        'attribution_name' => 'Photo By CC',
        'attribution_url' => '#'
      ],
      (object) [
        'url' => '#',
        'title' => 'Colombia',
        'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/36d431/ffffff.png']],
        'attribution_name' => 'Photo By CC',
        'attribution_url' => '#'
      ],
      (object) [
        'url' => '#',
        'title' => 'Nicaragua',
        'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/2f8ad4/ffffff.png']],
        'attribution_name' => 'Photo By CC',
        'attribution_url' => '#'
      ],
      (object) [
        'url' => '#',
        'title' => 'REA in latinoamérica',
        'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/f54444/ffffff.png']],
        'attribution_name' => 'Photo By CC',
        'attribution_url' => '#'
      ],
  )])
  @endcomponent
@endcomponent
