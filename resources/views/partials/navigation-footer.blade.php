@if ($navigation_footer)
  @foreach ($navigation_footer as $item)
    <div class="flex w-1/4">
      <ul>
        <li class="mb-4">
          @if ($item->url !== '#')
            <a class="h4" href="{{ $item->url }}">{{ $item->label }}</a>
          @else
            <span class="h4">{{ $item->label }}</span>
          @endif
        </li>

        @foreach ($item->children as $child)
          <li>
            <a class="text-sm" href="{{ $child->url }}">{{ $child->label }}</a>
          </li>
        @endforeach
      </ul>
    </div>
  @endforeach
@endif
