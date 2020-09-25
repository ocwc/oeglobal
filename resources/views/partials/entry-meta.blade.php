@php($coauthors = $coauthors ?? null)
<div class="byline author vcard my-8 font-sans">
  @if($coauthors)
    @foreach ($coauthors as $author)
      <div class="@if (count($coauthors) > 1) block mb-4 flex items-center @else inline @endif">
        <img class="h-8 rounded inline-block mr-2"
             src="{!! $author['avatar'] !!}"
             alt="{!! $author['display_name'] !!}"/>
        <span class="font-semibold text-base text-gray-500">{{ $author['display_name'] }}</span>
      </div>

    @endforeach
  @else
    <span class="font-semibold text-base text-gray-500">{{ get_the_author_meta('display_name') }}</span>
  @endif

  <time class="updated mt-4 text-base text-gray-500 @if ($coauthors && count($coauthors) > 1) block @else inline @endif"
        datetime="{{ get_post_time('c', true) }}">
    {{ __('on', 'sage') }} {{ get_the_date() }}
  </time>
</div>
