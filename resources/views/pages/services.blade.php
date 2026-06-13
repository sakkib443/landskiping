@extends('layouts.app')

@section('title', 'Landscaping Services — Landscaping BD')
@section('meta_description', 'Rooftop garden design, vertical gardening, natural grass installation, garden design, tree plantation, walkway, garden lighting, landscape management & maintenance across Bangladesh.')

@php
    $services = [
        ['Rooftop Garden Design', 'We design and develop rooftop gardens with natural grass, plants, trees, seating areas, walkways, lighting and drainage planning.', 'home-modern', 'images/services/p06-img1-1200x800.png'],
        ['Vertical Gardening', 'We create modern green walls for homes, offices, balconies, restaurants, showrooms and commercial spaces.', 'squares-2x2', 'images/services/p07-img2-1127x615.png'],
        ['Natural Carpet Grass Installation', 'We supply and install Bermuda grass and natural carpet grass for lawns, rooftops, gardens, resorts and outdoor areas.', 'swatch', 'images/projects/p12-img6-800x600.png'],
        ['Garden Design & Development', 'We design gardens with flowers, trees, hedges, grass, pots, walkways, decorative plants and lighting.', 'sparkles', 'images/services/p06-img2-1127x615.png'],
        ['Tree Plantation', 'We provide tree selection, soil preparation, plantation, watering guidance and ongoing plant-care support.', 'sun', 'images/services/p07-img5-1000x667.png'],
        ['Walkway & Outdoor Decoration', 'We design garden paths, walkways, sitting areas, decorative stone areas and outdoor finishing.', 'map', 'images/projects/p15-img3-672x395.png'],
        ['Garden Lighting', 'We install outdoor lights for rooftops, gardens, walkways, trees, resorts and commercial landscapes.', 'light-bulb', 'images/services/p07-img3-768x512.png'],
        ['Landscape Management', 'Regular supervision, watering, trimming, grass cutting, plant care, cleaning and seasonal improvement.', 'clipboard-document-check', 'images/services/p06-img3-1127x615.png'],
        ['Landscape Maintenance', 'Monthly or regular garden maintenance to keep your space fresh, clean and healthy all year.', 'wrench-screwdriver', 'images/services/p07-img6-768x512.png'],
        ['Landscaping Product Supply', 'Natural grass, indoor & outdoor plants, flowers, trees, hedges, pots, soil, fertilizer, garden lights and accessories.', 'shopping-bag', 'images/services/p06-img4-740x519.png'],
    ];
@endphp

@section('content')
    <x-page-header
        eyebrow="What We Do"
        title="Our Landscaping Services"
        subtitle="Complete landscaping solutions — design, installation, supply and maintenance — for homes, offices, rooftops, factories, resorts and commercial spaces."
        bg="images/projects/p13-img2-640x480.png" />

    <section class="section">
        <div class="container-x">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">Complete Solutions</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Everything your green space needs</h2>
                <p class="mt-4 text-ink-600">From rooftop gardens to full landscape maintenance — one professional team handles it all.</p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($services as $i => [$title, $desc, $icon, $img])
                    <article class="group relative isolate overflow-hidden rounded-3xl shadow-sm ring-1 ring-forest-950/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-premium" data-reveal style="--reveal-delay: {{ ($i % 3) * 100 }}ms">
                        <img src="{{ asset($img) }}" alt="{{ $title }}" class="absolute inset-0 -z-10 h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-forest-950/92 via-forest-950/45 to-forest-950/10"></div>
                        <div class="flex min-h-72 flex-col justify-end p-6 text-white">
                            <span class="icon-badge mb-4 bg-white/15 text-white backdrop-blur transition-colors duration-300 group-hover:bg-primary-500">@svg('heroicon-o-'.$icon, 'h-6 w-6')</span>
                            <h3 class="font-display text-lg font-bold">{{ $title }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-white/80">{{ $desc }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative isolate overflow-hidden bg-forest-900">
        <img src="{{ asset('images/projects/p13-img5-807x605.png') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover opacity-20">
        <div class="container-x flex flex-col items-center justify-between gap-6 py-16 text-center lg:flex-row lg:text-left" data-reveal>
            <div>
                <h2 class="h-display text-2xl !text-white sm:text-3xl">Not sure which service you need?</h2>
                <p class="mt-3 text-white/75">Get a free consultation — we'll help you plan the perfect green space.</p>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-3">
                <a href="{{ route('contact') }}" class="btn-primary">Get a Quote</a>
                <a href="{{ route('projects') }}" class="btn-outline-light">View Projects</a>
            </div>
        </div>
    </section>
@endsection
