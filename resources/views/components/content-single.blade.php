@php()global $post; global $coauthors;@endphp
@php($show_slideshare = $show_slideshare ?? false)
<article @php(post_class())>
  @if($show_meta ?? false)
    <header>
      @include('partials/entry-meta')
    </header>
  @endif

  <div class="content lg:mb-6 w-full entry-content">
    @php(the_content())

    @if( get_field('webinar_slideshare') )
      <h2 class="h2"><strong>Slides</strong></h2>
      {!! wp_oembed_get(get_field('webinar_slideshare')) !!}
    @endif
  </div>
</article>

<div class="flex flex-col md:flex-row mt-10 justify-between items-stretch">
  <div class="w-full prev-next-post prev md:mr-2 mb-4 md:mb-0">
    @php(previous_post_link('%link', '<span>⇠ Previous</span><span class="title">%title</span>'))
  </div>
  <div class="w-full text-right prev-next-post next md:ml-2">
    @php(next_post_link('%link', '<span>Next ⇢</span><span class="title">%title</a>'))
  </div>
</div>
