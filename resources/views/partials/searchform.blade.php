<form role="search" method="get" class="search-form w-full" action="{{ esc_url( home_url( '/' ) ) }}">
  <label class="w-full">
    <span class="screen-reader-text hidden">{{ _x( 'Search for:', 'label' ) }}</span>
    <input type="search" class="search-field shadow appearance-none border rounded w-full py-4 pl-3 pr-12 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="{!! esc_attr_x( 'Type your search here &hellip;', 'placeholder' ) !!}"
           value="{{ get_search_query() }}" name="s"/>
  </label>
  <input type="submit" class="search-submit hidden" value="{{ esc_attr_x( 'Search', 'submit button' ) }}"/>
</form>
