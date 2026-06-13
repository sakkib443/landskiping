@props(['eyebrow' => 'Landscaping BD', 'title', 'subtitle' => null, 'bg' => 'images/projects/p13-img1-681x511.png'])

<section class="relative isolate overflow-hidden">
    <img src="{{ asset($bg) }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
    <div class="absolute inset-0 -z-10 bg-gradient-to-br from-forest-950/92 via-forest-900/85 to-forest-800/75"></div>
    <div class="pointer-events-none absolute -right-24 -top-20 -z-10 h-72 w-72 rounded-full bg-primary-500/20 blur-3xl"></div>

    <div class="container-x py-20 text-center lg:py-28" data-reveal>
        <span class="eyebrow-light">{{ $eyebrow }}</span>
        <h1 class="h-display mt-3 text-4xl !text-white sm:text-5xl lg:text-6xl">{{ $title }}</h1>
        @if ($subtitle)
            <p class="mx-auto mt-5 max-w-2xl text-lg text-white/75">{{ $subtitle }}</p>
        @endif
        <nav class="mt-7 flex items-center justify-center gap-2 text-sm font-medium text-white/70">
            <a href="{{ route('home') }}" class="transition-colors hover:text-primary-300">Home</a>
            <svg class="h-4 w-4 text-white/40" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
            <span class="text-primary-300">{{ $title }}</span>
        </nav>
    </div>
</section>
