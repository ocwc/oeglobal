<header class="banner">
  <div class="flex items-center justify-between h-full">
    <a class="brand" href="{{ home_url('/') }}" alt="Home">
      @if ($site === 'latam')
        @svg('logos/oelatam', 'nav-logo')
      @elseif ($site === 'cccoer')
        @svg('logos/cccoer', 'nav-logo')
      @elseif ($site === 'awards')
        @svg('logos/oeawards', 'nav-logo')
      @else
        @svg('logos/oeglobal-color', 'nav-logo')
      @endif
    </a>
    <nav role="navigation"
         class="nav-primary
                hidden lg:block flex">
      @include('partials.navigation')
    </nav>
    <button class="js-toggle-menu toggle-menu flex items-center justify-center lg:hidden">@svg('icons/menu', 'menu')</button>
  </div>
</header>
