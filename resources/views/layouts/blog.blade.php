<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon"/>

    <title>{{ $title ?? config('app.name', 'Page Title') }}{{ isset($subtitle) ? ' - '.$subtitle  : ' - ' . config('app.subtitle', 'Page subtitle')}}</title>

    <!-- Scripts -->
    @vite('resources/css/blog.css')
    @livewireStyles
</head>
<body class="relative antialiased bg-white dark:bg-gray-900 dark:text-white">
<x-blog.dark-mode-switch/>
<x-blog.header/>
{{ $slot }}
<x-blog.footer/>
@livewireScripts
@vite('resources/js/blog.js')
</body>
</html>

