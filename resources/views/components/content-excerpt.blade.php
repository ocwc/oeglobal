<article class="flex justify-center my-8 relative">
  @if($featured ?? null)
    @svg('icons/megaphone', 'h-22 w-22 cccoer__featured__icon')
  @endif

  <div
    class="rounded border-2 overflow-hidden border-transparent
           hover:border-turq-500 active:border-transparent
           bg-white content-excerpt__shadow flex">
    <a href="{!! $link !!}"
       class="content content-excerpt
              flex items-stretch justify-between
              z-10 relative no-transition overflow-hidden
              flex-col @if(!$is_tall ?? null) md:flex-row @endif
         ">
      @if($image ?? null)
        <span href="{!! $link !!}"
              class="bg-cover bg-center h-64
              @if(!$is_tall ?? null) md:h-auto md:h-auto md:w-1/2 lg:w-1/4 @endif
                "
              style="background-image: url('{!! $image !!}');">
        </span>
      @endif

      <div class="
      pl-8 px-6 pb-4 content-excerpt__body flex flex-col flex-grow
        @if(!$is_tall ?? null)
      @if($image)md:w-3/4
          @else md:w-full
          @endif
      @endif
        ">
        <header class="pt-6">
          @if($terms ?? null)
            <div class="content-excerpt__categories">
              @foreach ($terms as $term)
                <span class="bg-none">{!! $term['name'] !!}</span>@if(!$loop->last), @endif
              @endforeach
            </div>
          @endif
          <div class="mt-2 mb-4">
            <h2 class="entry-title font-sans text-left pb-1 leading-snug text-2xl hover-link inline">
              {!! $title !!}
            </h2>
          </div>
        </header>

        @if($description ?? null)
          <main class="entry-summary mt-2 flex-grow">
            {!! $description !!}
          </main>
        @endif

        @if($show_meta ?? null)
          <div class="entry-meta">
            @include('partials/entry-meta')
          </div>
        @endif

        @if($webinar_date ?? null)
          <div class="mt-6 border-2 border-turq-600 px-2 pt-2 pb-1
                      self-start text-black-400 inline-flex justify-center">
            @svg('icons/calendar', 'h-6 inline-block mr-2') {!! $webinar_date !!}
          </div>
        @endif
      </div>
    </a>
  </div>
</article>
