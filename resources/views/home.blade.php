@extends('layouts.app')

@section('title', 'Landscaping BD — Professional Landscaping Services in Bangladesh')

@php
    // --- Real photos extracted from the company profile ---
    $heroBg  = 'images/projects/p15-img3-672x395.png';
    $aboutImg = 'images/projects/p15-img1-615x820.png';
    $bandImg = 'images/projects/p12-img1-1210x681.png';
    $ctaImg  = 'images/projects/p14-img2-1383x778.png';

    $featureBar = [
        ['Rooftop Garden', 'home-modern'],
        ['Vertical Gardening', 'squares-2x2'],
        ['Natural Grass', 'swatch'],
        ['Maintenance', 'wrench-screwdriver'],
    ];

    $services = [
        ['Rooftop Garden Design', 'Rooftop gardens with natural grass, plants, trees, seating areas, walkways, lighting and drainage planning.', 'home-modern', 'images/projects/p13-img1-681x511.png'],
        ['Vertical Gardening', 'Modern green walls for homes, offices, balconies, restaurants, showrooms and commercial spaces.', 'squares-2x2', 'images/projects/p15-img2-540x407.png'],
        ['Natural Carpet Grass', 'Supply &amp; installation of Bermuda and natural carpet grass for lawns, rooftops, gardens and resorts.', 'swatch', 'images/projects/p12-img6-800x600.png'],
        ['Garden Design &amp; Development', 'Gardens with flowers, trees, hedges, grass, pots, walkways, decorative plants and lighting.', 'sparkles', 'images/projects/p15-img3-672x395.png'],
        ['Tree Plantation', 'Tree selection, soil preparation, plantation, watering guidance and ongoing plant-care support.', 'sun', 'images/projects/p13-img6-615x461.png'],
        ['Landscape Maintenance', 'Regular grass cutting, trimming, watering, fertilizing, cleaning and seasonal garden care.', 'wrench-screwdriver', 'images/projects/p13-img3-576x433.png'],
    ];

    $stats = [
        ['count' => 10, 'suffix' => '+', 'label' => 'Landscaping Services'],
        ['count' => 10, 'suffix' => '+', 'label' => 'Corporate Clients'],
        ['count' => 100, 'suffix' => '%', 'label' => 'Satisfaction Focus'],
        ['text' => 'All BD', 'label' => 'Nationwide Service'],
    ];

    $clients = ['Jan De Nul', 'PowerChina', 'Sinohydro', 'Energy China', 'Bashundhara Group', 'Hyundai E&amp;C', 'Sheba Holdings', 'Chuti Group', 'Goldsands', 'Buildex'];

    $steps = [
        ['Site Visit &amp; Discussion', 'We check your space and discuss requirement, budget, design idea and project goal.'],
        ['Planning &amp; Design', 'A suitable plan based on space size, sunlight, soil, drainage and your preference.'],
        ['Material &amp; Plant Selection', 'We select the right grass, plants, trees, flowers, pots, lights and materials.'],
        ['Installation &amp; Development', 'Grass installation, plantation, walkway, lighting and finishing work by our team.'],
        ['Final Checking', 'We check quality, finishing, cleaning and plant placement before handover.'],
        ['Maintenance Support', 'Guidance on watering, trimming, fertilizer, plant care and regular maintenance.'],
    ];

    $testimonials = [
        ['Professional Service', 'Landscaping BD completed our garden work beautifully. Their team was professional, helpful and careful about every detail.'],
        ['Good Quality Grass &amp; Plants', 'The grass and plants were fresh and good quality. The final look was neat and natural.'],
        ['Excellent Rooftop Garden', 'They converted our empty rooftop into a beautiful green space. The design, lighting and plant selection were very nice.'],
        ['Helpful After-Service Support', 'After completing the project, they guided us about watering, trimming and plant care.'],
    ];
@endphp

