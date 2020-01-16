<p class="byline author vcard text-sm mt-6">
  <span class="font-semibold font-sans">{{ __('By', 'sage') }} {{ get_the_author() }}</span> {{ __('on', 'sage') }} <time class="updated inline" datetime="{{ get_post_time('c', true) }}">
    {{ get_the_date() }}
  </time>
</p>
