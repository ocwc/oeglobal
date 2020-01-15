<div class="image-grid block mb-16 md:flex md:flex-wrap">
  @foreach ($items as $item)
    <div class="image-grid__item w-2/3 md:w-1/3 inline-block">
      <a
        href="{!! App::extractBlockUrl($item) !!}"
      >
            <span
              class="block w-full image-grid__item__image"
              style="background-image: url('{!! $item['image']['sizes']['square'] !!}');"
              title="{!! $item['caption'] !!}"
            ></span>
        <span class="image-grid__item__title">{{ $item['title'] }}</span>
      </a>

      {{--
      @if($item['attribution_name'])
        <a class="image-grid__item__attribution"
           href="{!! $item['attribution_url'] !!}">{!! $item['attribution_name'] !!}</a>
      @endif
      --}}
    </div>
  @endforeach
</div>
