<div class="my-4 lg:my-16">
  <a href="{!! $url !!}"
     class="block bg-cover bg-center h-48 rounded text-white flex justify-end items-center flex-col hover:text-turq-600"
     style="background-image: linear-gradient(rgba(26, 82, 179, .85), rgba(26, 82, 179, .85)), url('{!! $background !!}');">
    <span class="font-bold text-xl">{!! $title !!}</span>
    <span class="mt-6 mb-8">View all</span>
  </a>

  <ul class="mt-4">
    @foreach($items as $item)
      <li class="rounded border-2 overflow-hidden border-transparent
           hover:border-turq-500 active:border-transparent
           bg-white content-excerpt__shadow flex
           mb-4 text-base font-bold text-black-300 h-20">
        <a
          class="flex w-full"
          href="{!! $item['url'] !!}">
            <span class="w-1/4 bg-cover bg-center" style="background-image: url('{!! $item['image'] !!}');"></span>
            <span class="w-3/4 px-3 pt-2 pb-6 bg-gray-900 flex-auto">{!! $item['title'] !!}</span>
        </a>
      </li>
    @endforeach
  </ul>
</div>
