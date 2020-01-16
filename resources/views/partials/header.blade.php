<header>
  @component('components.global-header', [
    'is_oeg' => $is_oeg,
    'is_latam' => $is_latam
])@endcomponent

  <div class="container pr-0 lg:px-4">
    @component('components.global-navigation', [
      'navigation' => $navigation,
      'site' => $site,
    ])@endcomponent
  </div>
</header>

