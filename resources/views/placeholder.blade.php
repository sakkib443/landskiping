@extends('layouts.app')

@section('title', $title.' — Landscaping BD')

@section('content')
    <section class="bg-gradient-to-br from-forest-800 to-forest-950 py-16 text-white">
        <div class="container-x text-center">
            <span class="eyebrow bg-white/15 !text-white">Landscaping BD</span>
            <h1 class="h-display mt-4 text-3xl !text-white sm:text-4xl lg:text-5xl">{{ $title }}</h1>
        </div>
    </section>

    <section class="section">
        <div class="container-x text-center">
            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-primary-100 text-primary-700">
                <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085"/></svg>
            </div>
            <h2 class="h-display mt-6 text-2xl">This page is being prepared</h2>
            <p class="mx-auto mt-3 max-w-md text-ink-700">We're building out the <strong>{{ $title }}</strong> page with full content, photos and details. Check back shortly.</p>
            <a href="{{ route('home') }}" class="btn-outline mt-8">← Back to Home</a>
        </div>
    </section>
@endsection
