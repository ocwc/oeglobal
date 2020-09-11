<footer class="bg-blue-300 text-blue-900">
  <div class="container">
    <div class="flex flex-wrap lg:flex-no-wrap items-start pb-6">
      @if ($site === 'oeg')
        <div class="flex flex-col items-center
                  w-full lg:w-1/4
                  p-4
                  mx-4 md:mx-0">
          <img src="@asset('images/logos/oeglobal-white.svg')" class="w-full h-auto max-h-20 mb-4 oeg-logo-shadow"
               alt="OE Global Logo" />
          <p class="text-white text-center text-sm mt-4">
            <a href="/about-us/contact-us/">Contact</a>
            <span class="px-1">|</span>
            <a href="https://twitter.com/OpenEdGlobal">Twitter</a>
          </p>
        </div>
      @elseif ($site === 'cccoer')
        <div class="flex flex-col
                  w-full lg:w-1/4

                  mx-4 md:mx-0">
          <div class="bg-white p-4">
            @svg('logos/cccoer', 'w-full h-auto max-h-16 mb-4')
            <p class="text-black-400 text-sm">CCCOER is a regional node of Open Education Global.</p>
          </div>

          <div class="flex flex-row items-center justify-center mt-4">
            <a class="text-white hover:text-turq-600" href="https://twitter.com/cccoer" target="_blank" rel="noopener">@svg('icons/twitter-inverted', 'w-auto h-auto
              max-h-16 mb-4 fill-current')</a>
            <a class="text-white hover:text-turq-600" href="https://www.youtube.com/playlist?list=PLze0jtuKTgpFV4M27-g6YojfSMXxIOeVd" target="_blank"
               rel="noopener">@svg('icons/youtube-inverted', 'w-auto h-auto max-h-16 mb-4 ml-4 fill-current')</a>
          </div>
        </div>


      @elseif ($site === 'latam')
        <div class="flex flex-col items-start bg-white
                  w-full lg:w-1/4
                  p-4
                  mx-4 md:mx-0">
          @svg('logos/oelatam', 'w-full h-auto max-h-16 mb-4')
          <p class="text-gray-500 text-sm">OE LATAM es un nodo regional latinoamericano del consorcio de educación
            abierta
            OE GLOBAL.</p>
        </div>
      @elseif ($site === 'awards')
        <div class="flex flex-col items-start bg-white
                  w-full lg:w-1/4
                  p-4
                  mx-4 md:mx-0 rounded">
          @svg('logos/oeawards', 'w-full h-auto')
        </div>
      @endif
      <div class="w-full lg:w-1/12 pb-8"></div>

      @include('partials.navigation-footer')
    </div>
    @if ($site !== 'oeg')
      <div class="flex items-center justify-center flex-col text-xs">
        <a href="https://www.oeglobal.org">@svg('logos/oeglobal-inverted', 'w-auto h-40')</a>
        <a class="mt-3 mb-4" href="https://www.oeglobal.org">www.oeglobal.org</a>
      </div>
    @endif
    <div class="flex flex-col lg:flex-row
                border-t border-white pt-8
                small">
      <div class="w-full lg:w-8/12
                  pb-4 lg:pb-0">
        Content on this site is licensed under a <a class="underline" href="https://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>, <br class="hidden md:block" />except where otherwise noted.
      </div>
      <div class="flex lg:justify-end lg:items-start
                  w-full lg:w-1/3 lg:pl-10">
        <a class="mb-0! underline" href="https://www.oeconsortium.org/terms-of-use-and-privacy-policies/"
           target="_blank"
           rel="noopener">Terms of Use and Privacy Policies.</a>
      </div>
    </div>
  </div>
</footer>
