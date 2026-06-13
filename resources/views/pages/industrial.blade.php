@extends('layouts.app')

@section('title', 'Industrial Services — Landscaping BD')
@section('meta_description', 'Sheet pile, MS pipe, H-beam supply & installation, welding, fabrication, container supply, jetty construction and geo tube supply & installation across Bangladesh.')

@php
    $containers = [
        ['Office Container Supply', 'Office containers for construction sites, project offices, factories, security rooms and temporary office use.', 'building-office-2'],
        ['Living Container Supply', 'Living containers for worker accommodation, site camps, remote project areas and temporary housing.', 'home-modern'],
        ['Store Container Supply', 'Strong store containers for materials, tools, machinery parts and construction goods.', 'archive-box'],
    ];
    $steel = [
        ['Sheet Pile Supply & Installation', 'Riverbank protection, retaining walls, excavation support, jetty construction and marine works.', 'view-columns'],
        ['MS Pipe Supply & Installation', 'Construction, piling support, structural work, fencing, fabrication and industrial use.', 'square-3-stack-3d'],
        ['H-Beam Supply & Installation', 'Structural support, industrial sheds, heavy construction, bridge and steel-structure projects.', 'squares-plus'],
        ['Welding & Fabrication', 'MS pipe, H-beam, steel structure, sheet pile support, frame work and project-based works.', 'fire'],
        ['Site Installation Service', 'Cutting, welding, fitting, fixing, alignment and full site supervision.', 'wrench-screwdriver'],
    ];
    $suitableFor = ['Jetty construction', 'Riverbank protection', 'Industrial projects', 'Factory construction', 'Steel structure work', 'Marine construction', 'Bridge & heavy construction', 'Retaining wall work', 'Excavation support', 'Development projects'];
    $geoIncludes = ['Geo tube supply', 'Site inspection support', 'Geo tube placement', 'Filling & installation', 'Riverbank protection', 'Erosion control', 'Slope protection', 'Project-based service'];
    $geoSuitable = ['Riverbank protection', 'Coastal area protection', 'Land reclamation', 'Water management', 'Marine & civil projects', 'Soil erosion control'];
@endphp

@section('content')
    <x-page-header
        eyebrow="Beyond Landscaping"
        title="Industrial & Construction Support"
        subtitle="Sheet pile, MS pipe, H-beam, welding, container supply, jetty construction and geo tube — for project sites, factories, marine areas and development projects."
        bg="images/projects/p14-img1-1383x778.png" />

    {{-- Intro --}}
    <section class="section">
        <div class="container-x mx-auto max-w-3xl text-center" data-reveal>
            <span class="eyebrow">Industrial Services</span>
            <h2 class="h-display mt-3 text-3xl sm:text-4xl">Reliable support for large-scale projects</h2>
            <p class="mt-5 leading-relaxed text-ink-600">Along with landscaping, Landscaping BD provides industrial and construction support services for project sites, factories, marine areas, riverbank protection and development projects across Bangladesh.</p>
        </div>
    </section>

    {{-- Containers --}}
    <section class="section bg-sand-50 pt-0 sm:pt-0 lg:pt-0">
        <div class="container-x pt-16 sm:pt-20">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">Container Supply</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Office, living &amp; store containers</h2>
            </div>
            <div class="mt-12 grid gap-6 md:grid-cols-3">
                @foreach ($containers as $i => [$title, $desc, $icon])
                    <div class="card group" data-reveal style="--reveal-delay: {{ $i * 110 }}ms">
                        <span class="icon-badge bg-primary-100 text-primary-700 transition-colors group-hover:bg-primary-500 group-hover:text-white">@svg('heroicon-o-'.$icon, 'h-6 w-6')</span>
                        <h3 class="mt-5 font-display text-lg font-bold text-ink-900">{{ $title }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-ink-600">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Sheet pile / steel --}}
    <section class="section">
        <div class="container-x">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">Sheet Pile · MS Pipe · H-Beam</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Supply, welding &amp; installation</h2>
                <p class="mt-4 text-ink-600">Professional steel-structure and marine support services for industrial, construction and jetty projects.</p>
            </div>
            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($steel as $i => [$title, $desc, $icon])
                    <div class="card group" data-reveal style="--reveal-delay: {{ ($i % 3) * 100 }}ms">
                        <span class="icon-badge bg-sky-500/10 text-sky-600">@svg('heroicon-o-'.$icon, 'h-6 w-6')</span>
                        <h3 class="mt-5 font-display text-base font-bold text-ink-900">{{ $title }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-ink-600">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 rounded-3xl bg-sand-50 p-8 ring-1 ring-sand-200" data-reveal>
                <p class="text-center text-sm font-bold uppercase tracking-wider text-ink-500">Suitable For</p>
                <div class="mt-4 flex flex-wrap justify-center gap-2.5">
                    @foreach ($suitableFor as $tag)
                        <span class="rounded-full bg-white px-4 py-2 text-sm font-medium text-ink-700 ring-1 ring-sand-200">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Jetty Construction --}}
    <section class="section bg-forest-950 text-white">
        <div class="container-x grid items-center gap-12 lg:grid-cols-2">
            <div data-reveal="left">
                <span class="eyebrow-light">Marine Works</span>
                <h2 class="h-display mt-3 text-3xl !text-white sm:text-4xl">Jetty Construction by Sheet Pile</h2>
                <p class="mt-5 leading-relaxed text-white/75">We provide jetty construction support using sheet piles for river, port, marine and industrial project areas. Our service includes material supply, welding, installation and full site execution support.</p>
                <a href="{{ route('contact') }}" class="btn-primary mt-7">Contact for Project</a>
            </div>
            <div data-reveal="right">
                <img src="{{ asset('images/projects/p14-img5-1383x778.png') }}" alt="Jetty construction" class="aspect-video w-full rounded-3xl object-cover shadow-premium">
            </div>
        </div>
    </section>

    {{-- Geo Tube --}}
    <section class="section">
        <div class="container-x grid items-center gap-12 lg:grid-cols-2">
            <div class="order-2 lg:order-1" data-reveal="left">
                <img src="{{ asset('images/projects/p14-img6-1383x778.png') }}" alt="Geo tube installation" class="aspect-video w-full rounded-3xl object-cover shadow-premium">
            </div>
            <div class="order-1 lg:order-2" data-reveal="right">
                <span class="eyebrow">Erosion Control</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Geo Tube Supply &amp; Installation</h2>
                <p class="mt-5 leading-relaxed text-ink-600">Reliable geo tube supply and installation for riverbank protection, erosion control, slope protection, land reclamation and water-management projects.</p>
                <ul class="mt-6 grid gap-x-6 gap-y-2.5 sm:grid-cols-2">
                    @foreach ($geoIncludes as $item)
                        <li class="flex items-start gap-2 text-sm font-medium text-ink-800">
                            <svg class="mt-0.5 h-5 w-5 shrink-0 text-primary-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.7 5.2a1 1 0 010 1.4l-7.5 7.5a1 1 0 01-1.4 0L3.3 9.6a1 1 0 011.4-1.4l3.1 3.1 6.8-6.8a1 1 0 011.4 0z" clip-rule="evenodd"/></svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
                <div class="mt-6">
                    <p class="text-xs font-bold uppercase tracking-wider text-ink-500">Suitable For</p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        @foreach ($geoSuitable as $tag)
                            <span class="rounded-full bg-sand-100 px-3 py-1.5 text-xs font-medium text-ink-700">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="btn-primary">Request Price</a>
                    <a href="tel:+8801777539790" class="btn-outline">Call Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection
