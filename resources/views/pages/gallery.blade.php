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

            {{-- Alpine filterable wrapper --}}
            <div x-data="{ cat: 'all', lb: false, idx: 0, items: {{ \Illuminate\Support\Js::from($projects->map(fn($p) => ['src' => asset($p->image), 'title' => $p->title])->values()) }}, open(i) { this.idx = i; this.lb = true; document.body.style.overflow = 'hidden'; this.$nextTick(() => this.$refs.lbclose && this.$refs.lbclose.focus()); }, close() { this.lb = false; document.body.style.overflow = ''; }, prev() { this.idx = (this.idx - 1 + this.items.length) % this.items.length; }, next() { this.idx = (this.idx + 1) % this.items.length; } }" @keydown.escape.window="close()" @keydown.arrow-left.window="lb && prev()" @keydown.arrow-right.window="lb && next()" class="mt-12">

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

                {{-- Gallery grid — database-driven (uses $projects defined above) --}}
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
                                @click="open({{ $i }})"
                                class="aspect-[4/3] w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 cursor-pointer">

                            {{-- Hover caption overlay (pointer-events-none so the image click reaches the lightbox) --}}
                            <div class="pointer-events-none absolute inset-0 flex items-end bg-gradient-to-t from-forest-950/80 via-forest-950/20 to-transparent p-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
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

                {{-- Lightbox modal --}}
                <div x-show="lb" x-cloak class="fixed inset-0 z-[60] flex items-center justify-center p-4 sm:p-8" x-transition.opacity @click.self="close()" role="dialog" aria-modal="true" aria-label="Gallery image viewer">
                    <div class="absolute inset-0 -z-10 bg-forest-950/90 backdrop-blur-sm"></div>
                    <button x-ref="lbclose" type="button" @click="close()" aria-label="Close" class="absolute right-4 top-4 inline-flex h-11 w-11 items-center justify-center rounded-full bg-white/10 text-white ring-1 ring-white/30 transition hover:bg-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                    </button>
                    <button type="button" @click="prev()" aria-label="Previous image" class="absolute left-3 sm:left-6 inline-flex h-11 w-11 items-center justify-center rounded-full bg-white/10 text-white ring-1 ring-white/30 transition hover:bg-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/></svg>
                    </button>
                    <button type="button" @click="next()" aria-label="Next image" class="absolute right-3 sm:right-6 inline-flex h-11 w-11 items-center justify-center rounded-full bg-white/10 text-white ring-1 ring-white/30 transition hover:bg-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                    </button>
                    <figure class="relative max-h-full max-w-5xl" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
                        <img :src="items[idx] && items[idx].src" :alt="items[idx] && items[idx].title" class="max-h-[80vh] w-auto rounded-2xl object-contain shadow-premium">
                        <figcaption class="mt-3 text-center text-sm font-medium text-white/90" x-text="items[idx] && items[idx].title"></figcaption>
                    </figure>
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
