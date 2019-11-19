<div class="person-grid block my-16 md:flex md:flex-wrap text-center">
  @foreach ($items as $item)
    <div class="w-full md:w-1/2 lg:w-1/3 mb-10 font-sans">
    @if (App::extractBlockUrl($item))
      <a href="{!! App::extractBlockUrl($item) !!}" class="block font-sans">
    @endif
      @component('components.person-image', [
        'src' => $item['image']['sizes']['square'],
        'alt' => $item['line1'],
      ])@endcomponent

      <div class="text-xl mt-8 mb-4">{!! $item['line1'] !!}</div>
      <div class="italic mb-2">{!! $item['line2'] !!}</div>
      <div class="text-sm text-gray2 mb-2">{!! $item['line3'] !!}</div>
      <div class="text-sm text-gray2">{!! $item['line4'] !!}</div>

    @if (App::extractBlockUrl($item))
      </a>
    @endif
    </div>
  @endforeach
</div>
