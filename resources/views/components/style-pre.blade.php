<h2 class="text-3xl mb-4">{{ $title }}</h2>

@if ($cmd !== '')
<pre class="rounded bg-main text-white p-3 pb-1 text-sm hidden lg:block">
    {!! htmlentities($slot) !!}
</pre>
@endif
<div class="mt-4 mb-8">
  {{ $slot }}
</div>
