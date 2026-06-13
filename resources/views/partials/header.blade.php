@php
    $nav = [
        ['Home', route('home')],
        ['About Us', route('about')],
        ['Landscaping Services', route('landscaping-services')],
        ['Projects', route('projects')],
        ['Gallery', route('gallery')],
        ['Shop', route('shop')],
        ['Industrial Services', route('industrial-services')],
        ['Our Team', route('team')],
        ['Contact Us', route('contact')],
    ];
    $current = url()->current();
@endphp

<div class="hidden bg-forest-900 text-forest-100 lg:block">
    <div class="container-x flex items-center justify-between py-2 text-xs">
        <div class="flex items-center gap-6">
            <a href="tel:+8801777539790" class="inline-flex items-center gap-2 transition-colors hover:text-white">
                <svg class="h-3.5 w-3.5 text-primary-400" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.46 15.46 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.36 11.36 0 003.56.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.56 1 1 0 01-.25 1.02l-2.2 2.21z"/></svg>
                +880 1777-539790
            </a>
            <a href="mailto:info@landscapingbd.com" class="hidden items-center gap-2 transition-colors hover:text-white sm:inline-flex">
                <svg class="h-3.5 w-3.5 text-primary-400" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                info@landscapingbd.com
            </a>
        </div>
        <div class="flex items-center gap-6">
            <span class="inline-flex items-center gap-2">
                <svg class="h-3.5 w-3.5 text-primary-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 11h-4v-2h2V7h2v6z"/></svg>
                Sat–Thu: 9:00 AM – 6:00 PM
            </span>
            <span class="inline-flex items-center gap-2 text-primary-300 font-semibold">
                <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/></svg>
                All Bangladesh
            </span>
        </div>
    </div>
</div>

<header x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = (window.scrollY > 8)" class="sticky top-0 z-50 border-b border-sand-200 bg-white/95 backdrop-blur transition-shadow duration-300" :class="scrolled ? 'shadow-lg shadow-forest-950/5' : ''">
    <nav class="container-x flex items-center justify-between gap-3 py-3">
        <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-2.5">
            <img src="{{ asset('images/brand/logo-mark.png') }}" alt="Landscaping BD logo" class="h-11 w-11 object-contain">
            <span class="font-display text-lg font-extrabold leading-none">
                <span class="text-forest-800">LANDSCAPING</span> <span class="text-primary-600">BD</span>
            </span>
        </a>

        <div class="hidden items-center gap-x-4 xl:flex">
            @foreach ($nav as [$label, $url])
                <a href="{{ $url }}" class="nav-link {{ $current === $url ? 'is-active' : '' }}">{{ $label }}</a>
            @endforeach
        </div>

        <div class="hidden xl:block">
            <a href="{{ route('contact') }}" class="btn-primary">
                Get a Quote
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

        <button @click="open = !open" class="inline-flex items-center justify-center rounded-lg p-2 text-forest-800 hover:bg-primary-50 xl:hidden" aria-label="Toggle menu">
            <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg x-show="open" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </nav>

    {{-- Mobile menu --}}
    <div x-show="open" x-cloak @click.outside="open = false" class="border-t border-sand-200 bg-white xl:hidden">
        <div class="container-x flex flex-col gap-1 py-3">
            @foreach ($nav as [$label, $url])
                <a href="{{ $url }}" class="rounded-lg px-3 py-2.5 text-sm font-medium text-ink-700 hover:bg-primary-50 hover:text-primary-700 {{ $current === $url ? 'bg-primary-50 text-primary-700' : '' }}">{{ $label }}</a>
            @endforeach
            <a href="{{ route('contact') }}" class="btn-primary mt-2">Get a Quote</a>
        </div>
    </div>
</header>
