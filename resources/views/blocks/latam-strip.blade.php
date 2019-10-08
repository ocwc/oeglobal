{{--
  Title: LATAM Home Strip
  Description:
  Category: oeg-custom
  Icon: media-default
  Keywords: home strip latam
--}}
@component('components.latam-strip', [
  'items' => array(
    (object) [
      'icon' => 'images/icons/drawing-latina.svg',
      'title' => 'Estado del arte',
      'description' => 'Información general, lo que se está haciendo en la región, infografías e imágenes para compartir.',
      'button_title' => 'Ver más…',
      'button_url' => '#'
    ],
    (object) [
      'icon' => 'images/icons/drawing-docente.svg',
      'title' => 'Formación docente',
      'description' => 'Descripción del bloque en dos o tres líneas.',
      'button_title' => 'Ver más…',
      'button_url' => '#'
    ]
  )
])@endcomponent
