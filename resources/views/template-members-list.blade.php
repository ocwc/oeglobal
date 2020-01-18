{{--
  Template Name: Members List
--}}

@extends('layouts.app')

@section('container')
  <main class="main">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.breadcrumbs')
    @include('partials.page-header')

    <article @php(post_class('container'))>
      <div class="content lg:mb-6 lg:p-6 w-full lg:w-2/3 lg:ml-1/12">
        @php(the_content())

        <h3 class="mt-6">List of OEG members</h3>
        <p class="mt-6">@svg('icons/star-solid', 'h-4 -mt-2 inline-block') = Sustaining Member</p>

        <ul class="mt-10">
          @if ($members_list)
            @foreach ($members_list as $member)
              <li class="list-none ml-0">
                @if ($member->membership_status === 'Sustaining')
                  @svg('icons/star-solid', 'h-4 -mt-2 inline-block')
                @endif
                <a href="/members/view/?member_id={!! $member->id !!}">{!! $member->name !!}</a></li>
            @endforeach
          @else
            <p>Error loading members list</p>
          @endif
        </ul>
      </div>
    </article>


    @endwhile

  </main>
@endsection
