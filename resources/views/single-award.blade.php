@extends('layouts.app')

@section('container')
  <main class="main">

    @while(have_posts()) @php the_post() @endphp
    @include('partials.breadcrumbs')

    <div class="container mb-8">
      <div class="flex flex-wrap -mx-2">
        <div class="my-2 px-2 w-full lg:w-2/3">
          @include('partials.post-header')
          @include('partials.content-single')
        </div>
        <div class="my-2 px-2 w-full lg:w-1/3">
          @php $cat = wp_get_object_terms($post->ID, 'award_category'); @endphp
          @if($cat)
            <div class="bg-blue-700 p-6 rounded-lg">
              <h2 class="font-bold text-xl mb-4">{!! $cat[0]->name !!}</h2>
              <div class="italic">
                {!! $cat[0]->description !!}
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
    @endwhile

  </main>
@endsection
