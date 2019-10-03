<header class="banner">
  @component('components.global-header', [])@endcomponent

  <div class="container">
    @component('components.global-navigation', [
      'navigation' => $navigation
    ])@endcomponent
  </div>
</header>

