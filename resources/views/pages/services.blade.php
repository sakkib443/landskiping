@extends('layouts.app')

@section('title', 'Landscaping Services — Landscaping BD')
@section('meta_description', 'Rooftop garden design, vertical gardening, natural grass installation, garden design, tree plantation, walkway, garden lighting, landscape management & maintenance across Bangladesh.')

@php
    $services = \App\Models\Service::where('type', 'landscaping')->orderBy('sort_order')->get();
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
                @foreach ($services as $i => $service)
                    <article class="group relative isolate overflow-hidden rounded-3xl shadow-sm ring-1 ring-forest-950/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-premium" data-reveal style="--reveal-delay: {{ ($i % 3) * 100 }}ms">
                        <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="absolute inset-0 -z-10 h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-forest-950/92 via-forest-950/45 to-forest-950/10"></div>
                        <div class="flex min-h-72 flex-col justify-end p-6 text-white">
                            <span class="icon-badge mb-4 bg-white/15 text-white backdrop-blur transition-colors duration-300 group-hover:bg-primary-500">@svg('heroicon-o-'.$service->icon, 'h-6 w-6')</span>
                            <h3 class="font-display text-lg font-bold">{{ $service->title }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-white/80">{{ $service->description }}</p>
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