@section('content')

    {{-- ======================= HERO ======================= --}}
    <section class="relative isolate overflow-hidden">
        <img src="{{ asset($heroBg) }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
        <div class="absolute inset-0 -z-10 bg-gradient-to-br from-forest-950/92 via-forest-900/82 to-forest-800/72"></div>
        <div class="pointer-events-none absolute -right-32 -top-24 -z-10 h-96 w-96 rounded-full bg-primary-500/25 blur-3xl"></div>
        <div class="pointer-events-none absolute -left-24 bottom-0 -z-10 h-80 w-80 rounded-full bg-sky-500/15 blur-3xl"></div>

        <div class="container-x pb-44 pt-24 text-center sm:pt-32 lg:pb-52">
            <div class="mx-auto max-w-3xl" data-reveal>
                <span class="eyebrow-light">Design • Development • Maintenance</span>
                <h1 class="h-display mt-6 text-3xl !text-white sm:text-4xl lg:text-[3.25rem] lg:leading-[1.1]">
                    Professional Landscaping Services in Bangladesh
                </h1>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-white/80">
                    Landscaping BD provides professional landscaping, rooftop garden design, vertical gardening,
                    natural grass installation, garden development, tree plantation, landscape maintenance and
                    green space management — creating beautiful, natural and long-lasting green spaces for homes,
                    offices, rooftops, factories, resorts, restaurants and commercial projects across Bangladesh.
                </p>
                <div class="mt-9 flex flex-wrap justify-center gap-3">
                    <a href="{{ route('contact') }}" class="btn-primary">
                        Get a Quote
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </a>
                    <a href="{{ route('projects') }}" class="btn-outline-light">View Projects</a>
                    <a href="{{ route('shop') }}" class="btn-light">Shop Now</a>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================= FEATURE BAR (overlapping) ======================= --}}
    <div class="container-x relative z-10 -mt-28 lg:-mt-32" data-reveal>
        <div class="grid gap-px overflow-hidden rounded-3xl bg-sand-200 shadow-premium sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($featureBar as $i => [$label, $icon])
                <div class="group flex items-center gap-4 bg-white px-6 py-7 transition-colors hover:bg-primary-50" data-reveal style="--reveal-delay: {{ $i * 90 }}ms">
                    <span class="icon-badge bg-primary-500 text-white transition-transform duration-300 group-hover:-translate-y-0.5">@svg('heroicon-o-'.$icon, 'h-6 w-6')</span>
                    <div>
                        <h3 class="font-display text-base font-bold text-ink-900">{{ $label }}</h3>
                        <p class="text-xs text-ink-500">Professional service</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- ======================= ABOUT + STATS ======================= --}}
    <section class="section">
        <div class="container-x grid items-center gap-12 lg:grid-cols-2">
            <div class="relative" data-reveal="left">
                <img src="{{ asset($aboutImg) }}" alt="Landscaping BD completed garden" class="aspect-[4/5] w-full rounded-3xl object-cover shadow-premium">
                <div class="absolute -bottom-6 -right-3 hidden rounded-2xl bg-primary-500 px-6 py-5 text-white shadow-premium sm:block">
                    <p class="font-display text-3xl font-extrabold leading-none">100%</p>
                    <p class="mt-1 text-xs font-medium text-white/90">Customer<br>Satisfaction Focus</p>
                </div>
            </div>
            <div data-reveal="right">
                <span class="eyebrow">Welcome to Landscaping BD</span>
                <h2 class="h-display mt-4 text-3xl sm:text-4xl">Customer Satisfaction is Our Priority</h2>
                <p class="mt-5 leading-relaxed text-ink-700">
                    At Landscaping BD, we focus on quality work, proper planning, clear communication and
                    after-service support. Our goal is to make every client fully satisfied with our design,
                    finishing, plant quality and long-term service.
                </p>
                <ul class="mt-6 grid gap-x-6 gap-y-3 sm:grid-cols-2">
                    @foreach (['Professional landscaping team', 'Creative rooftop &amp; garden design', 'Quality grass, plants &amp; materials', 'Affordable &amp; practical planning', 'All Bangladesh service', 'After-service &amp; maintenance support', 'Industrial support service available'] as $point)
                        <li class="flex items-start gap-2.5 text-sm font-medium text-ink-800">
                            <svg class="mt-0.5 h-5 w-5 shrink-0 text-primary-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.7 5.2a1 1 0 010 1.4l-7.5 7.5a1 1 0 01-1.4 0L3.3 9.6a1 1 0 011.4-1.4l3.1 3.1 6.8-6.8a1 1 0 011.4 0z" clip-rule="evenodd"/></svg>
                            {!! $point !!}
                        </li>
                    @endforeach
                </ul>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ route('about') }}" class="btn-primary">More About Us</a>
                    <a href="tel:+8801777539790" class="btn-outline">Call: +880 1777-539790</a>
                </div>
            </div>
        </div>

        <div class="container-x mt-16 grid grid-cols-2 gap-6 border-t border-sand-200 pt-12 lg:grid-cols-4">
            @foreach ($stats as $i => $stat)
                <div class="text-center" data-reveal style="--reveal-delay: {{ $i * 90 }}ms">
                    <p class="font-display text-4xl font-extrabold text-primary-600 sm:text-5xl">
                        @if (isset($stat['count']))
                            <span data-count="{{ $stat['count'] }}" data-suffix="{{ $stat['suffix'] }}">0{{ $stat['suffix'] }}</span>
                        @else
                            {{ $stat['text'] }}
                        @endif
                    </p>
                    <p class="mt-2 text-sm font-medium text-ink-600">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ======================= TRUSTED BY ======================= --}}
    <section class="border-y border-sand-200 bg-sand-50 py-12">
        <div class="container-x" data-reveal>
            <p class="text-center text-xs font-bold uppercase tracking-widest text-ink-400">Trusted by leading corporate clients across Bangladesh</p>
            <div class="mt-6 flex flex-wrap items-center justify-center gap-x-10 gap-y-4">
                @foreach ($clients as $client)
                    <span class="font-display text-lg font-bold text-ink-400/70 transition-colors hover:text-primary-600">{!! $client !!}</span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ======================= CONSULTATION BAND ======================= --}}
    <section class="relative isolate overflow-hidden">
        <img src="{{ asset($bandImg) }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
        <div class="absolute inset-0 -z-10 bg-forest-950/82"></div>
        <div class="container-x flex flex-col items-center justify-between gap-6 py-16 text-center lg:flex-row lg:text-left" data-reveal>
            <div class="max-w-2xl">
                <span class="eyebrow-light">Free Consultation</span>
                <h2 class="h-display mt-4 text-2xl !text-white sm:text-3xl">Ready to make your space green, beautiful &amp; peaceful?</h2>
                <p class="mt-3 text-white/75">Contact Landscaping BD today for a free site consultation and project quote.</p>
            </div>
            <div class="flex shrink-0 flex-wrap items-center justify-center gap-3">
                <a href="{{ route('contact') }}" class="btn-primary">Get a Quote</a>
                <a href="tel:+8801777539790" class="btn-outline-light">Call Now</a>
            </div>
        </div>
    </section>

    {{-- ======================= SERVICES GRID ======================= --}}
    <section class="section">
        <div class="container-x">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">Complete Landscaping Solutions</span>
                <h2 class="h-display mt-4 text-3xl sm:text-4xl">Our Main Landscaping Services</h2>
                <p class="mt-4 text-ink-600">Design, installation, supply and maintenance — handled by one professional team across Bangladesh.</p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($services as $i => [$title, $desc, $icon, $img])
                    <article class="group relative isolate overflow-hidden rounded-3xl shadow-sm ring-1 ring-forest-950/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-premium" data-reveal style="--reveal-delay: {{ ($i % 3) * 110 }}ms">
                        <img src="{{ asset($img) }}" alt="{{ strip_tags($title) }}" class="absolute inset-0 -z-10 h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-forest-950/92 via-forest-950/45 to-forest-950/10 transition-opacity duration-300 group-hover:from-forest-950"></div>
                        <div class="flex min-h-80 flex-col justify-end p-6 text-white">
                            <span class="icon-badge mb-4 bg-white/15 text-white backdrop-blur transition-colors duration-300 group-hover:bg-primary-500">@svg('heroicon-o-'.$icon, 'h-6 w-6')</span>
                            <h3 class="font-display text-xl font-bold">{!! $title !!}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-white/80">{!! $desc !!}</p>
                            <a href="{{ route('landscaping-services') }}" class="mt-4 inline-flex items-center gap-1.5 text-sm font-semibold text-primary-300 transition-colors hover:text-white">
                                Learn more
                                <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-12 text-center" data-reveal>
                <a href="{{ route('landscaping-services') }}" class="btn-primary">View All Services</a>
            </div>
        </div>
    </section>

    {{-- ======================= HOW WE WORK ======================= --}}
    <section class="section bg-sand-50">
        <div class="container-x">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">How We Work</span>
                <h2 class="h-display mt-4 text-3xl sm:text-4xl">From idea to a beautiful green space</h2>
                <p class="mt-4 text-ink-600">A clear, step-by-step process — so every project is smooth, on-time and exactly what you imagined.</p>
            </div>
            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($steps as $i => [$title, $desc])
                    <div class="card group relative overflow-hidden" data-reveal style="--reveal-delay: {{ ($i % 3) * 110 }}ms">
                        <span class="absolute -right-1 top-2 font-display text-5xl font-extrabold text-primary-100 transition-colors duration-300 group-hover:text-primary-200">0{{ $i + 1 }}</span>
                        <span class="icon-badge mb-4 bg-primary-100 text-primary-700">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </span>
                        <h3 class="font-display text-lg font-bold text-ink-900">{!! $title !!}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-ink-600">{!! $desc !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ======================= TESTIMONIALS ======================= --}}
    <section class="section">
        <div class="container-x">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <span class="eyebrow">What Our Customers Say</span>
                <h2 class="h-display mt-4 text-3xl sm:text-4xl">Trusted by happy clients</h2>
            </div>
            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($testimonials as $i => [$title, $quote])
                    <figure class="card group flex h-full flex-col transition-all duration-300 hover:-translate-y-1 hover:shadow-premium" data-reveal style="--reveal-delay: {{ $i * 100 }}ms">
                        <div class="flex gap-0.5 text-gold-400">
                            @for ($s = 0; $s < 5; $s++)
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 15l-5.2 2.6 1-5.8L1.5 7.7l5.9-.9z"/></svg>
                            @endfor
                        </div>
                        <figcaption class="mt-4 font-display text-base font-bold text-ink-900">{!! $title !!}</figcaption>
                        <blockquote class="mt-2 flex-1 text-sm leading-relaxed text-ink-600">“{!! $quote !!}”</blockquote>
                        <p class="mt-4 text-xs font-semibold uppercase tracking-wider text-primary-600">Landscaping BD Customer</p>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ======================= BOTTOM CTA BAND ======================= --}}
    <section class="relative isolate overflow-hidden bg-forest-900">
        <img src="{{ asset($ctaImg) }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover opacity-20">
        <div class="pointer-events-none absolute -right-20 -top-20 -z-10 h-72 w-72 rounded-full bg-primary-500/20 blur-3xl"></div>
        <div class="container-x flex flex-col items-center justify-between gap-6 py-16 text-center lg:flex-row lg:text-left" data-reveal>
            <div>
                <h2 class="h-display text-2xl !text-white sm:text-3xl lg:text-4xl">Want to make your space green &amp; beautiful?</h2>
                <p class="mt-3 max-w-xl text-white/75">We are always ready to assist you with professional landscaping services, project consultations and maintenance solutions.</p>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-3">
                <a href="{{ route('contact') }}" class="btn-primary">Get a Quote</a>
                <a href="tel:+8801777539790" class="btn-outline-light">+880 1777-539790</a>
            </div>
        </div>
    </section>

@endsection
