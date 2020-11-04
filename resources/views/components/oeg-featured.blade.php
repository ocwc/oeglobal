<div class="container px-0 md:px-4 mt-6 md:mt-12 mb-0">
  <h2 class="text-black-200 border-b border-gray-400 text-xl font-bold font-sans pb-2 mb-6 mx-4 md:mx-0 md:pl-0">Happening now!</h2>

  <div class="grid grid-rows-auto grid-cols-auto
        @if (count($featured_items) >= 3)
        md:grid-rows-2 md:grid-cols-3 gap-2 md:gap-4
        @else
          md:grid-rows-1 md:grid-cols-2 gap-2 md:gap-4
        @endif
        ">
    @foreach ($featured_items as $item)
    <a class="
        oeg-featured {!! 'oeg-featured-' . $loop->iteration !!}
        @if (count($featured_items) >= 3)
          @if($loop->iteration === 1)md:row-span-2 md:col-span-2
          @else col-auto row-auto
          @endif
        @else

        @endif
        flex items-end" style="background-image: url('{!! $item['image']['sizes']['large'] !!}');" href="{!! $item['url'] !!}">
      <span class="oeg-featured__title">
        {!! $item['title'] !!}
      </span>
    </a>
    @endforeach

  </div>
</div>

<div class="oeg-spotlight relative overflow-hidden lg:overflow-visible pt-8 md:pt-20">
  <div class="container">
    <div class="oeg-spotlight__container relative">
      <div class="flex w-full border-b bg-blue-400 border-gray-900 pb-2 mb-6 justify-between items-end">
        <h2 class="text-gray-900 text-xl font-bold font-sans">Members spotlight</h2>
        <a class="text-gray-900"
          href="https://connect.oeglobal.org/c/oeg-plaza/spotlight/14">
          View more
        </a>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($spotlight_items as $item)
        <a class="oeg-spotlight__item block bg-white text-black-300 rounded overflow-hidden shadow-md" 
          href="{!! $item['url'] !!}">
          <span class="oeg-spotlight__image block"
                style="background-image: url('{!! $item['image']['sizes']['medium'] !!}');"></span>

          <span class="block p-6">
            <h2 class="h2 mb-4">{!! $item['title'] !!}</h2>
            <span class="block mb-6">@svg('icons/check', 'h-auto inline-block')<span class="ml-2">{!! $item['member'] !!}</span></span>
            <span class="block font-serif">{!! $item['description'] !!}</span>
          </span>
        </a>
        @endforeach
      </div>
    </div>
  </div>
  <div class="hidden xl:block">
    <div class="container relative overflow-hidden xl:overflow-visible -mt-8 pb-40">
      <div class="oeg-spotlight__triangle"></div>
    </div>
  </div>
  <div class="block xl:hidden">
    <div class="relative overflow-x-hidden overflow-y-visible -mt-12 pb-48">
      <div class="oeg-spotlight__triangle"></div>
    </div>
  </div>
</div>
