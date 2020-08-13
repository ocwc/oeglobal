<article class="container flex justify-center py-16">
  <a href="{!! $link !!}"
     class="content content-excerpt
              flex items-stretch justify-between flex-row
              shadow-box hover:shadow-xl rounded bg-white relative no-transition">
    @if($featured)
      @svg('icons/megaphone', 'h-22 w-22 absolute cccoer__featured__icon')
    @endif

    @if($image)
      <span href="{!! $link !!}"
            class="bg-cover bg-center w-1/4"
            style="background-image: url('{!! $image !!}');">
        </span>
    @endif

    <div class="
      pl-8 px-6 pb-4 content-excerpt__body
        @if($image)w-3/4
        @else w-full
        @endif
      ">
      <header class="pt-6">
        @if($terms)
          <div class="">
            @foreach ($terms as $term)
              <span class="bg-none">{!! $term['name'] !!}</span>@if(!$loop->last), @endif
            @endforeach
          </div>
        @endif
        <div class="mt-2 mb-4">
          <h2 class="entry-title font-sans text-left pb-1 leading-snug text-xl hover-link inline">
            {!! $title !!}
          </h2>
        </div>
      </header>

      <main class="entry-summary mt-2">
        {!! $description !!}
      </main>

      @if($show_meta)
        <div class="entry-meta">
          @include('partials/entry-meta')
        </div>
      @endif
    </div>
  </a>
</article>
