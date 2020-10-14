@extends('layouts.app')

@section('container')
  <main class="main relative">
    <div class="bg-awards absolute top-0 w-full h-192 z-0 bg-center"></div>
    <div class="relative z-10">
      @while(have_posts()) @php the_post() @endphp
      @php($cats = wp_get_object_terms($post->ID, 'award_category'))

      <div class="text-white">
        @include('partials.breadcrumbs')
      </div>
      <div class="md:container mb-8">
        <div class="flex flex-wrap">
          <div class="my-2 w-full lg:w-2/3 bg-white rounded-t overflow-hidden">
            @include('partials.post-header')

            <article @php(post_class('mt-8 px-4 md:px-8'))>
              <div class="mb-4">
                @foreach($cats as $term)
                  <span
                    class="uppercase font-bold text-sm tracking-widest">{!! $term->name !!} Award</span>@if(!$loop->last)
                    , @endif
                @endforeach
              </div>


              <div class="flex lg:justify-between gap-8 content flex-col lg:flex-row">
                <div class="flex-auto">
                  <h1 class="h1">{!! get_the_title() !!}</h1>
                  <h2 class="h3 -mt-2">{!! get_field('institution') !!}
                    (@if (get_field('region')){!! get_field('region') !!}, @endif{!! get_field('country') !!})</h2>
                </div>
                <div class="flex-grow -mt-6 md:mt-0">
                  @if(get_field('link'))<a href="{!! get_field('link') !!}"
                                           class="btn simple whitespace-no-wrap"
                                           target="_blank"
                                           rel="noopener nofollower">Visit Project @svg('icons/link', 'h-6 ml-2')</a>
                  @endif
                </div>
              </div>

              <div class="content mt-4 lg:mb-6 w-full entry-content">
                @php(the_content())
              </div>
            </article>

          </div>
          <div class="my-2 md:pl-4 w-full lg:w-1/3">
            @component('components.content-share', [
                'title' => get_the_title(),
                'site' => get_bloginfo('name'),
                'url' => get_the_permalink()
            ])@endcomponent
            @if($cats)
              @php($cat = $cats[0])
              @if($cat->description)
                <div class="bg-gray-900 p-4 py-8 rounded flex flex-col justify-center">
                  @php($img = get_field('featured_icon', $cat))
                  @if($img)
                    <img src="{!! $img['url'] !!}" alt="" class="mb-4 h-32">
                  @endif

                  <h2 class="font-bold text-xl mb-4">About {!! $cat->name !!} Award</h2>
                  <p>
                    {!! $cat->description !!}
                  </p>
                </div>
              @endif
            @endif
          </div>
        </div>
      </div>
      @endwhile
    </div>
  </main>
@endsection
