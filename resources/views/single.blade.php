@extends('layouts.app')

@section('container')
  <main class="main">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.breadcrumbs')

    <div class="container mb-8">
      <div class="flex flex-wrap -mx-2">
        <div class="my-2 px-2 w-full lg:w-2/3">
          @if (OEG_SITE !== 'CCCOER')
            @include('partials.post-header')
          @endif

          <article @php(post_class('px-4 md:px-8'))>
            <div class="mb-4">
              <?php if (get_post_type() === 'webinar') {
                  $cats = wp_get_post_terms($post->ID, 'webinar_category');
                } else {
                  $cats = wp_get_post_terms($post->ID, 'category');
                }
              ?>
              @foreach($cats as $term)
                <span class="uppercase font-bold text-sm tracking-widest">{!! $term->name !!}</span>@if(!$loop->last)
                  , @endif
              @endforeach
            </div>

            <h1 class="h1">{!! get_the_title() !!}</h1>

            <div class="content mt-10 lg:mb-6 w-full entry-content">
              @php(the_content())
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
        </div>
        <div class="my-2 px-2 w-full lg:w-1/3">
          @include('partials.sidebar')
        </div>
      </div>
    </div>
    @endwhile

{{--    @if (OEG_SITE === 'CCCOER' && $post_type === 'post' || $post_type === 'webinar')--}}
{{--      @component('components/section-header', ['title' => 'Related content', 'border' => 'border-gray-800'])@endcomponent--}}
{{--      <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">--}}
{{--        @foreach(App::RelatedPosts($post) as $post)--}}
{{--          @component('components/content-excerpt', [--}}
{{--            'title' => get_the_title($post),--}}
{{--            'link' => get_the_permalink($post),--}}
{{--            'image' => get_the_post_thumbnail_url( $post, 'large' ),--}}
{{--            'meta_type' => 'string',--}}
{{--            'meta_string' => get_the_date( 'M j, Y', $post ),--}}
{{--            'is_tall' => true,--}}
{{--            'post' => $post--}}
{{--          ])--}}
{{--          @endcomponent--}}
{{--        @endforeach--}}
{{--      </div>--}}
{{--    @endif--}}
  </main>
@endsection
