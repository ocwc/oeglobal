{{--
  Template Name: CCCOER People
--}}

@extends('layouts.app')

@section('container')
  <main class="main">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.breadcrumbs')
    @include('partials.page-header')

    <article @php(post_class('container'))>
      <div class="content lg:mb-6 lg:py-6 w-full">
        @php(the_content())

        <div class="flex gap-4 my-6 justify-center">
          @foreach($people_list as $value => $role)
            <a href="#{!! $value !!}" class="button text-sm">{!! $role['label'] !!}</a>
          @endforeach
        </div>

        <div class="">
          @foreach($people_list as $value => $role)
            <h2 class="h2" id="{!! $value !!}">{!! $role['label'] !!}</h2>

            @component('components.person-grid', ['items' => $role['items']])@endcomponent
          @endforeach
        </div>
      </div>
    </article>

    @endwhile
  </main>
@endsection
