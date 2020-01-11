<footer class="bg-main-darker text-light">
  <div class="container">
    <div class="flex flex-wrap lg:flex-no-wrap pb-6">
      @if ($site === 'oeg')
        <div class="flex flex-col items-center
                  w-full lg:w-1/4
                  p-4
                  mx-4 md:mx-0">
          <img src="@asset('images/logos/oeglobal-white.svg')" class="w-full h-auto max-h-20 mb-4 oeg-logo-shadow"
               alt="" OE Global Logo" />
          <p class="text-white text-center text-sm mt-4">
            <a href="#">Contact</a>
            <span class="px-1">|</span>
            <a href="#">Facebook</a>
            <span class="px-1">|</span>
            <a href="#">Twitter</a>
          </p>
        </div>
      @elseif ($site === 'latam')
        <div class="flex flex-col items-start bg-white
                  w-full lg:w-1/4
                  p-4
                  mx-4 md:mx-0">
          @svg('logos/oelatam', 'w-full h-auto max-h-16 mb-4')
          <p class="text-gray-600 text-sm">OE LATAM es un nodo regional latinoamericano del consorcio de educación
            abierta
            OE GLOBAL.</p>
        </div>
      @endif
      <div class="w-full lg:w-1/12 pb-8"></div>

      @include('partials.navigation-footer')
    </div>
    @if ($site !== 'oeg')
      <div class="flex items-center justify-center flex-col text-xs">
        <a href="https://www.oeconsortium.org">@svg('logos/oec-inverted', 'w-auto h-24')</a>
        <a class="mt-3 mb-4" href="https://www.oeconsortium.org">www.oeconsortium.org</a>
      </div>
    @endif
    <div class="flex flex-col lg:flex-row
                border-t border-white pt-8
                small">
      <div class="w-full lg:w-8/12
                  pb-4 lg:pb-0">
        @if ($site === 'oeg')
          All content on oeglobal.org is licensed under a Creative Commons Attribution 4.0 License.
        @elseif ($site === 'latam')
          All content on oelatam.org is licensed under a Creative Commons Attribution 4.0 License.
        @endif
      </div>
      <div class="flex lg:justify-end lg:items-end
                  w-full lg:w-1/3 lg:pl-10">
        <a class="mb-0! underline" href="https://www.oeconsortium.org/terms-of-use-and-privacy-policies/"
           target="_blank"
           rel="noopener">Terms of Use and Privacy Policies.</a>
      </div>
    </div>
  </div>
</footer>
