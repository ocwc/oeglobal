@php($size = $size ?? '')
<div class="person-image rounded-full inline-block {!! $size !!}">
  <img class="absolute rounded-full" src="{!! $src !!}"
       alt="{!! $alt !!}" />
</div>
