<header class="header shadow-md z-50">
  @component('components.global-header', [
    'is_oeg' => $is_oeg,
    'is_latam' => $is_latam
])@endcomponent

  <div class="container pr-0 lg:p-4">
    @component('components.global-navigation', [
      'navigation' => $navigation,
      'site' => $site,
    ])@endcomponent
  </div>
</header>

