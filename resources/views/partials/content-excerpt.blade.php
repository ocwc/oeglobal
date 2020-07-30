<article @php(post_class('container mb-8'))>
  <div class="content content-excerpt
              lg:mb-6 lg:p-6
              flex items-stretch justify-between flex-row
              shadow-lg rounded">
    @if (has_post_thumbnail())
      <a href="{{ get_permalink() }}"
          class="bg-cover bg-center w-1/4 mr-4"
           style="background-image: url('{!! get_the_post_thumbnail_url(null, 'large') !!}');">
      </a>
    @endif
    <div class="w-3/4">
      <header>
        <div class="content-excerpt__categories">
          @foreach (App::TermsWithLinks($post) as $term)
            <a class="bg-none" href="{!! $term['link'] !!}">{!! $term['name'] !!}</a>@if(!$loop->last), @endif
          @endforeach
        </div>

        <h2 class="entry-title font-sans text-left mt-2">
          <a href="{{ get_permalink() }}">
            {!! get_the_title() !!}
          </a>
        </h2>
      </header>

      <div class="entry-summary">
        @php(the_excerpt())
      </div>

      <div class="entry-meta">
        @include('partials/entry-meta')
      </div>
    </div>
  </div>
</article>
