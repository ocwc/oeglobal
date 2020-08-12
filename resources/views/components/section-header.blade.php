<div class="container">
  <div class="flex w-full border-b border-black-300 pb-2 mb-6 justify-between items-end">
    <h2 class="text-black-300 text-xl font-bold font-sans">{!! $title !!}</h2>
    <a class="text-black-300 flex items-center hover:text-turq-400"
       href="{!! $url !!}">

      @svg('icons/stream', 'h-4 w-auto inline-block mr-2 fill-current')
      View all
    </a>
  </div>
</div>
