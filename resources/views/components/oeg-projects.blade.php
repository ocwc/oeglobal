<div class="container oeg-projects mb-40">
  <div class="oeg-projects__intro w-full">
    <h1 class="text-center font-bold font-sans text-2xl text-dark">Explore the Open Education Community</h1>
  </div>
  <div class="flex flex-wrap -mx-4">
    <div class="my-4 px-4 w-full lg:w-3/4">
      @component('components.oeg-projects-collection', [
        'title' => 'Global Ongoing Projects',
        'items' => [
            [
                'name' => 'OE Global Conference',
                'image' => '/wp-content/themes/oeglobal/resources/assets/images/logos/oeglobalconf.svg',
                'text' => 'Where the world meets to discuss how opening education helps us achieve universal access, equity, innovation and opportunity in education.',
                'url' => 'https://conference.oeconsortium.org/'
            ],
            [
                'name' => 'OE Awards',
                'image' => '/wp-content/themes/oeglobal/resources/assets/images/logos/oeawards.svg',
                'text' => 'Annual recognition to outstanding contributions in the Open Education community.',
                'url' => 'https://www.oeconsortium.org/projects/open-education-awards-for-excellence/2019-winners-of-oe-awards/'
            ],
            [
                'name' => 'OE Week',
                'image' => '/wp-content/themes/oeglobal/resources/assets/images/logos/oeweek.svg',
                'text' => 'Education Week has become one the most foremost global events recognizing high achievement and excellence in open education.',
                'url' => 'https://www.openeducationweek.org'
            ]
        ]
      ])
      @endcomponent
    </div>

    <div class="my-4 mx-4 lg:mx-auto px-2 py-2 w-full lg:w-1/4 text-center oeg-projects__special">
      <div class="oeg-projects__special-inner">
        <h2 class="font-semibold italic font-sans text-xl w-1/2 mx-auto pt-8 pb-6">Special Projects</h2>

        <p class="px-6 pb-4 text-left">Open Education Global forms strategic partnerships with other organizations who share common goals and aspirations.</p>
        <p class="px-6 pb-4 text-left">Here are a few of our current special projects done in partnership with others.</p>

        <a class="btn oeg mb-6" href="/activities/special-projects/">Learn more</a>
      </div>
    </div>

    <div class="w-full"></div>

    <div class="my-2 px-2 w-full lg:w-3/4">
      @component('components.oeg-projects-collection', [
        'title' => 'Regional Ongoing Projects',
        'items' => [
            [
                'name' => 'CCCOER',
                'image' => '/wp-content/themes/oeglobal/resources/assets/images/logos/cccoer.svg',
                'text' => 'A growing consortium of community and technical colleges committed to expanding access to education and increasing student success through adoption of open educational policy, practices, and resources.',
                'url' => 'https://www.cccoer.org/'
            ],
            [
                'name' => 'OE LATAM',
                'image' => '/wp-content/themes/oeglobal/resources/assets/images/logos/oelatam.svg',
                'text' => 'Espacio de diálogo para compartir ideas, proyectos y experiencias de las iniciativas que se desarrollan en la región, así como identificar retos, necesidades y áreas de posible colaboración.',
                'url' => 'https://www.oelatam.org/'
            ]
        ]
      ])
      @endcomponent
    </div>
  </div>
</div>
