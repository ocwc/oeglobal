<header class="banner">
  <div class="flex items-center justify-between
              h-20 md:h-24">
    <a class="brand flex" href="{{ home_url('/') }}" alt="Home">
      @svg('logos/oelatam', 'nav-logo')
    </a>
    <nav role="navigation"
         class="nav-primary
                hidden md:block">
      @include('partials.navigation')
    </nav>
    <button class="js-toggle-menu toggle-menu flex justify-center md:hidden">@svg('icons/menu', 'menu')</button>
  </div>
</header>
