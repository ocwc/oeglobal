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
      'description' => 'Siguiendo la trayectoria de la Educación Abierta en la región latinoamericana.',
      'button_title' => 'Ver más…',
      'button_url' => '/que-hacemos/estado-del-arte/'
    ],
    (object) [
      'icon' => 'images/icons/drawing-docente.svg',
      'title' => 'Formación docente',
      'description' => 'Recursos Educativos Abiertos para la capacitación docente en temas de educación abierta.',
      'button_title' => 'Ver más…',
      'button_url' => '/formacion-docente/'
    ]
  )
])@endcomponent
