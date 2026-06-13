@extends('layouts.app')

@section('title', 'Shop — Landscaping BD')
@section('meta_description', 'Order quality landscaping and gardening products from Landscaping BD — natural grass, indoor & outdoor plants, flower plants, trees, garden pots, vertical garden items, lights and accessories. Delivered across Bangladesh.')

@php
    $products = \App\Models\Product::orderBy('sort_order')->get();

    $waLink    = 'https://wa.me/8801777539790?text=Hi%20Landscaping%20BD,%20I%20want%20to%20order%20products';
    $waProduct = function (string $name) {
        return 'https://wa.me/8801777539790?text=Hi%20Landscaping%20BD,%20I%20want%20to%20order%20' . rawurlencode($name);
    };
@endphp

@section('content')

    {{-- ─── PAGE HEADER ─── --}}
    <x-page-header
        eyebrow="Shop"
        title="Shop Landscaping Products"
        subtitle="Order quality landscaping and gardening products from Landscaping BD — delivered across Bangladesh."
        bg="images/services/p06-img1-1200x800.png" />

    {{-- ─── INTRO ─── --}}
    <section class="section">
        <div class="container-x">
            <div class="mx-auto max-w-3xl text-center" data-reveal>
                <span class="eyebrow">Our Products</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Quality products for your green space</h2>
                <p class="mt-5 text-lg leading-relaxed text-ink-600">
                    We supply natural grass, plants, trees, pots, garden materials, vertical garden items, lighting
                    and decorative products for homes, rooftops, offices, resorts and commercial spaces.
                </p>
                <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
                    <a href="#products" class="btn-primary">
                        @svg('heroicon-o-shopping-bag', 'h-5 w-5')
                        Shop Now
                    </a>
                    <a href="{{ $waLink }}" target="_blank" rel="noopener noreferrer" class="btn-outline">
                        @svg('heroicon-o-chat-bubble-left-ellipsis', 'h-5 w-5')
                        Order on WhatsApp
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline">
                        @svg('heroicon-o-tag', 'h-5 w-5')
                        Request Price
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ─── PRODUCT GRID ─── --}}
    <section id="products" class="section bg-sand-50">
        <div class="container-x">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">Browse Categories</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Everything for your garden</h2>
                <p class="mt-4 text-ink-600">Select a category and place your order directly on WhatsApp or request a price quote.</p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($products as $i => $product)
                    <article
                        class="card group flex flex-col"
                        data-reveal
                        style="--reveal-delay: {{ ($i % 3) * 80 }}ms">

                        {{-- Icon badge --}}
                        <span class="icon-badge bg-primary-100 text-primary-700 transition-colors duration-300 group-hover:bg-primary-500 group-hover:text-white">
                            @svg('heroicon-o-'.$product->icon, 'h-6 w-6')
                        </span>

                        {{-- Content --}}
                        <h3 class="mt-5 font-display text-lg font-bold text-ink-900">{{ $product->name }}</h3>
                        <p class="mt-2 flex-1 text-sm leading-relaxed text-ink-600">{{ $product->description }}</p>

                        {{-- Links --}}
                        <div class="mt-5 flex flex-wrap items-center gap-3 border-t border-sand-200 pt-4">
                            <a
                                href="{{ $waProduct($product->name) }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 rounded-full bg-primary-500 px-4 py-2 text-xs font-semibold text-white shadow-sm transition-all hover:bg-primary-600 hover:shadow-primary-600/30">
                                @svg('heroicon-o-chat-bubble-left-ellipsis', 'h-4 w-4')
                                Order on WhatsApp
                            </a>
                            <a
                                href="{{ route('contact') }}"
                                class="inline-flex items-center gap-1.5 rounded-full border border-primary-300 px-4 py-2 text-xs font-semibold text-primary-700 transition-colors hover:border-primary-500 hover:bg-primary-50">
                                @svg('heroicon-o-tag', 'h-4 w-4')
                                Request Price
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ─── HOW TO ORDER ─── --}}
    <section class="section">
        <div class="container-x">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">How It Works</span>
                <h2 class="h-display mt-3 text-3xl sm:text-4xl">Ordering is simple</h2>
                <p class="mt-4 text-ink-600">No complicated checkout — just message us on WhatsApp or fill the contact form and we'll handle the rest.</p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-3">
                @foreach ([
                    ['Choose a product', 'Browse the categories above and pick what you need for your garden or project.', 'cursor-arrow-rays', '01'],
                    ['Contact us on WhatsApp', 'Message us directly with the product name and quantity — we reply fast.', 'chat-bubble-left-ellipsis', '02'],
                    ['Receive your order', 'We confirm the price, arrange delivery and bring your products across Bangladesh.', 'truck', '03'],
                ] as $i => [$stepTitle, $stepDesc, $stepIcon, $stepNum])
                    <div class="card group text-center" data-reveal style="--reveal-delay: {{ $i * 120 }}ms">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-primary-500 text-white shadow-lg shadow-primary-600/25 transition-transform duration-300 group-hover:scale-110">
                            @svg('heroicon-o-' . $stepIcon, 'h-7 w-7')
                        </div>
                        <p class="mt-4 font-script text-3xl font-bold text-primary-200">{{ $stepNum }}</p>
                        <h3 class="mt-1 font-display text-lg font-bold text-ink-900">{{ $stepTitle }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-ink-600">{{ $stepDesc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ─── WHATSAPP CTA ─── --}}
    <section class="section bg-sand-50">
        <div class="container-x">
            <div class="overflow-hidden rounded-3xl bg-primary-600 shadow-premium" data-reveal>
                <div class="relative isolate px-6 py-14 text-center sm:px-12 lg:py-20">
                    {{-- decorative blobs --}}
                    <div class="pointer-events-none absolute -left-16 -top-16 -z-10 h-64 w-64 rounded-full bg-primary-500/40 blur-3xl"></div>
                    <div class="pointer-events-none absolute -bottom-16 -right-16 -z-10 h-64 w-64 rounded-full bg-forest-900/30 blur-3xl"></div>

                    <span class="eyebrow-light">Order Today</span>
                    <h2 class="h-display mt-3 text-3xl !text-white sm:text-4xl">Place your order on WhatsApp</h2>
                    <p class="mx-auto mt-5 max-w-2xl text-lg text-white/80">
                        Message us on WhatsApp to order any landscaping or gardening product.
                        Tell us what you need, we confirm the price and arrange delivery — anywhere in Bangladesh.
                    </p>
                    <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                        <a
                            href="{{ $waLink }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn-light">
                            @svg('heroicon-o-chat-bubble-left-ellipsis', 'h-5 w-5')
                            Order on WhatsApp
                        </a>
                        <a href="{{ route('contact') }}" class="btn-outline-light">
                            @svg('heroicon-o-tag', 'h-5 w-5')
                            Request Price
                        </a>
                    </div>
                    <p class="mt-5 text-sm text-white/60">
                        Sat–Thu, 9 AM – 6 PM · Nationwide delivery · Bulk orders welcome
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ─── END CTA BAND ─── --}}
    <section class="relative isolate overflow-hidden bg-forest-900">
        <img src="{{ asset('images/services/p06-img1-1200x800.png') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover opacity-20">
        <div class="container-x flex flex-col items-center justify-between gap-6 py-16 text-center lg:flex-row lg:text-left" data-reveal>
            <div>
                <h2 class="h-display text-2xl !text-white sm:text-3xl">Need help choosing the right products?</h2>
                <p class="mt-3 text-white/75">Our team is happy to advise you — get in touch for a free consultation.</p>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-3">
                <a href="{{ route('contact') }}" class="btn-primary">Get a Quote</a>
                <a href="{{ route('landscaping-services') }}" class="btn-outline-light">Our Services</a>
            </div>
        </div>
    </section>

@endsection
