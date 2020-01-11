@if ($navigation)
  <ul class="nav nav-dropdown flex">
    @foreach ($navigation as $item)
      <li class="menu-item {{ $item->children ? 'has-children' : '' }} {{ $item->active ? 'active' : '' }}">
        <a href="{{ $item->url }}">
          {{ $item->label }}
        </a>

        @if ($item->children)
          <ul class="sub-menu lg:hidden">
            @foreach ($item->children as $child)
              <li class="menu-item-child {{ $child->active ? 'active' : '' }}">
                <a href="{{ $child->url }}">
                  {{ $child->label }}
                </a>
              </li>
            @endforeach
          </ul>
        @endif
      </li>
    @endforeach

    <li class="menu-item menu-item-search">
      <a href="?q=">@svg('icons/magnify', 'menu-item__icon')</a>
    </li>

    <li class="menu-item menu-item-search-mobile lg:hidden">
      <form action="/" method="get" class="w-full">
        <?php // TODO translate "Search" to "Buscar" ?>
        <input type="search" name="s" id="search" value="" placeholder="Search ..." class="h-10 pl-2" />
      </form>
    </li>
  </ul>
@endif
