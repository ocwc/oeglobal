<h2 class="w-full border-b border-gray-400 text-xl font-sans pb-2 mb-2">{!! $title !!}</h2>
<div class="flex flex-wrap -mx-2 overflow-hidden">
  @foreach ($items as $item)
    <div class="my-2 px-2 w-full lg:w-1/3 overflow-hidden">
      <div class="bg-gray4 p-6">
        <a href="{!! $item['url'] !!}" class="text-center pb-4 block">
          <img class="m-auto h-16 lg:h-12" src="{!! $item['image'] !!}" alt="{!! $item['name'] !!}"/>
        </a>

        <p class="leading-normal">{!! $item['text'] !!}</p>
        <a class="inline-block mt-6" href="{!! $item['url'] !!}">Learn more ...</a>
      </div>
    </div>
  @endforeach
</div>
