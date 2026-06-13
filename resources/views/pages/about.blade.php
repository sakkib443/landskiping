@extends('layouts.app')

@section('title', 'About Us — Landscaping BD')
@section('meta_description', 'Landscaping BD is a professional landscaping company in Bangladesh — rooftop gardens, vertical gardening, natural grass, garden design, maintenance and industrial support services.')

@php
    $whyUs = [
        ['Experienced Team', 'Landscape architect, agriculturist and site managers on every project.', 'users'],
        ['Quality Materials', 'Fresh grass, healthy plants and durable landscaping materials.', 'swatch'],
        ['Creative Design', 'Modern, natural and attractive designs for any space.', 'sparkles'],
        ['Complete Solution', 'Design, installation, supply and maintenance — all in one place.', 'squares-2x2'],
        ['Affordable Planning', 'Practical solutions based on project size and your budget.', 'banknotes'],
        ['All Bangladesh', 'Landscaping services and gardening products nationwide.', 'map-pin'],
    ];
    $stats = [
        ['count' => 10, 'suffix' => '+', 'label' => 'Landscaping Services'],
        ['count' => 10, 'suffix' => '+', 'label' => 'Corporate Clients'],
        ['count' => 100, 'suffix' => '%', 'label' => 'Satisfaction Focus'],
        ['text' => 'All BD', 'label' => 'Nationwide Service'],
    ];
@endphp

@section('content')
    <x-page-header
        eyebrow="About Us"
        title="About Landscaping BD"
        subtitle="A professional landscaping company creating beautiful, eco-friendly and long-lasting green spaces across Bangladesh."
        bg="images/projects/p15-img5-615x820.png" />

    {{-- Intro --}}
    <section class="section">
        <div class="container-x grid items-center gap-12 lg:grid-cols-2">
            <div class="relative" data-reveal="left">
                <img src="{{ asset('images/projects/p15-img1-615x820.png') }}" alt="Landscaping BD project" class="aspect-[4/5] w-full rounded-3xl object-cover shadow-premium">
                <div class="absolute -bottom-6 -right-3 hidden rounded-2xl bg-primary-500 px-6 py-5 text-white shadow-premium sm:block">
                    <p class="font-display text-2xl font-bold leading-tight">Trusted</p>
                    <p class="mt-1 text-xs font-medium text-white/90">green partner<br>across Bangladesh</p>
                </div>
            </div>
            <div data-reveal="right">
                <span class="eyebrow">Who We Are</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Creating green, sustainable &amp; beautiful spaces</h2>
                <p class="mt-5 leading-relaxed text-ink-700">
                    Landscaping BD is a professional landscaping company in Bangladesh. Our main focus is landscaping
                    design, rooftop garden, vertical gardening, natural grass installation, garden development, tree
                    plantation and landscape maintenance.
                </p>
                <p class="mt-4 leading-relaxed text-ink-700">
                    Along with landscaping, we also provide selected industrial and construction support services
                    including container supply, sheet pile, MS pipe, H-beam supply, welding, fabrication, installation
                    service, jetty construction and geo tube supply &amp; installation.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ route('landscaping-services') }}" class="btn-primary">Our Services</a>
                    <a href="{{ route('contact') }}" class="btn-outline">Get a Quote</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Mission & Vision --}}
    <section class="section bg-sand-50">
        <div class="container-x grid gap-6 md:grid-cols-2">
            <div class="card" data-reveal="left">
                <span class="icon-badge bg-primary-100 text-primary-700">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.63 2.62m5.96 11.75a14.92 14.92 0 01-5.84 2.58m0 0a6 6 0 01-7.38-5.84h4.8m2.58-5.84a14.92 14.92 0 00-2.58 5.84m2.58-5.84a6.003 6.003 0 00-3.42 5.84"/></svg>
                </span>
                <h3 class="mt-5 font-display text-xl font-bold text-ink-900">Our Mission</h3>
                <p class="mt-3 leading-relaxed text-ink-600">To create beautiful, eco-friendly and practical green spaces for residential, commercial, industrial and rooftop areas — with quality work and complete customer satisfaction.</p>
            </div>
            <div class="card" data-reveal="right">
                <span class="icon-badge bg-primary-100 text-primary-700">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.04 12.32a1 1 0 010-.64C3.42 7.51 7.36 4.5 12 4.5c4.64 0 8.57 3.01 9.96 7.18.07.2.07.44 0 .64C20.58 16.49 16.64 19.5 12 19.5c-4.64 0-8.57-3.01-9.96-7.18z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </span>
                <h3 class="mt-5 font-display text-xl font-bold text-ink-900">Our Vision</h3>
                <p class="mt-3 leading-relaxed text-ink-600">To become a trusted landscaping and green development company in Bangladesh through quality service, creative design, modern techniques and long-term customer relationships.</p>
            </div>
        </div>
    </section>

    {{-- Why choose us --}}
    <section class="section">
        <div class="container-x">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">Why Choose Us</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Why clients trust Landscaping BD</h2>
            </div>
            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($whyUs as $i => [$title, $desc, $icon])
                    <div class="card group" data-reveal style="--reveal-delay: {{ ($i % 3) * 110 }}ms">
                        <span class="icon-badge bg-primary-100 text-primary-700 transition-colors group-hover:bg-primary-500 group-hover:text-white">@svg('heroicon-o-'.$icon, 'h-6 w-6')</span>
                        <h3 class="mt-5 font-display text-lg font-bold text-ink-900">{{ $title }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-ink-600">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-16 grid grid-cols-2 gap-6 border-t border-sand-200 pt-12 lg:grid-cols-4">
                @foreach ($stats as $i => $stat)
                    <div class="text-center" data-reveal style="--reveal-delay: {{ $i * 90 }}ms">
                        <p class="font-display text-4xl font-bold text-primary-600 sm:text-5xl">
                            @if (isset($stat['count']))<span data-count="{{ $stat['count'] }}" data-suffix="{{ $stat['suffix'] }}">0{{ $stat['suffix'] }}</span>@else{{ $stat['text'] }}@endif
                        </p>
                        <p class="mt-2 text-sm font-medium text-ink-600">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative isolate overflow-hidden bg-forest-900">
        <img src="{{ asset('images/projects/p14-img2-1383x778.png') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover opacity-20">
        <div class="container-x flex flex-col items-center justify-between gap-6 py-16 text-center lg:flex-row lg:text-left" data-reveal>
            <div>
                <h2 class="h-display text-2xl !text-white sm:text-3xl">Let's build your green space together</h2>
                <p class="mt-3 text-white/75">Contact us today for a free consultation and project quote.</p>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-3">
                <a href="{{ route('contact') }}" class="btn-primary">Get a Quote</a>
                <a href="tel:+8801777539790" class="btn-outline-light">+880 1777-539790</a>
            </div>
        </div>
    </section>
@endsection
