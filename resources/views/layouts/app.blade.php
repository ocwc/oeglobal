<!doctype html>
<html {!! get_language_attributes() !!} class="font-sans">
  @include('partials.head')

  <body @php(body_class())>
    @php(wp_body_open())
    @php(do_action('get_header'))
    @include('partials.header')

    @section('container')
      @include('partials.breadcrumbs')
      <div class="container">
        <div class="content lg:mb-6 lg:p-6">
          <main class="main">
            @yield('content')
          </main>
        </div>
      </div>
    @show

    @php(do_action('get_footer'))
    @include('components.footer', ['site' => $site])

    @php(wp_footer())
  </body>
</html>
