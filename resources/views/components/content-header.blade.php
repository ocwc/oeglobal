<div class="contentheader-strip text-light"
            @if($background_image)style="background-image: url({!! $background_image !!}"@endif>
  <div class="container flex flex-col justify-center">
    <div class="content px-6
                w-full lg:w-2/3 lg:ml-1/12
                flex-inline
                ">
      <div class="contentheader-strip__content px-2 py-4">
        <h1 class="contentheader-strip__h1 z-20 relative">
          {!! $title !!}
        </h1>

        @if ($excerpt)
          <div class="leading-relaxed z-20 relative">
            {!! $excerpt !!}
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
