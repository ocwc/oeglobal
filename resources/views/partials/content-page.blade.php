<article @php(post_class('container'))>
  <div class="content mb-6 p-6 w-full
    @if ($variant != 'sublanding') lg:w-2/3 lg:ml-1/12 @endif
    ">
    @php(the_content())
  </div>
</article>
