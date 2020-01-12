<form role="search" method="get" class="search-form w-2/3" action="{{ esc_url( home_url( '/' ) ) }}">
  <label>
    <span class="screen-reader-text hidden">{{ _x( 'Search for:', 'label' ) }}</span>
    <input type="search" class="search-field" placeholder="{!! esc_attr_x( 'Search &hellip;', 'placeholder' ) !!}"
           value="{{ get_search_query() }}" name="s"/>
  </label>
  <input type="submit" class="search-submit hidden" value="{{ esc_attr_x( 'Search', 'submit button' ) }}"/>
</form>
