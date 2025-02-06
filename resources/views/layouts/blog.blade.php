<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Page Title') }}</title>

    <!-- Scripts -->
    @vite('resources/css/blog.css')
    @livewireStyles
</head>
<body class="antialiased">
{{ $slot }}
@livewireScripts
@vite('resources/js/blog.js')
</body>
</html>

