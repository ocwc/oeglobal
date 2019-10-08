<div class="image-grid block mb-32 md:flex md:flex-wrap">
    @foreach ($items as $image)
        <div class="image-grid__item
                    w-2/3 md:w-1/3 inline-block">
            <a
                href="{!! $image->url !!}"
            >
            <span
                class="block w-full image-grid__item__image"
                style="background-image: url('{!! $image->image['sizes']['square'] !!}');"
                title="{!! $image->caption !!}"
            ></span>
                <span class="image-grid__item__title">{{ $image->title }}</span>
            </a>
            <a class="image-grid__item__attribution"
               href="{!! $image->attribution_url !!}">{!! $image->attribution_name !!}</a>
        </div>
    @endforeach
</div>
