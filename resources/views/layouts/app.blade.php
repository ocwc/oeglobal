<!doctype html>
<html {!! get_language_attributes() !!} class="font-sans">
  @include('partials.head')

  <body @php(body_class())>
    @php(wp_body_open())
    @php(do_action('get_header'))
    @include('partials.header')

    @section('container')
    <div class="container">
      <div class="content mb-6 p-6">
        <main class="main">
          @yield('content')
        </main>

        @hasSection('sidebar')
          <aside class="sidebar">
            @yield('sidebar')
          </aside>
        @endif
      </div>
    </div>
    @show

    @php(do_action('get_footer'))
    @include('components.footer')

    @php(wp_footer())
  </body>
</html>
