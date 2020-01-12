@if ($variant == 'sublanding')
  <div class="contentheader-strip text-black2"
       @if($background_image)style="background-image: url({!! $background_image !!}"@endif>
    <div class="container flex flex-col justify-center">
      <div class="content lg:px-6
                w-full lg:min-w-1/2 lg:w-1/2 lg:ml-1/3
                flex-inline
                ">
        <div class="contentheader-sublanding__content px-2 pb-4 relative w-full
                    @if(!$excerpt) contentheader-sublanding__nocontent @endif">
          <h1 class="contentheader-sublanding__h1 z-20 -mx-2">
            {!! $title !!}
          </h1>

          @if ($excerpt)
            <div class="leading-relaxed z-20 pt-4 lg:pt-0 px-2 lg:px-0 lg:relative">
              {!! $excerpt !!}
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
@else
  <div class="contentheader-strip text-light"
       @if($background_image)style="background-image: url({!! $background_image !!}"@endif>
    <div class="container flex flex-col justify-center">
      <div class="content px-6 py-12 lg:py-0
                w-full lg:w-2/3 lg:ml-1/12
                flex-inline
                ">
        <div class="contentheader-strip__content">
          <h1 class="contentheader-strip__h1 z-20 relative">
            {!! $title !!}
          </h1>

          @if ($excerpt)
            <div class="leading-relaxed z-20 relative">
              {!! $excerpt !!}
            </div>
          @endif

          @if ($is_search)
            {!! get_search_form(false) !!}
          @endif
        </div>
      </div>
    </div>
  </div>
@endif
