{{--
  Template Name: CCCOER Home Page Template
--}}

@extends('layouts.skeleton')

@section('content')
  @include('partials.header')

  @php(do_action('get_footer'))
  @include('components.footer')
@endsection
