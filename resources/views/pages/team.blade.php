{{-- NOTE: team photo→name mapping is a best guess from extracted PDF images and MUST be verified with the client. --}}
@extends('layouts.app')

@section('title', 'Our Team — Landscaping BD')
@section('meta_description', 'Meet the skilled professionals behind Landscaping BD — landscape architects, agriculturists, site managers and gardeners delivering quality green spaces across Bangladesh.')

@php
    $leads     = \App\Models\TeamMember::where('tier', 'lead')->orderBy('sort_order')->get();
    $fieldTeam = \App\Models\TeamMember::where('tier', 'field')->orderBy('sort_order')->get();
@endphp

@section('content')

    {{-- Page header --}}
    <x-page-header
        eyebrow="Our Team"
        title="Meet Our Professional Team"
        subtitle="Skilled professionals in landscaping, garden design, agriculture and site management — working together to deliver quality across Bangladesh."
        bg="images/projects/p13-img2-640x480.png" />

    {{-- Leadership row --}}
    <section class="section" data-reveal>
        <div class="container-x">

            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">Leadership</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">The people who lead every project</h2>
                <p class="mt-4 text-ink-600">Our core leadership team brings together design expertise, agricultural knowledge and experienced project management.</p>
            </div>

            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($leads as $i => $member)
                    <article class="card flex flex-col items-center text-center" data-reveal style="--reveal-delay: {{ $i * 90 }}ms">
                        {{-- Photo --}}
                        <div class="mb-5 h-40 w-40 shrink-0 overflow-hidden rounded-2xl ring-4 ring-primary-100 shadow-sm">
                            <img
                                src="{{ asset($member->photo) }}"
                                alt="{{ $member->name }}"
                                class="h-full w-full object-cover object-top">
                        </div>
                        {{-- Name & role --}}
                        <h3 class="font-display text-lg font-bold text-ink-900 leading-tight">{{ $member->name }}</h3>
                        <span class="mt-1.5 inline-block rounded-full bg-primary-100 px-3 py-0.5 text-xs font-semibold text-primary-700">{{ $member->role }}</span>
                        {{-- Description --}}
                        <p class="mt-3 text-sm leading-relaxed text-ink-600">{{ $member->bio }}</p>
                    </article>
                @endforeach
            </div>

        </div>
    </section>

    {{-- Divider accent --}}
    <div class="container-x">
        <hr class="border-sand-200">
    </div>

    {{-- Field team row --}}
    <section class="section">
        <div class="container-x">

            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">Field Team</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Hands on the ground, every day</h2>
                <p class="mt-4 text-ink-600">Our dedicated site and garden team ensures every project is planted, maintained and finished to the highest standard.</p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($fieldTeam as $i => $member)
                    <article class="card flex flex-col items-center text-center" data-reveal style="--reveal-delay: {{ $i * 90 }}ms">
                        {{-- Photo --}}
                        <div class="mb-4 h-28 w-28 shrink-0 overflow-hidden rounded-xl ring-4 ring-primary-100 shadow-sm">
                            <img
                                src="{{ asset($member->photo) }}"
                                alt="{{ $member->name }}"
                                class="h-full w-full object-cover object-top">
                        </div>
                        {{-- Name & role --}}
                        <h3 class="font-display text-base font-bold text-ink-900 leading-tight">{{ $member->name }}</h3>
                        <span class="mt-1.5 inline-block rounded-full bg-forest-100 px-3 py-0.5 text-xs font-semibold text-forest-700">{{ $member->role }}</span>
                        {{-- Description --}}
                        <p class="mt-3 text-sm leading-relaxed text-ink-600">{{ $member->bio }}</p>
                    </article>
                @endforeach
            </div>

        </div>
    </section>

    {{-- CTA band --}}
    <section class="relative isolate overflow-hidden bg-forest-900">
        <img src="{{ asset('images/projects/p13-img5-807x605.png') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover opacity-20">
        <div class="container-x flex flex-col items-center justify-between gap-6 py-16 text-center lg:flex-row lg:text-left" data-reveal>
            <div>
                <h2 class="h-display text-2xl !text-white sm:text-3xl">Want to work with our team?</h2>
                <p class="mt-3 text-white/75">Tell us about your project and we'll put the right people on it.</p>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-3">
                <a href="{{ route('contact') }}" class="btn-primary">Get a Quote</a>
            </div>
        </div>
    </section>

@endsection
