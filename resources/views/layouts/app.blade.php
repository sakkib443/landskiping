<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <script>document.documentElement.classList.add('js');</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Landscaping BD — Professional Landscaping Services in Bangladesh')</title>
    <meta name="description" content="@yield('meta_description', 'Professional landscaping, rooftop garden design, vertical gardening, natural grass installation, garden design, tree plantation & landscape maintenance across Bangladesh.')">

    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2323a23a'%3E%3Cpath d='M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66.95-2.3c.48.17.98.3 1.34.3C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C3 11 8 8 17 8Z'/%3E%3C/svg%3E">

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-white font-sans text-ink-900 antialiased">
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @livewireScripts
</body>
</html>
