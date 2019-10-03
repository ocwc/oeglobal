@if ($navigation)
  <ul class="nav nav-dropdown flex">
    @foreach ($navigation as $item)
      <li class="menu-item {{ $item->children ? 'has-children' : '' }} {{ $item->active ? 'active' : '' }}">
        <a href="{{ $item->url }}">
          {{ $item->label }}
        </a>

        @if ($item->children)
          <ul class="sub-menu hidden">
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

    <li class="menu-item">
      @svg('images.icons.magnify')
    </li>
  </ul>
@endif
