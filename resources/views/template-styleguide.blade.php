{{--
  Template Name: Style Guide
--}}
@extends('layouts.skeleton')

@section('content')
<div class="container my-4">
  <h1 class="h1">Style Guide</h1>

@component('components.style-pre', [
  'title' => 'Global Navigation Header',
  'cmd' => ''
])
    @component('components.global-header', [])@endcomponent
@endcomponent

  @component('components.style-pre', [
  'title' => 'Site Navigation',
  'cmd' => ''
])
    @component('components.global-navigation', [
    'navigation' => $navigation
    ])@endcomponent
  @endcomponent

@component('components.style-pre', [
  'title' => 'LATAM Home Hero',
  'cmd' => ''
])
  @component('components.latam-hero', [])@endcomponent
@endcomponent

@component('components.style-pre', [
  'title' => 'LATAM Home Strip',
  'cmd' => ''
])
    @component('components.latam-strip', [
      'items' => array(
        (object) [
          'icon' => 'images/icons/latam-world.svg',
          'title' => 'Estado del arte',
          'description' => 'Información general, lo que se está haciendo en la región, infografías e imágenes para compartir.',
          'button_title' => 'Ver más…',
          'button_url' => '#'
        ],
        (object) [
          'icon' => 'images/icons/latam-phone.svg',
          'title' => 'Formación docente',
          'description' => 'Descripción del bloque en dos o tres líneas.',
          'button_title' => 'Ver más…',
          'button_url' => '#'
        ]
      )
    ])@endcomponent
@endcomponent

  @component('components.style-pre', [
    'title' => 'Typography'
  ])
<article>
  <h1>First Meeting of the <a href="#">OE LATAM Regional Node</a></h1>

  <p>The first convening of the Open Education Latin America (OE LATAM) Regional Node took place February 25 – 26 in
    San Jose, Costa Rica which included representatives from Brazil, Mexico, Chile, Costa Rica, Nicaragua, USA,
    Uruguay, Guatemala, and Colombia.</p>

  <p class="base">The first convening of the <a href="#">Open Education Latin America (OE LATAM)
      Regional Node took place February 25 – 26 in San Jose, Costa Rica which included representatives</a>
    from <a href="#">Brazil, Mexico, Chile, Costa Rica, Nicaragua, USA,  Uruguay, Guatemala, and Colombia.</a></p>

  <h2><a href="#">UNESCO Draft Recommendation</a> on Open Educational Resources (OER)</h2>

  <h3><a href="#">UNESCO Draft Recommendation</a> on Open Educational Resources (OER)</h3>

  <h4><a href="#">UNESCO Draft Recommendation</a> on Open Educational Resources (OER)</h4>

  <figcaption>Maddox Flynn, Isla Ashley, Raymond Potter, Jesus Gamble, Eshan Knapp,
    Saul Burrows (<a href="#">CC by Jareth Navarro</a>)</figcaption>

  <small>All content on oeconsortium.org is licensed under a Creative Commons Attribution 4.0 License.
    Please note that OCW course materials hosted on member sites are governed by the specific licenses chosen by the
    owners of those sites.</small>
</article>
  @endcomponent
</div>
@endsection
