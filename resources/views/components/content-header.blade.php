@php($variant = $variant ?? null)
@php($background_image = $background_image ?? null)
@php($attribution = $attribution ?? null)
@php($is_search = $is_search ?? null)
@php($excerpt = $excerpt ?? null)
@if ($variant === 'sublanding')
  <div class="contentheader-strip text-black2"
       @if($background_image)style="background-image: url({!! $background_image !!}" @endif>
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
@elseif ($variant === 'sidebar')
  <div class="contentheader-strip text-light
              @if($background_image) with-bg-image @endif"
       @if($background_image)style="background-image: url({!! $background_image !!}" @endif>
    <div class="container flex flex-col justify-end">
      <div class="content px-0 py-2 lg:py-0
        w-full
        flex-inline
">
        <div class="contentheader-strip__content">
          <h1 class="contentheader-strip__h1 z-20 relative">
            {!! $title !!}
          </h1>

          @if ($excerpt ?? null)
            <div class="leading-relaxed z-20 relative">
              {!! $excerpt !!}
            </div>
          @endif

          @if ($is_search ?? null)
            {!! get_search_form(false) !!}
          @endif
        </div>
      </div>
    </div>
  </div>

  @if ($attribution ?? null)
    <div class="contentheader-attribution font-sans text-xs text-gray2 my-2">
      {!! $attribution !!}
    </div>
  @endif
@elseif($variant === 'basic')
  <div class="container w-full">
    <div class="mb-6">
      <h1 class="text-3xl font-bold h1">{!! $title !!}</h1>
    </div>
  </div>
@else
  <div class="contentheader-strip text-light
      @if ($attribution) mb-2 @else mb-12 @endif"
       @if($background_image)style="background-image: url({!! $background_image !!}" @endif>
    <div class="container flex flex-col justify-center">
      <div class="content lg:px-6 py-12 lg:py-0
                  w-full lg:w-2/3 lg:ml-1/12
                flex-inline
                ">
        <div class="contentheader-strip__content w-full md:w-auto">
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

  @if ($attribution)
    <div class="mb-8 pr-4 text-right">
      <div class="contentheader-attribution font-sans text-xs text-gray2">
        {!! $attribution !!}
      </div>
    </div>
  @endif
@endif
