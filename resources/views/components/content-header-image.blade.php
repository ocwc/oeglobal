@if($background_image)
  <div class="w-full h-64 md:h-128 bg-cover bg-center mb-8 "
       @if($background_image)style="background-image: url({!! $background_image !!}" @endif
  ></div>
  @if ($attribution ?? null)
    <div class="contentheader-attribution font-sans text-xs text-gray-600 my-2 px-3">
      {!! $attribution !!}
    </div>
  @endif
@endif
