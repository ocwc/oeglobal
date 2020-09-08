{{--
  Template Name: Members Detail
--}}

@extends('layouts.app')

@section('container')
  <main class="main">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.breadcrumbs')
    @component('components.content-header', [ 'title' => $member->name])@endcomponent

    <article @php(post_class('container'))>
      <div class="content lg:mb-6 lg:p-6 w-full lg:w-2/3 lg:ml-1/12">
        @php(the_content())

        <div class="flex flex-wrap">
          <div class="w-full lg:w-2/3 order-2 lg:order-1">
            {!! nl2br($member->description) !!}
          </div>
          <div class="w-full lg:w-1/3 order-1 lg:order-2 pl-4">
            @if ( $member->logo_small || $member->logo_large)
              @if($member->logo_large)
                <img src="{!! $member->logo_large; !!}" class="responsive-image" alt="Logo of {!! $member->name !!}"/>
              @else
                <img src="{!! $member->logo_small; !!}" class="responsive-image" alt="Logo of {!! $member->name !!}"/>
              @endif
            @endif
          </div>

          <div class="w-full lg:w-2/3 order-3 pt-4">
            @if ( $member->ocw_website )
              <strong>OER/OCW Website:</strong> <a href="{!! $member->ocw_website; !!}"
                                                   target="_blank">{!! $member->ocw_website !!}</a><br/>
            @endif
            @if ( $member->main_website )
              <strong>Institution Website:</strong> <a href="{!! $member->main_website; !!}"
                                                       target="_blank">{!! $member->main_website !!}</a><br/>
            @endif
          </div>

          <div class="w-full lg:w-2/3 order-4 pt-4">
            @foreach (TemplateMembersDetail::getInitiatives($member) as $initiative)
              @if ($loop->first)
                <h3 class="font-bold mt-6">Initiative(s)</h3>
              @endif
              <h3 class="mt-8 font-bold">{!! $initiative->title !!}</h3>
              {!! $initiative->description !!}
              @if ($initiative->url)
                <div class="mt-4">
                  <a class="btn simple" href="{!! $initiative->url; !!}">View Initiative</a>
                </div>
              @endif
            @endforeach
          </div>
        </div>

      </div>
    </article>
    @endwhile

  </main>
@endsection
