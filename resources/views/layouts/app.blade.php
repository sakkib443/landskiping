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
    {{-- Brand preloader: animated 0 → 100% loading screen (hidden when JS is off) --}}
    <div id="preloader" class="preloader" role="status" aria-label="Loading Landscaping BD">
        <div class="preloader__inner">
            <img src="{{ asset('images/brand/logo-mark.png') }}" alt="" width="84" height="84" class="preloader__logo">
            <div class="preloader__name">LANDSCAPING <span class="preloader__accent">BD</span></div>
            <div class="preloader__tagline">Enhancing Nature. Elevating Spaces.</div>
            <div class="preloader__count"><span id="preloader-count">0</span><span class="preloader__pct">%</span></div>
            <div class="preloader__bar"><span id="preloader-fill" class="preloader__fill"></span></div>
        </div>
    </div>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    {{-- Floating WhatsApp button --}}
    <a href="https://wa.me/8801777539790?text=Hello%20Landscaping%20BD%2C%20I%27d%20like%20a%20quote%20for%20my%20project."
       target="_blank" rel="noopener noreferrer" aria-label="Chat with Landscaping BD on WhatsApp"
       class="group fixed bottom-5 right-5 z-40 inline-flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] text-white shadow-premium ring-1 ring-black/5 transition-transform hover:scale-105 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400 focus-visible:ring-offset-2 print:hidden">
        <span class="pointer-events-none absolute inset-0 -z-10 rounded-full bg-[#25D366]/60 wa-pulse"></span>
        <svg class="h-7 w-7" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true">
            <path d="M16.004 0h-.008C7.174 0 .002 7.174.002 16c0 3.5 1.13 6.744 3.05 9.38L1.06 31.06l5.86-1.873A15.9 15.9 0 0 0 16 32h.004C24.83 32 32 24.826 32 16S24.83 0 16.004 0Zm9.32 22.598c-.387 1.092-1.922 1.998-3.146 2.262-.838.18-1.93.32-5.61-1.204-4.706-1.95-7.736-6.73-7.972-7.04-.226-.31-1.903-2.534-1.903-4.834 0-2.3 1.17-3.43 1.586-3.9.343-.387.91-.563 1.453-.563.176 0 .334.01.476.017.416.018.626.042.9.698.343.82 1.17 2.87 1.27 3.08.102.21.204.49.06.8-.134.31-.252.448-.462.7-.21.252-.41.448-.62.72-.19.24-.404.5-.174.91.23.41 1.022 1.686 2.196 2.732 1.514 1.35 2.79 1.77 3.22 1.98.32.158.7.13.96-.16.33-.366.74-.97 1.157-1.566.296-.42.67-.474 1.063-.327.4.14 2.535 1.196 2.97 1.413.434.217.722.323.83.504.106.18.106 1.04-.282 2.13Z"/>
        </svg>
        <span class="pointer-events-none absolute right-full mr-3 hidden whitespace-nowrap rounded-lg bg-forest-900 px-3 py-1.5 text-xs font-medium text-white opacity-0 transition-opacity group-hover:opacity-100 lg:block">Chat on WhatsApp</span>
    </a>

    @livewireScripts
</body>
</html>
