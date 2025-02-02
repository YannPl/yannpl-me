<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Page Title' }}</title>

    <!-- Scripts -->
    @vite(['resources/css/blog.css', 'resources/js/blog.js'])
    @livewireStyles
</head>
<body class="font-sans text-gray-900 antialiased">
{{ $slot }}
@livewireScripts
</body>
</html>

