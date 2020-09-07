<p class="byline author vcard text-sm mt-8 font-sans">
@foreach ($coauthors as $author)
  <div class="@if (count($coauthors) > 1) block mb-4 flex items-center @else inline @endif">
    <img class="h-10 rounded inline-block mr-2"
         src="{!! $author['avatar'] !!}"
         alt="{!! $author['display_name'] !!}"/>
    <span class="font-semibold">{{ $author['display_name'] }}</span>
  </div>
@endforeach

<time class="updated mt-4 @if (count($coauthors) > 1) block @else inline @endif"
      datetime="{{ get_post_time('c', true) }}">
  {{ __('on', 'sage') }} {{ get_the_date() }}
</time>

</p>
