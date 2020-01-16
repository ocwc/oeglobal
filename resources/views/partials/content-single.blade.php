<article @php(post_class())>
  <header>
    @include('partials/entry-meta')
  </header>

  <div class="content lg:mb-6 w-full entry-content">
    @php(the_content())
  </div>
</article>

<div class="flex flex-wrap mt-10">
  <div class="w-1/2 prev-next-post prev">
    @php(previous_post_link('%link', 'Previous'))
  </div>
  <div class="w-1/2 text-right prev-next-post next">
    @php(next_post_link('%link', 'Next'))
  </div>
</div>
