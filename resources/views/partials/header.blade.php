<header class="banner">
  <!-- test -->
  @component('components.global-header', [])@endcomponent

  <div class="container pr-0 lg:px-4">
    @component('components.global-navigation', [
      'navigation' => $navigation
    ])@endcomponent
  </div>
</header>

