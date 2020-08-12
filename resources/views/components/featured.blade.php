<article class="mb-8 flex justify-center pb-16">
  <div class="content content-excerpt content-featured
              lg:mb-6 w-full
              flex items-stretch justify-start flex-col
              shadow-lg rounded bg-white relative">

    <a href="{!! $url !!}"
       class="bg-cover bg-center h-64 no-transition"
       style="background-image: url('{!! $image !!}');">
    </a>

    <div class="bg-white p-6">
      <header>
        <div class="content-excerpt__categories">
          @if ($webinar_date)
              <a href="'/webinar/">Webinar</a>
          @else
            @foreach (App::TermsWithLinks($post) as $term)
              <a class="bg-none" href="{!! $term['link'] !!}">{!! $term['name'] !!}</a>@if(!$loop->last), @endif
            @endforeach
          @endif
        </div>

        <h2 class="entry-title font-sans text-left mt-2">
          <a href="{!! $url !!}">
            {!! $title !!}
          </a>
        </h2>
      </header>
      <div>
        {!! $excerpt !!}
      </div>
    </div>

  </div>
</article>
