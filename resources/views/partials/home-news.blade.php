<div class="home-news container mt-10">
  <div class="flex w-full border-b border-gray-400 pb-2 mb-6 justify-between items-end">
    <h2 class="text-xl font-bold font-sans">News and Updates</h2>
    <a class="flex" href="https://oeglobal.org/category/news/">View more</a>
  </div>
  <div class="flex flex-wrap -mx-4">
    <div class="my-4 px-4 w-full lg:w-2/3">
      <div class="flex flex-wrap -mx-2">
        @foreach ($latest_news as $item)
        @component('components.post-item', $item)@endcomponent
        @endforeach
      </div>
    </div>
    <div class="my-4 px-4 w-full lg:w-1/3">
      <a class="twitter-timeline" data-height="800" href="https://twitter.com/OpenEdGlobal?ref_src=twsrc%5Etfw">Tweets by OpenEdGlobal</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
</div>