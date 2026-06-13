@extends('layouts.app')

@section('title', 'Projects — Landscaping BD')
@section('meta_description', 'Real landscaping projects completed by Landscaping BD — rooftop gardens, vertical gardens, residential, commercial, industrial landscaping, natural grass, tree plantation and walkway projects across Bangladesh.')

@php
    $projectTypes = [
        [
            'title' => 'Rooftop Garden Projects',
            'desc'  => 'Beautiful rooftop gardens with natural grass, plants, seating and drainage planning.',
            'icon'  => 'home-modern',
            'img'   => 'images/projects/p13-img5-807x605.png',
        ],
        [
            'title' => 'Vertical Garden Projects',
            'desc'  => 'Modern green walls for homes, offices, balconies, restaurants and commercial spaces.',
            'icon'  => 'squares-2x2',
            'img'   => 'images/projects/p15-img3-672x395.png',
        ],
        [
            'title' => 'Residential Landscaping',
            'desc'  => 'Complete garden design and development for private homes and residential properties.',
            'icon'  => 'home',
            'img'   => 'images/projects/p13-img1-681x511.png',
        ],
        [
            'title' => 'Commercial Landscaping',
            'desc'  => 'Attractive green spaces for offices, resorts, restaurants and commercial buildings.',
            'icon'  => 'building-office-2',
            'img'   => 'images/projects/p15-img1-615x820.png',
        ],
        [
            'title' => 'Industrial Landscaping',
            'desc'  => 'Practical landscaping and green planning for factories and industrial sites.',
            'icon'  => 'building-office',
            'img'   => 'images/projects/p14-img1-1383x778.png',
        ],
        [
            'title' => 'Natural Grass Installation',
            'desc'  => 'Supply and installation of Bermuda and natural carpet grass for any outdoor area.',
            'icon'  => 'swatch',
            'img'   => 'images/projects/p12-img1-1210x681.png',
        ],
        [
            'title' => 'Tree Plantation Projects',
            'desc'  => 'Tree selection, soil preparation, plantation and long-term plant-care support.',
            'icon'  => 'sun',
            'img'   => 'images/projects/p13-img6-615x461.png',
        ],
        [
            'title' => 'Walkway & Garden Lighting Projects',
            'desc'  => 'Garden paths, walkways, decorative areas and outdoor lighting installation.',
            'icon'  => 'light-bulb',
            'img'   => 'images/projects/p15-img6-615x461.png',
        ],
    ];

    // Featured Work — database-driven
    $featured = \App\Models\Project::where('is_featured', true)->orderBy('sort_order')->get();
@endphp

