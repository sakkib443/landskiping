@extends('layouts.app')

@section('title', 'Gallery — Landscaping BD')
@section('meta_description', 'Browse our completed landscaping projects — rooftop gardens, vertical gardens, natural grass, garden design, commercial and industrial landscaping across Bangladesh.')

@section('content')
    <x-page-header
        eyebrow="Our Gallery"
        title="Our Gallery"
        subtitle="Explore our completed landscaping works — rooftop gardens, vertical gardens, natural grass, garden design, tree plantation, walkways, lighting and commercial projects."
        bg="images/projects/p15-img1-615x820.png" />

    {{-- Filterable Gallery --}}
    <section class="section">
        <div class="container-x">

            {{-- Section intro --}}
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">Browse by Category</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Work we're proud of</h2>
                <p class="mt-4 text-ink-600">Every project is designed and delivered with precision, creativity and care — click a category to explore our portfolio.</p>
            </div>

            {{-- Alpine filterable wrapper --}}
            <div x-data="{ cat: 'all' }" class="mt-12">

                {{-- Filter button row --}}
                <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3" data-reveal>
                    @php
                        $filters = [
                            'all'               => 'All',
                            'rooftop'           => 'Rooftop Garden',
                            'vertical'          => 'Vertical Gardening',
                            'grass'             => 'Natural Grass',
                            'garden-design'     => 'Garden Design',
                            'commercial'        => 'Commercial',
                            'industrial'        => 'Industrial',
                        ];
                    @endphp

                    @foreach ($filters as $key => $label)
                        <button
                            type="button"
                            @click="cat = '{{ $key }}'"
                            :class="cat === '{{ $key }}'
                                ? 'bg-primary-500 text-white shadow-lg shadow-primary-600/20'
                                : 'bg-white ring-1 ring-sand-200 text-ink-700 hover:ring-primary-300 hover:text-primary-700'"
                            class="rounded-full px-5 py-2.5 text-sm font-semibold transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400 focus-visible:ring-offset-2">
                            {{ $label }}
                        </button>
                    @endforeach
                </div>

                {{-- Gallery grid — database-driven --}}
                @php
                    $projects = \App\Models\Project::orderBy('sort_order')->get();

                    $catLabels = [
                        'rooftop'       => 'Rooftop Garden',
                        'vertical'      => 'Vertical Gardening',
                        'grass'         => 'Natural Grass',
                        'garden-design' => 'Garden Design',
                        'commercial'    => 'Commercial',
                        'industrial'    => 'Industrial',
                    ];
                @endphp

                <div class="mt-10 grid grid-cols-2 gap-3 sm:gap-4 md:grid-cols-3 lg:grid-cols-4">
                    @foreach ($projects as $i => $project)
                        <div
                            x-show="cat === 'all' || cat === '{{ $project->category }}'"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            data-reveal
                            style="--reveal-delay: {{ ($i % 4) * 60 }}ms"
                            class="group relative isolate overflow-hidden rounded-2xl bg-sand-100 shadow-sm ring-1 ring-forest-950/5">

                            {{-- Photo --}}
                            <img
                                src="{{ asset($project->image) }}"
                                alt="{{ $project->title }}"
                                loading="lazy"
                                class="aspect-[4/3] w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">

                            {{-- Hover caption overlay --}}
                            <div class="absolute inset-0 flex items-end bg-gradient-to-t from-forest-950/80 via-forest-950/20 to-transparent p-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <div>
                                    <p class="text-sm font-semibold leading-snug text-white">{{ $project->title }}</p>
                                    <span class="mt-1 inline-flex items-center rounded-full bg-primary-500/90 px-2.5 py-0.5 text-xs font-medium text-white">
                                        {{ $catLabels[$project->category] ?? $project->category }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Empty-state when a filter yields no results (defensive, shouldn't trigger) --}}
                <div
                    x-show="false"
                    class="mt-16 flex flex-col items-center justify-center gap-4 py-10 text-center text-ink-500">
                    @svg('heroicon-o-photo', 'h-12 w-12 opacity-30')
                    <p class="text-base font-medium">No photos in this category yet.</p>
                </div>

            </div>{{-- /x-data --}}
        </div>
    </section>

    {{-- Stats band --}}
    <section class="bg-sand-50 py-12 sm:py-14">
        <div class="container-x">
            <div class="grid grid-cols-2 gap-6 lg:grid-cols-4">
                @php
                    $galleryStats = [
                        ['24', '+', 'Portfolio Photos'],
                        ['6',  '',  'Project Categories'],
                        ['10', '+', 'Corporate Clients'],
                        ['100', '%', 'Satisfaction Focus'],
                    ];
                @endphp
                @foreach ($galleryStats as $i => [$num, $suffix, $label])
                    <div class="text-center" data-reveal style="--reveal-delay: {{ $i * 90 }}ms">
                        <p class="font-display text-4xl font-bold text-primary-600 sm:text-5xl">{{ $num }}{{ $suffix }}</p>
                        <p class="mt-2 text-sm font-medium text-ink-600">{{ $label }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Spotlight: featured project --}}
    <section class="section">
        <div class="container-x">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">Featured Project</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">From bare rooftop to lush garden</h2>
                <p class="mt-4 text-ink-600">One of our standout rooftop garden transformations — grass lawn, plants, seating and lighting designed and installed by our team.</p>
            </div>

            <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3" data-reveal>
                {{-- Large featured image --}}
                <div class="group relative isolate overflow-hidden rounded-3xl sm:col-span-2 lg:col-span-2">
                    <img src="{{ asset('images/projects/p15-img1-615x820.png') }}" alt="Rooftop garden full view"
                        class="aspect-[16/10] w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-forest-950/60 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <span class="inline-flex items-center rounded-full bg-primary-500 px-3 py-1 text-xs font-semibold text-white">Rooftop Garden</span>
                        <p class="mt-2 font-display text-lg font-bold text-white">Rooftop Lawn & Garden — Dhaka</p>
                    </div>
                </div>

                {{-- Side stacked images --}}
                <div class="flex flex-col gap-4">
                    <div class="group relative isolate overflow-hidden rounded-3xl">
                        <img src="{{ asset('images/projects/p15-img2-540x407.png') }}" alt="Rooftop seating and lawn"
                            class="aspect-[4/3] w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-forest-950/50 to-transparent"></div>
                        <p class="absolute bottom-3 left-4 text-sm font-semibold text-white">Seating & Lawn Area</p>
                    </div>
                    <div class="group relative isolate overflow-hidden rounded-3xl">
                        <img src="{{ asset('images/projects/p15-img4-615x820.png') }}" alt="Rooftop plants and walkway"
                            class="aspect-[4/3] w-full object-cover object-top transition-transform duration-700 ease-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-forest-950/50 to-transparent"></div>
                        <p class="absolute bottom-3 left-4 text-sm font-semibold text-white">Plants & Walkway</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA band — copied and adapted from services.blade.php --}}
    <section class="relative isolate overflow-hidden bg-forest-900">
        <img src="{{ asset('images/projects/p13-img5-807x605.png') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover opacity-20">
        <div class="container-x flex flex-col items-center justify-between gap-6 py-16 text-center lg:flex-row lg:text-left" data-reveal>
            <div>
                <h2 class="h-display text-2xl !text-white sm:text-3xl">Like what you see?</h2>
                <p class="mt-3 text-white/75">Let's create a beautiful green space for your home, office or rooftop — get a free quote today.</p>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-3">
                <a href="{{ route('contact') }}" class="btn-primary">Get a Quote</a>
                <a href="{{ route('projects') }}" class="btn-outline-light">View Projects</a>
            </div>
        </div>
    </section>

@endsection
