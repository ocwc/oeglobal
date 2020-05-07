<div class="latam-strip bg-blue-300 flex flex-col justify-end font-sans">
  <div class="container">
    <div class="latam-strip__feature flex justify-around
              flex-wrap">
      @foreach($items as $item)
        <div class="latam-strip__feature__item
                  bg-white border border-gray-600
                  mx-10 p-4
                  w-full lg:w-1/3 xl:w-1/4
                  flex flex-col items-center justify-center">
          <img src="@asset($item->icon);" alt="" aria-hidden="true" class="mb-4 w-24">
          <h3 class="mb-4 font-bold text-xl">{{ $item->title }}</h3>
          <p class="mb-4 text-sm">{{ $item->description }}</p>
          <a href="{{ $item->button_url }}" class="btn btn-latam-orange">{{ $item->button_title }}</a>
        </div>
      @endforeach
    </div>
    <div class="latam-strip__tagline flex flex-col items-center justify-end">
      <h2 class="flex flex-initial italic text-center text-white text-2xl text-gray4">Lo que sucede en Latinoamérica...</h2>
    </div>
  </div>
</div>
