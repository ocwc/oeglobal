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
    @endcomponent

    @component('components.style-pre', [
      'title' => 'Image Gallery',
      'cmd' => ''
    ])
      @component('components.latam-home-gallery', [])
        @component('components.image-grid',
        ['items' => array(
            [
              'url' => '#',
              'title' => 'Brasil',
              'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/d42dd4/ffffff.png']],
              'attribution_name' => 'Photo By CC',
              'attribution_url' => '#'
            ],
            [
              'url' => '#',
              'title' => 'Chile',
              'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/2f8ad4/ffffff.png']],
              'attribution_name' => 'Photo By CC',
              'attribution_url' => '#'
            ],
            [
              'url' => '#',
              'title' => 'Mexico',
              'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/36d431/ffffff.png']],
              'attribution_name' => 'Photo By CC',
              'attribution_url' => '#'
            ],
            [
              'url' => '#',
              'title' => 'Costa Rica',
              'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/2f8ad4/ffffff.png']],
              'attribution_name' => 'Photo By CC',
              'attribution_url' => '#'
            ],
            [
              'url' => '#',
              'title' => 'Guatemala',
              'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/36d431/ffffff.png']],
              'attribution_name' => 'Photo By CC',
              'attribution_url' => '#'
            ],
            [
              'url' => '#',
              'title' => 'Uruguay',
              'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/d42dd4/ffffff.png']],
              'attribution_name' => 'Photo By CC',
              'attribution_url' => '#'
            ],
            [
              'url' => '#',
              'title' => 'Colombia',
              'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/36d431/ffffff.png']],
              'attribution_name' => 'Photo By CC',
              'attribution_url' => '#'
            ],
            [
              'url' => '#',
              'title' => 'Nicaragua',
              'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/2f8ad4/ffffff.png']],
              'attribution_name' => 'Photo By CC',
              'attribution_url' => '#'
            ],
            [
              'url' => '#',
              'title' => 'REA in latinoamérica',
              'image' => ['sizes' => ['square' => 'https://dummyimage.com/416x416/f54444/ffffff.png']],
              'attribution_name' => 'Photo By CC',
              'attribution_url' => '#'
            ],
        )])
        @endcomponent
      @endcomponent
    @endcomponent

    @component('components.style-pre', [
        'title' => 'Typography'
      ])
      <article>
        <h1>First Meeting of the <a href="#">OE LATAM Regional Node</a></h1>

        <p>The first convening of the Open Education Latin America (OE LATAM) Regional Node took place February 25 –
          26
          in
          San Jose, Costa Rica which included representatives from Brazil, Mexico, Chile, Costa Rica, Nicaragua, USA,
          Uruguay, Guatemala, and Colombia.</p>

        <p class="base">The first convening of the <a href="#">Open Education Latin America (OE LATAM)
            Regional Node took place February 25 – 26 in San Jose, Costa Rica which included representatives</a>
          from <a href="#">Brazil, Mexico, Chile, Costa Rica, Nicaragua, USA, Uruguay, Guatemala, and Colombia.</a>
        </p>

        <h2><a href="#">UNESCO Draft Recommendation</a> on Open Educational Resources (OER)</h2>

        <h3><a href="#">UNESCO Draft Recommendation</a> on Open Educational Resources (OER)</h3>

        <h4><a href="#">UNESCO Draft Recommendation</a> on Open Educational Resources (OER)</h4>

        <figcaption>Maddox Flynn, Isla Ashley, Raymond Potter, Jesus Gamble, Eshan Knapp,
          Saul Burrows (<a href="#">CC by Jareth Navarro</a>)
        </figcaption>

        <blockquote>
          These principles are at the centre of our conceptualisation of the digital university and interconnect with each other as we consider the politics, practices, and pedagogies of modern universities and the potential for radical change.
        </blockquote>

        <small>All content on oeconsortium.org is licensed under a Creative Commons Attribution 4.0 License.
          Please note that OCW course materials hosted on member sites are governed by the specific licenses chosen by
          the
          owners of those sites.</small>
      </article>
    @endcomponent

    @component('components.style-pre', [
              'title' => 'Person image',
              'cmd' => ''
    ])
      <h3 class="h3">Large</h3>

      @component('components.person-image', [
        'image' => ['sizes' => ['square' => 'https://www.oeconsortium.org/wp-content/uploads/2019/02/Backgroun-blco-e1550457370199.png']],
        'size' => 'large'
      ])@endcomponent

      <h3 class="h3">Small</h3>

      @component('components.person-image', [
        'image' => ['sizes' => ['square' => 'https://www.oeconsortium.org/wp-content/uploads/2019/02/Backgroun-blco-e1550457370199.png']],
        'alt' => 'First Last Name'
      ])@endcomponent
    @endcomponent

    @component('components.style-pre', [
          'title' => 'Person Grid',
          'cmd' => ''
    ])
      @component('components.person-grid', [
        'items' => [
          ['image' => ['sizes' => ['square' => 'https://www.oeconsortium.org/wp-content/uploads/2019/02/Backgroun-blco-e1550457370199.png']],
           'line1' => 'Chinelo Chyke',
           'line2' => 'Community Relations',
           'line3' => 'Open Education Consortium',
           'line4' => 'Mexico',
           'url' => '#',
          ],
          ['image' => ['sizes' => ['square' => 'https://www.oeconsortium.org/wp-content/uploads/2019/02/Backgroun-blco-e1550457370199.png']],
           'line1' => 'Chinelo Chyke',
           'line2' => 'Community Relations',
           'line3' => 'Open Education Consortium',
           'line4' => 'Mexico',
           'url' => '#',
          ],
          ['image' => ['sizes' => ['square' => 'https://www.oeconsortium.org/wp-content/uploads/2019/02/Backgroun-blco-e1550457370199.png']],
           'line1' => 'Chinelo Chyke',
           'line2' => 'Community Relations',
           'line3' => 'Open Education Consortium',
           'line4' => 'Mexico',
           'url' => '#',
          ],
          ['image' => ['sizes' => ['square' => 'https://www.oeconsortium.org/wp-content/uploads/2019/02/Backgroun-blco-e1550457370199.png']],
           'line1' => 'Chinelo Chyke',
           'line2' => 'Community Relations',
           'line3' => 'Open Education Consortium',
           'line4' => 'Mexico',
           'url' => '#',
          ],
          ['image' => ['sizes' => ['square' => 'https://www.oeconsortium.org/wp-content/uploads/2019/02/Backgroun-blco-e1550457370199.png']],
           'line1' => 'Chinelo Chyke',
           'line2' => 'Community Relations',
           'line3' => 'Open Education Consortium',
           'line4' => 'Mexico',
           'url' => '#',
          ],
        ]
      ])@endcomponent
    @endcomponent

  </div>

  @component('components.style-pre', [
    'title' => 'Page headers - Standard'
  ])
    <div class="my-6">
    @component('components.content-header', [
    'title' => 'Guatemala',
    'excerpt' => 'Mundo Posible, como capítulo de World Possible para Guatemala, lleva la biblioteca digital RACHEL por medio de servidores de bajo costo a comunidades y escuelas donde no hay acceso a internet o donde es muy limitado.',
    ])@endcomponent
    </div>

    <div class="my-6">
    @component('components.content-header', [
    'title' => 'Guatemala',
    ])@endcomponent
    </div>

    <div class="my-6">
    @component('components.content-header', [
    'title' => 'Guatemala',
    'background_image' => 'https://www.oelatam.org/wp-content/uploads/2019/10/machu-picchu-1569324.jpg',
    ])@endcomponent
    </div>

    <div class="my-6">
    @component('components.content-header', [
    'title' => 'Guatemala',
    'excerpt' => 'Mundo Posible, como capítulo de World Possible para Guatemala, lleva la biblioteca digital RACHEL por medio de servidores de bajo costo a comunidades y escuelas donde no hay acceso a internet o donde es muy limitado.',
    'background_image' => 'https://www.oelatam.org/wp-content/uploads/2019/10/machu-picchu-1569324.jpg'
    ])@endcomponent
    </div>
  @endcomponent

  @component('components.style-pre', [
    'title' => 'Page headers - Sub Landing'
  ])
    <div class="my-6">
      @component('components.content-header', [
      'title' => 'Guatemala',
      'excerpt' => 'Mundo Posible, como capítulo de World Possible para Guatemala, lleva la biblioteca digital RACHEL por medio de servidores de bajo costo a comunidades y escuelas donde no hay acceso a internet o donde es muy limitado.',
      'variant' => 'sublanding',
      ])@endcomponent
    </div>

    <div class="my-6">
      @component('components.content-header', [
      'title' => 'Guatemala',
      'variant' => 'sublanding',
      ])@endcomponent
    </div>

    <div class="my-6">
      @component('components.content-header', [
      'title' => 'Guatemala',
      'background_image' => 'https://www.oelatam.org/wp-content/uploads/2019/10/machu-picchu-1569324.jpg',
      'variant' => 'sublanding',
      ])@endcomponent
    </div>

    <div class="my-6">
      @component('components.content-header', [
      'title' => 'Guatemala  can also have a much longer title',
      'excerpt' => 'Mundo Posible, como capítulo de World Possible para Guatemala, lleva la biblioteca digital RACHEL por medio de servidores de bajo costo a comunidades y escuelas donde no hay acceso a internet o donde es muy limitado.',
      'background_image' => 'https://www.oelatam.org/wp-content/uploads/2019/10/machu-picchu-1569324.jpg',
      'variant' => 'sublanding',
      ])@endcomponent
    </div>
  @endcomponent
@endsection
