<p class="byline author vcard text-sm mt-8 font-sans">
  {{ __('By', 'sage') }} <span class="font-semibold">{{ get_the_author() }}</span> {{ __('on', 'sage') }} <time class="updated inline" datetime="{{ get_post_time('c', true) }}">
    {{ get_the_date() }}
  </time>
</p>
