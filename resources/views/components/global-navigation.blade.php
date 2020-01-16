<header class="banner">
  <div class="flex items-center justify-between h-full">
    <a class="brand flex" href="{{ home_url('/') }}" alt="Home">
      @if ($site === 'latam')
        @svg('logos/oelatam', 'nav-logo')
      @else
        @svg('logos/oeglobal-color', 'nav-logo')
      @endif
    </a>
    <nav role="navigation"
         class="nav-primary
                hidden lg:block flex">
      @include('partials.navigation')
    </nav>
    <button class="js-toggle-menu toggle-menu flex justify-center lg:hidden">@svg('icons/menu', 'menu')</button>
  </div>
</header>
