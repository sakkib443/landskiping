@extends('layouts.app')

@section('title', 'Contact Us — Landscaping BD')
@section('meta_description', 'Contact Landscaping BD for professional landscaping services, rooftop garden design, vertical gardening, natural grass installation and a free project quote. Based in Dhaka, serving all Bangladesh.')

@section('content')

    <x-page-header
        eyebrow="Get in Touch"
        title="Contact Us"
        subtitle="Want to make your space green, beautiful and peaceful? Contact Landscaping BD today for professional landscaping service and a free project quote."
        bg="images/projects/p15-img3-672x395.png" />

    {{-- ── Contact Info + Form ──────────────────────────────────────────────── --}}
    <section class="section">
        <div class="container-x grid items-start gap-10 lg:grid-cols-5 xl:gap-16">

            {{-- LEFT: Contact Info Cards ─────────────────────────────────────── --}}
            <div class="lg:col-span-2" data-reveal="left">
                <span class="eyebrow">Reach Us</span>
                <h2 class="h-display mt-3 text-2xl sm:text-3xl">Let's start a conversation</h2>
                <p class="mt-4 leading-relaxed text-ink-600">We're happy to discuss your project, answer questions or provide a free quote. Reach us through any channel below.</p>

                <div class="mt-8 space-y-4">

                    {{-- Address --}}
                    <div class="flex items-start gap-4 rounded-2xl border border-sand-200 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:border-primary-200 hover:shadow-premium">
                        <span class="icon-badge shrink-0 bg-primary-100 text-primary-700">
                            {{-- Location pin (reused from footer) --}}
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                            </svg>
                        </span>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-ink-400">Office Address</p>
                            <p class="mt-0.5 text-sm font-medium leading-relaxed text-ink-800">67/9, Kakrail, Eastern Mansion,<br>Room No. 3/2, Ramna, Dhaka-1000</p>
                        </div>
                    </div>

                    {{-- Phone --}}
                    <div class="flex items-start gap-4 rounded-2xl border border-sand-200 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:border-primary-200 hover:shadow-premium">
                        <span class="icon-badge shrink-0 bg-primary-100 text-primary-700">
                            {{-- Phone (reused from footer) --}}
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                            </svg>
                        </span>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-ink-400">Phone</p>
                            <a href="tel:+8801777539790" class="mt-0.5 block text-sm font-medium text-ink-800 transition-colors hover:text-primary-600">+880 1777-539790</a>
                            <a href="tel:+8801864984616" class="block text-sm font-medium text-ink-800 transition-colors hover:text-primary-600">+880 1864-984616</a>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="flex items-start gap-4 rounded-2xl border border-sand-200 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:border-primary-200 hover:shadow-premium">
                        <span class="icon-badge shrink-0 bg-primary-100 text-primary-700">
                            {{-- Mail (reused from footer) --}}
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                            </svg>
                        </span>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-ink-400">Email</p>
                            <a href="mailto:info@landscapingbd.com" class="mt-0.5 block text-sm font-medium text-ink-800 transition-colors hover:text-primary-600">info@landscapingbd.com</a>
                        </div>
                    </div>

                    {{-- Office Hours --}}
                    <div class="flex items-start gap-4 rounded-2xl border border-sand-200 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:border-primary-200 hover:shadow-premium">
                        <span class="icon-badge shrink-0 bg-primary-100 text-primary-700">
                            {{-- Clock --}}
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2m6-2a10 10 0 11-20 0 10 10 0 0120 0z"/>
                            </svg>
                        </span>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-ink-400">Office Hours</p>
                            <p class="mt-0.5 text-sm font-medium text-ink-800">Saturday – Thursday: 9:00 AM – 6:00 PM</p>
                            <p class="text-sm text-ink-500">Friday: Closed</p>
                        </div>
                    </div>

                </div>

                {{-- WhatsApp CTA --}}
                <a href="https://wa.me/8801777539790"
                   target="_blank" rel="noopener noreferrer"
                   class="mt-6 inline-flex w-full items-center justify-center gap-3 rounded-full bg-[#25D366] px-7 py-3.5 text-sm font-semibold text-white shadow-lg shadow-[#25D366]/30 transition-all hover:bg-[#1ebe5a] hover:shadow-[#25D366]/40">
                    {{-- WhatsApp icon --}}
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                        <path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.528 5.849L.057 23.57a.5.5 0 00.614.614l5.72-1.471A11.933 11.933 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.784 9.784 0 01-5.003-1.373l-.358-.214-3.722.957.99-3.623-.234-.373A9.786 9.786 0 012.182 12C2.182 6.565 6.565 2.182 12 2.182S21.818 6.565 21.818 12 17.435 21.818 12 21.818z"/>
                    </svg>
                    Order / Chat on WhatsApp
                </a>

                {{-- Service Area badge --}}
                <div class="mt-4 flex items-center gap-2 rounded-xl bg-primary-50 px-4 py-3 text-sm">
                    @svg('heroicon-o-map-pin', 'h-4 w-4 shrink-0 text-primary-600')
                    <span class="font-medium text-primary-800">Service Area: <span class="font-semibold">All Bangladesh</span></span>
                </div>
            </div>

            {{-- RIGHT: Contact Form ───────────────────────────────────────────── --}}
            <div class="lg:col-span-3" data-reveal="right">
                <div class="rounded-3xl border border-sand-200 bg-white p-6 shadow-sm sm:p-8">
                    <div class="mb-7">
                        <span class="eyebrow">Quick Request</span>
                        <h2 class="h-display mt-2 text-2xl sm:text-3xl">Send us your project details</h2>
                        <p class="mt-3 text-sm leading-relaxed text-ink-600">Fill out the form below and we'll get back to you within one business day with a free consultation.</p>
                    </div>

                    {{-- TODO: wire submission (route + validation + email) in a later step --}}
                    <form action="#" method="POST" class="space-y-5" novalidate>

                        {{-- Name + Phone (2-col on sm+) --}}
                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="contact_name" class="mb-1.5 block text-sm font-semibold text-ink-800">
                                    Full Name <span class="text-primary-600" aria-hidden="true">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="contact_name"
                                    name="name"
                                    placeholder="Your full name"
                                    required
                                    autocomplete="name"
                                    class="w-full rounded-xl border border-sand-200 bg-sand-50 px-4 py-3 text-sm text-ink-900 placeholder-ink-400 outline-none transition-all focus:border-primary-400 focus:bg-white focus:ring-2 focus:ring-primary-400/20">
                            </div>
                            <div>
                                <label for="contact_phone" class="mb-1.5 block text-sm font-semibold text-ink-800">
                                    Phone Number <span class="text-primary-600" aria-hidden="true">*</span>
                                </label>
                                <input
                                    type="tel"
                                    id="contact_phone"
                                    name="phone"
                                    placeholder="+880 1XXX-XXXXXX"
                                    required
                                    autocomplete="tel"
                                    class="w-full rounded-xl border border-sand-200 bg-sand-50 px-4 py-3 text-sm text-ink-900 placeholder-ink-400 outline-none transition-all focus:border-primary-400 focus:bg-white focus:ring-2 focus:ring-primary-400/20">
                            </div>
                        </div>

                        {{-- Project Location --}}
                        <div>
                            <label for="contact_location" class="mb-1.5 block text-sm font-semibold text-ink-800">
                                Project Location <span class="text-primary-600" aria-hidden="true">*</span>
                            </label>
                            <input
                                type="text"
                                id="contact_location"
                                name="project_location"
                                placeholder="e.g. Gulshan, Dhaka / Chittagong / Sylhet"
                                required
                                class="w-full rounded-xl border border-sand-200 bg-sand-50 px-4 py-3 text-sm text-ink-900 placeholder-ink-400 outline-none transition-all focus:border-primary-400 focus:bg-white focus:ring-2 focus:ring-primary-400/20">
                        </div>

                        {{-- Service Type --}}
                        <div>
                            <label for="contact_service" class="mb-1.5 block text-sm font-semibold text-ink-800">
                                Service Type <span class="text-primary-600" aria-hidden="true">*</span>
                            </label>
                            <div class="relative">
                                <select
                                    id="contact_service"
                                    name="service_type"
                                    required
                                    class="w-full appearance-none rounded-xl border border-sand-200 bg-sand-50 px-4 py-3 text-sm text-ink-900 outline-none transition-all focus:border-primary-400 focus:bg-white focus:ring-2 focus:ring-primary-400/20">
                                    <option value="" disabled selected>Select a service…</option>
                                    <option value="Rooftop Garden">Rooftop Garden</option>
                                    <option value="Vertical Gardening">Vertical Gardening</option>
                                    <option value="Natural Grass Installation">Natural Grass Installation</option>
                                    <option value="Garden Design">Garden Design</option>
                                    <option value="Landscape Maintenance">Landscape Maintenance</option>
                                    <option value="Landscaping Product Supply">Landscaping Product Supply</option>
                                    <option value="Container Supply">Container Supply</option>
                                    <option value="Sheet Pile Supply & Installation">Sheet Pile Supply &amp; Installation</option>
                                    <option value="MS Pipe Supply & Installation">MS Pipe Supply &amp; Installation</option>
                                    <option value="H-Beam Supply & Installation">H-Beam Supply &amp; Installation</option>
                                    <option value="Welding & Fabrication Service">Welding &amp; Fabrication Service</option>
                                    <option value="Jetty Construction">Jetty Construction</option>
                                    <option value="Geo Tube Supply & Installation">Geo Tube Supply &amp; Installation</option>
                                    <option value="Other">Other</option>
                                </select>
                                {{-- Chevron icon for select --}}
                                <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-ink-400">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19 9-7 7-7-7"/>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="contact_message" class="mb-1.5 block text-sm font-semibold text-ink-800">
                                Message / Project Details
                            </label>
                            <textarea
                                id="contact_message"
                                name="message"
                                rows="5"
                                placeholder="Briefly describe your project — size, budget, timeline, any specific requirements…"
                                class="w-full resize-y rounded-xl border border-sand-200 bg-sand-50 px-4 py-3 text-sm text-ink-900 placeholder-ink-400 outline-none transition-all focus:border-primary-400 focus:bg-white focus:ring-2 focus:ring-primary-400/20"></textarea>
                        </div>

                        {{-- Required fields note --}}
                        <p class="text-xs text-ink-400">Fields marked <span class="font-semibold text-primary-600">*</span> are required.</p>

                        {{-- Submit --}}
                        <button type="submit" class="btn-primary w-full justify-center py-4 text-base">
                            Submit Request
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.77 59.77 0 0 1 3.27 20.875L5.999 12zm0 0h7.5"/>
                            </svg>
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </section>

    {{-- ── Google Map ───────────────────────────────────────────────────────── --}}
    <section class="section bg-sand-50">
        <div class="container-x" data-reveal>
            <div class="mx-auto mb-10 max-w-xl text-center">
                <span class="eyebrow">Find Us</span>
                <h2 class="h-display mt-3 text-2xl sm:text-3xl">Our office location</h2>
                <p class="mt-3 text-sm leading-relaxed text-ink-600">67/9, Kakrail, Eastern Mansion, Room No. 3/2, Ramna, Dhaka-1000, Bangladesh</p>
            </div>
            <div class="overflow-hidden rounded-3xl shadow-premium ring-1 ring-forest-950/5">
                <iframe
                    src="https://www.google.com/maps?q=Kakrail,Dhaka-1000,Bangladesh&output=embed"
                    width="100%"
                    height="400"
                    class="block h-[400px] w-full border-0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Landscaping BD office location — Kakrail, Dhaka-1000">
                </iframe>
            </div>
            <div class="mt-5 flex flex-wrap items-center justify-center gap-4 text-sm text-ink-500">
                <a href="https://www.google.com/maps?q=Kakrail,Dhaka-1000,Bangladesh"
                   target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-1.5 font-medium text-primary-600 transition-colors hover:text-primary-700">
                    @svg('heroicon-o-arrow-top-right-on-square', 'h-4 w-4')
                    Open in Google Maps
                </a>
                <span class="text-sand-300">|</span>
                <span>Dhaka-1000, Bangladesh</span>
            </div>
        </div>
    </section>

    {{-- ── CTA Band ─────────────────────────────────────────────────────────── --}}
    <section class="relative isolate overflow-hidden bg-forest-900">
        <img src="{{ asset('images/projects/p15-img3-672x395.png') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover opacity-20">
        <div class="pointer-events-none absolute -left-20 -top-16 -z-10 h-64 w-64 rounded-full bg-primary-500/15 blur-3xl"></div>
        <div class="container-x flex flex-col items-center justify-between gap-6 py-16 text-center lg:flex-row lg:text-left" data-reveal>
            <div>
                <h2 class="h-display text-2xl !text-white sm:text-3xl">Ready to transform your space?</h2>
                <p class="mt-3 text-white/75">Call us now or send a message — we'll get back to you within one business day.</p>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-3">
                <a href="tel:+8801777539790" class="btn-primary">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                    </svg>
                    Call Now
                </a>
                <a href="{{ route('landscaping-services') }}" class="btn-outline-light">View Our Services</a>
            </div>
        </div>
    </section>

@endsection
