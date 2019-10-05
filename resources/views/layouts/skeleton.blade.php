<!doctype html>
<html {!! get_language_attributes() !!} class="font-sans">
@include('partials.head')

<body @php(body_class())>
@php(wp_body_open())
@php(do_action('get_header'))

@yield('content')

@php(wp_footer())
</body>
</html>
