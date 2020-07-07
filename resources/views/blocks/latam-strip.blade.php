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
      'title' => 'Historias Extraordinarias',
      'description' => 'Historias de colaboración, apoyo y solidaridad ante la crisis mundial del Covid-19.',
      'button_title' => 'Ver más…',
      'button_url' => 'https://splot.ca/extraordinary/oelatam-stories/'
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
