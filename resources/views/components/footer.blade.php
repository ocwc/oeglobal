<footer class="bg-main-darker text-light">
  <div class="container">
    <div class="flex flex-wrap lg:flex-no-wrap pb-6">
      <div class="flex flex-col items-start bg-white
                  w-full lg:w-1/4
                  p-4
                  mx-4 md:mx-0">
        @svg('logos/oelatam', 'w-full h-auto max-h-16 mb-4')
        <p class="text-gray-600 text-sm">OE LATAM es un nodo regional latinoamericano del consorcio de educación abierta
          OE GLOBAL.</p>
      </div>
      <div class="w-full lg:w-1/12 pb-4"></div>

      @include('partials.navigation-footer')
    </div>
    <div class="flex items-center justify-center flex-col text-xs">
      <a href="https://www.oeconsortium.org">@svg('logos/oec-inverted', 'w-auto h-24')</a>
      <a class="mt-3 mb-4" href="https://www.oeconsortium.org">www.oeconsortium.org</a>
    </div>
    <div class="flex flex-col lg:flex-row
                border-t border-white pt-8
                small">
      <div class="w-full lg:w-8/12
                  pb-4 lg:pb-0">
        All content on oelatam.org is licensed under a Creative Commons Attribution 4.0 License.
      </div>
      <div class="flex lg:justify-end lg:items-end
                  w-full lg:w-1/3 lg:pl-10">
        <a class="mb-0! small underline" href="https://www.oeconsortium.org/terms-of-use-and-privacy-policies/" target="_blank"
           rel="noopener">Terms of Use and Privacy Policies.</a>
      </div>
    </div>
  </div>
</footer>
