@extends('layouts.app')

@section('container')
  <main class="main">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.breadcrumbs')

    <div class="container mb-8">
      <div class="flex flex-wrap -mx-2">
        <div class="my-2 px-2 w-full lg:w-2/3">
          @component('components.content-header', [
            'title' => get_the_title(),
            'variant' => 'basic',
            'is_search' => false
          ])
          @endcomponent


          <div class="content alignleft pr-6">
            @php($image_id = get_field( 'authors_image', false, false) )
            @if ( $image_id )
              <img src="{!! wp_get_attachment_image_src($image_id, 'large')[0] !!}" alt="" class="w-32 h-auto" />
            @endif
          </div>

          <article class="content lg:mb-6 w-full entry-content">
            {!! get_field( 'casestudy_overview' ) !!}

            Published on <?php the_date( 'F d, Y' ); ?>
          </article>

          @component('components/content-single', [
              'post' => $post,
              'show_meta' => false
            ])@endcomponent
        </div>
        <div class="my-2 md:pl-4 w-full lg:w-1/3">
          @component('components.content-share', [
              'title' => get_the_title(),
              'site' => get_bloginfo('name'),
              'url' => get_the_permalink()
          ])@endcomponent
        </div>
    </div>
    @endwhile

    @if ($post_type === 'post' || $post_type === 'webinar')
      @component('components/section-header', ['title' => 'Related content', 'border' => 'border-gray-800'])@endcomponent
      <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach(App::RelatedPosts($post) as $post)
          @component('components/content-excerpt', [
            'title' => get_the_title($post),
            'link' => get_the_permalink($post),
            'image' => get_the_post_thumbnail_url( $post, 'large' ),
            'meta_type' => 'string',
            'meta_string' => get_the_date( 'M j, Y', $post ),
            'is_tall' => true,
            'post' => $post
          ])
          @endcomponent
        @endforeach
      </div>
    @endif
  </main>
@endsection
