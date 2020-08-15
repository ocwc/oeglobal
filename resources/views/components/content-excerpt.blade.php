<article class="container flex justify-center py-16 relative">
  @if($featured)
    @svg('icons/megaphone', 'h-22 w-22 cccoer__featured__icon')
  @endif

  <div
    class="rounded border-2 overflow-hidden border-transparent
           hover:border-turq-500 active:border-transparent
           bg-white content-excerpt__shadow">
    <a href="{!! $link !!}"
       class="content content-excerpt
              flex items-stretch justify-between flex-row z-10 relative
               no-transition overflow-hidden">
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
  </div>
</article>
