{{--
  Template Name: Elections
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

        <h3 class="mt-6">Candidates for Board of Directors</h3>

        <ul>
          @foreach ($candidates as $candidate)
            <li>
              <strong>{!! $candidate->candidate_first_name !!} {!! $candidate->candidate_last_name !!}</strong>, {!! $candidate->organization !!}
              <button class="js-show-more a">(more information)</button>
              <ul class="ml-0 hidden">
                <li><strong>Job Title</strong><br/>{!! $candidate->candidate_job_title!!}</li>
                @if ( $candidate->biography )
                  <li><strong>Biography</strong><br/>{!! nl2br($candidate->biography)!!}</li>
                @endif
                <li><strong>Vision</strong><br/>{!! nl2br($candidate->vision)!!}</li>
                <li><strong>Ideas</strong><br/>{!! nl2br($candidate->ideas)!!}</li>
                <li><strong>Expertise</strong><br/>{!! nl2br($candidate->expertise)!!}</li>
                @if( $candidate->expertise_other )
                  <li><strong>Other Expertise</strong><br/>{!! nl2br($candidate->expertise_other)!!}</li>
                @else
                  <li><strong>Reason for candidacy</strong><br/>{!! nl2br($candidate->reason)!!}</li>
                @endif
              </ul>

            </li>
          @endforeach
        </ul>
      </div>
    </article>
    @endwhile
  </main>
@endsection
