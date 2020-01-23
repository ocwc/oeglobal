<div class="home-news container mt-10">
  <h2 class="w-full border-b border-gray-400 text-xl font-sans pb-2 mb-2">News and updates</h2>
  <div class="flex flex-wrap -mx-4">
    <div class="my-4 px-4 w-full lg:w-2/3">
      <div class="flex flex-wrap -mx-2">
        @foreach ($latest_news as $item)
          @component('components.post-item', $item)@endcomponent
        @endforeach
      </div>
    </div>
    <div class="my-4 px-4 w-full lg:w-1/3">
      <a class="twitter-timeline" data-height="800" href="https://twitter.com/OpenEdGlobal?ref_src=twsrc%5Etfw">Tweets by OpenEdGlobal</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
</div>
