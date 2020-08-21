<div class="container">
  <div class="flex w-full border-b border-black-300 pb-2 mb-6 justify-between items-end">
    <h2 class="text-black-300 text-xl font-bold font-sans">{!! $title !!}</h2>
    @if($url ?? null)
      <a class="text-black-300 flex items-center hover:text-turq-400"
         href="{!! $url !!}">

        @svg('icons/stream', 'h-4 w-auto inline-block mr-2 fill-current')
        View all
      </a>
    @endif

    @if(($twitter ?? null) || ($youtube ?? null))
      <div class="flex flex-row items-center justify-center mt-4 text-black-400">
        <span class="mr-4 text-sm">Follow our social media pages</span>

        <a class="text-turq-600 hover:text-blue-600" href="https://twitter.com/cccoer" target="_blank" rel="noopener">
          @svg('icons/twitter', 'w-auto h-auto max-h-16 fill-current')
        </a>
        <a href="https://www.youtube.com/playlist?list=PLze0jtuKTgpFV4M27-g6YojfSMXxIOeVd" target="_blank"
           rel="noopener" class="text-red-600 hover:text-blue-600">@svg('icons/youtube', 'w-auto h-auto max-h-16 ml-4 fill-current')
        </a>
      </div>
    @endif
  </div>
</div>
