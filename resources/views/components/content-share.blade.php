<div class="fill-current text-blue-500 flex flex-col items-center justify-center bg-gray-900 px-4 pt-6 pb-8 mb-10 rounded">
  <div class="text-black-300 font-bold text-xl mb-4">Share this content</div>
  <div class="">
    <a href="https://twitter.com/intent/tweet?text={{ $title }} - {{ $site }} {{ $url }}"
       target="_blank">@svg('icons/share-twitter', 'h-10 inline-block mr-2')</a>
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}"
       target="_blank">@svg('icons/share-facebook', 'h-10 inline-block mr-2')</a>
    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}">@svg('icons/share-linkedin', 'h-10 inline-block mr-2')</a>
    <a href="mailto:?subject={{ $title }} - {{ $site }}&body={{ $url }}">@svg('icons/share-mail', 'h-10 inline-block mr-2')</a>
</div>
</div>
