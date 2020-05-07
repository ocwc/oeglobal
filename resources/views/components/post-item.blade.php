<div class="my-2 px-2 w-full lg:w-1/2">
  <div class="post-item mb-6">
    <div class="p-6">
      <a href="{!! $url !!}">
        <h2 class="h3">{!! $title !!}</h2>
      </a>

      <p class="byline author vcard text-sm my-2 text-gray-500">
        <span class="font-semibold font-sans">{{ __('By', 'sage') }} {!! $author !!}</span> {{ __('on', 'sage') }}
          {!! $date !!}
      </p>


      <div class="text-sm font-normal leading-relaxed">
        {!! $excerpt !!}
      </div>

      <div class="mt-6">
        <a href="{!! $url !!}">Learn more ...</a>
      </div>
    </div>
  </div>
</div>
