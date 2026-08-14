<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.seo')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-canvas text-text-primary font-sans antialiased flex flex-col min-h-screen">
    <x-navigation />

    <main class="flex-grow">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