@section('content')

    {{-- Page Header --}}
    <x-page-header
        eyebrow="Our Work"
        title="Our Projects"
        subtitle="We complete landscaping projects for homes, offices, rooftops, factories, resorts, restaurants and commercial spaces across Bangladesh."
        bg="images/projects/p13-img5-807x605.png" />

    {{-- Intro section --}}
    <section class="section">
        <div class="container-x grid items-center gap-12 lg:grid-cols-2">
            <div class="relative" data-reveal="left">
                <img src="{{ asset('images/projects/p15-img4-615x820.png') }}" alt="Landscaping BD completed project" class="aspect-[4/5] w-full rounded-3xl object-cover shadow-premium">
                <div class="absolute -bottom-6 -right-3 hidden rounded-2xl bg-primary-500 px-6 py-5 text-white shadow-premium sm:block">
                    <p class="font-display text-3xl font-bold leading-none">100%</p>
                    <p class="mt-1 text-xs font-medium text-white/90">Quality<br>Guaranteed</p>
                </div>
            </div>
            <div data-reveal="right">
                <span class="eyebrow">Real Results</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Real projects, real results</h2>
                <p class="mt-5 leading-relaxed text-ink-700">
                    At Landscaping BD, we complete different types of landscaping projects focused on natural beauty,
                    quality materials, smart planning and long-lasting results — for homes, offices, rooftops,
                    factories, resorts, restaurants and commercial spaces.
                </p>
                <p class="mt-4 leading-relaxed text-ink-700">
                    Every project is handled by our experienced team of landscape architects, agriculturists and site
                    managers — ensuring creative design and complete execution from start to finish.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ route('gallery') }}" class="btn-primary">View Gallery</a>
                    <a href="{{ route('contact') }}" class="btn-outline">Get a Quote</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Project Types --}}
    <section class="section bg-sand-50">
        <div class="container-x">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">What We Build</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Project Types</h2>
                <p class="mt-4 text-ink-600">From rooftop gardens to industrial landscaping — explore the full range of projects we deliver.</p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($projectTypes as $i => $project)
                    <article
                        class="group relative isolate overflow-hidden rounded-3xl shadow-sm ring-1 ring-forest-950/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-premium"
                        data-reveal
                        style="--reveal-delay: {{ ($i % 4) * 100 }}ms">
                        <img
                            src="{{ asset($project['img']) }}"
                            alt="{{ $project['title'] }}"
                            class="absolute inset-0 -z-10 h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-forest-950/92 via-forest-950/45 to-forest-950/10"></div>
                        <a href="{{ route('gallery') }}" class="flex min-h-72 flex-col justify-end p-6 text-white">
                            <span class="icon-badge mb-4 bg-white/15 text-white backdrop-blur transition-colors duration-300 group-hover:bg-primary-500">@svg('heroicon-o-'.$project['icon'], 'h-6 w-6')</span>
                            <h3 class="font-display text-lg font-bold">{{ $project['title'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-white/80">{{ $project['desc'] }}</p>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Featured Work gallery strip — database-driven --}}
    <section class="section">
        <div class="container-x">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">Featured Work</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">A look at our completed work</h2>
                <p class="mt-4 text-ink-600">A selection of finished gardens and landscaping spaces delivered across Bangladesh.</p>
            </div>

            <div class="mt-14 columns-2 gap-4 sm:columns-3 lg:columns-4 xl:columns-5 [column-fill:_balance]">
                @foreach ($featured as $i => $project)
                    <div
                        class="group mb-4 break-inside-avoid overflow-hidden rounded-2xl shadow-sm ring-1 ring-forest-950/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-premium"
                        data-reveal
                        style="--reveal-delay: {{ ($i % 5) * 90 }}ms">
                        <img
                            src="{{ asset($project->image) }}"
                            alt="{{ $project->title }}"
                            class="w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    </div>
                @endforeach
            </div>

            <div class="mt-10 flex justify-center" data-reveal>
                <a href="{{ route('gallery') }}" class="btn-primary">
                    @svg('heroicon-o-photo', 'h-5 w-5')
                    View Full Gallery
                </a>
            </div>
        </div>
    </section>

    {{-- Stats band --}}
    <section class="section bg-sand-50">
        <div class="container-x">
            <div class="grid grid-cols-2 gap-6 lg:grid-cols-4">
                <div class="text-center" data-reveal style="--reveal-delay: 0ms">
                    <p class="font-display text-4xl font-bold text-primary-600 sm:text-5xl">
                        <span data-count="8" data-suffix="+">0+</span>
                    </p>
                    <p class="mt-2 text-sm font-medium text-ink-600">Project Types</p>
                </div>
                <div class="text-center" data-reveal style="--reveal-delay: 90ms">
                    <p class="font-display text-4xl font-bold text-primary-600 sm:text-5xl">
                        <span data-count="10" data-suffix="+">0+</span>
                    </p>
                    <p class="mt-2 text-sm font-medium text-ink-600">Corporate Clients</p>
                </div>
                <div class="text-center" data-reveal style="--reveal-delay: 180ms">
                    <p class="font-display text-4xl font-bold text-primary-600 sm:text-5xl">
                        <span data-count="100" data-suffix="%">0%</span>
                    </p>
                    <p class="mt-2 text-sm font-medium text-ink-600">Satisfaction Focus</p>
                </div>
                <div class="text-center" data-reveal style="--reveal-delay: 270ms">
                    <p class="font-display text-4xl font-bold text-primary-600 sm:text-5xl">All BD</p>
                    <p class="mt-2 text-sm font-medium text-ink-600">Nationwide Service</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA band (copied pattern from services.blade.php) --}}
    <section class="relative isolate overflow-hidden bg-forest-900">
        <img src="{{ asset('images/projects/p13-img5-807x605.png') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover opacity-20">
        <div class="container-x flex flex-col items-center justify-between gap-6 py-16 text-center lg:flex-row lg:text-left" data-reveal>
            <div>
                <h2 class="h-display text-2xl !text-white sm:text-3xl">Start your project with us</h2>
                <p class="mt-3 text-white/75">Get a free consultation — we'll plan and build your perfect green space.</p>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-3">
                <a href="{{ route('contact') }}" class="btn-primary">Get a Quote</a>
                <a href="{{ route('gallery') }}" class="btn-outline-light">View Gallery</a>
            </div>
        </div>
    </section>

@endsection
