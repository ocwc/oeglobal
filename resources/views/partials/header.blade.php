<header class="banner">
  <!-- test -->
  @component('components.global-header', [])@endcomponent

  <div class="container px-0 lg:px-6">
    @component('components.global-navigation', [
      'navigation' => $navigation
    ])@endcomponent
  </div>
</header>

