<div class="my-2 px-2 w-full lg:w-1/2">
  <div class="post-item mb-6 rounded shadow-md">
      <a class="block px-6 pt-6 pb-8" href="{!! $url !!}">
        <h2 class="h3">{!! $title !!}</h2>
      
        <p class="byline author vcard text-sm my-4 text-gray-500">
          <span class="font-semibold font-sans">{{ __('By', 'sage') }} {!! $author !!}</span> {{ __('on', 'sage') }}
            {!! $date !!}
        </p>

        <div class="text-sm font-normal leading-6 font-serif">
          {!! $excerpt !!}
        </div>
      </a>
  </div>
</div>
