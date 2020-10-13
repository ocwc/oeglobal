{{--
  Template Name: CCCOER Members List
--}}

@extends('layouts.app')

@section('container')
  <script>window.mapboxAccessToken = '{!! MAP_TOKEN !!}';</script>

  <main class="main">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.breadcrumbs')
    @include('partials.page-header')

    <article @php(post_class('container'))>
      <div class="content lg:mb-6 lg:py-6 w-full">
        @php(the_content())

        @php([$members, $states, $letters] = $members_list)
        <div class="flex flex-col md:flex-row">
          <div class="members-counter w-full lg:w-1/3">
            <h1 class="text-center"><b><?= count( $members ); ?> members</b><br/><b><?= count( $states ); ?> states</b>
            </h1>
            <div id="members-map-hawaii" class="hidden md:block"></div>
          </div>
          <div class="w-full lg:w-2/3 flex">
            <div id="members-map"></div>
          </div>
        </div>
      </div>
    </article>


    <div class="members-toc">
      <div class="w-full text-center">
        @foreach ( range( 'A', 'Z' ) as $letter )
          @php( $disabled  = in_array( $letter, $letters ) ? false : true  )
          <a
            class="btn @if($disabled) oeg-inverted @else simple @endif text-sm rounded"
            @if($disabled) disabled @else href="#{!! $letter !!}" @endif>{!! $letter; !!}</a>
        @endforeach
      </div>
      <div class="container mt-6">
        <small class="">Colleges are listed by state</small>
      </div>
    </div>

    <div class="container">
      @php($state = [[]])
      @php($current_letter = null)
      @foreach ( $states as $state => $members )
        @if ( $current_letter !== $state[0] )
          @php($current_letter = $state[0])
          <a name="{!! $current_letter; !!}" class="member-toc-target"></a>
        @endif


        <div class="w-full block">
          <h2 class="text-xl font-bold my-8"><?php echo $state; ?></h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
          @foreach($members as $member)
            <div class="members-single-member text-center">
              <a class="member-logo" href="/about/members/view/?member_id={!! $member->id !!}">
                <img class=""
                     src="https://members.oeglobal.org/{!! $member->logo_large !!}"
                     alt="{!! $member->name !!} logo">

                <div class="member-readmore">
                  <span>Read more...</span>
                </div>
              </a>

              <a class="member-name pb-2 block text-center"
                 href="/about/members/view/?member_id={!! $member->id !!}">{!! $member->name !!}</a>
            </div>
          @endforeach
        </div>
      @endforeach
    </div>

    @endwhile

  </main>
@endsection
