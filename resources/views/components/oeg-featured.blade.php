<div class="container md:mt-12 mb-0">
  <h2 class="text-black-200 border-b border-gray-400 text-xl font-bold font-sans pb-2 mb-6">Happening now!</h2>

  <div class="grid grid-rows-auto grid-cols-auto md:grid-rows-2 md:grid-cols-3 gap-2 md:gap-4">
    @foreach ($featured_items as $item)
      <a class="
          oeg-featured {!! 'oeg-featured-' . $loop->iteration !!}
      @if($loop->iteration === 1)md:row-span-2 md:col-span-2
          @else col-auto row-auto
          @endif
        flex items-end
"
         style="background-image: url('{!! $item['image']['sizes']['large'] !!}');"
         href="{!! $item['url'] !!}"
      >
        <span class="oeg-featured__title">
          {!! $item['title'] !!}
        </span>
      </a>
    @endforeach

  </div>
</div>

<div class="oeg-spotlight relative overflow-hidden lg:overflow-visible pt-8 md:pt-20 lg:pt-20">
  <div class="container mb-32">
    <div class="oeg-spotlight__container relative">
      <div class="flex w-full border-b border-gray-900 pb-2 mb-6 justify-between items-end">
        <h2 class="flex text-gray-900 text-xl font-bold font-sans">Members spotlight</h2>
        <a class="flex btn oeg-inverted" href="https://connect.oeglobal.org/c/oeg-plaza/spotlight/14">View more</a>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($spotlight_items as $item)
          <a class="oeg-spotlight__item" href="{!! $item['url'] !!}">
          <span class="oeg-spotlight__image block"
                style="background-image: url('{!! $item['image']['sizes']['medium'] !!}');"></span>

            <span class="block px-4 py-6">
            <h2 class="h2 mb-4">{!! $item['title'] !!}</h2>
            <span class="block mb-6">@svg('icons/check', 'h-auto inline-block')<span
                class="ml-2">{!! $item['member'] !!}</span></span>
            <span class="block font-serif">{!! $item['description'] !!}</span>
          </span>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</div>
