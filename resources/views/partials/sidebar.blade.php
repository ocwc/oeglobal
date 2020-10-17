{{--@php(dynamic_sidebar('sidebar-primary'))--}}
@component('components.content-share', [
    'title' => get_the_title(),
    'site' => get_bloginfo('name'),
    'url' => get_the_permalink()
])@endcomponent
