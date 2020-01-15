<article @php(post_class('container'))>
  <div class="content lg:mb-6 lg:p-6 lg:w-2/3 lg:ml-1/12">
    <header>
      <h2 class="entry-title text-left">
        <a href="{{ get_permalink() }}">
          {!! get_the_title() !!}
        </a>
      </h2>
      @include('partials/entry-meta')
    </header>

    <div class="entry-summary">
      @php(the_content())
    </div>
  </div>
</article>
