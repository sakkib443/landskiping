@php
    $footerServices = ['Rooftop Garden Design', 'Vertical Gardening', 'Natural Grass Installation', 'Garden Design & Development', 'Tree Plantation', 'Landscape Maintenance'];
    $footerLinks = [
        ['Home', route('home')], ['About Us', route('about')], ['Landscaping Services', route('landscaping-services')],
        ['Projects', route('projects')], ['Gallery', route('gallery')], ['Shop', route('shop')],
        ['Industrial Services', route('industrial-services')], ['Our Team', route('team')], ['Contact Us', route('contact')],
    ];
@endphp

<footer class="bg-forest-950 text-forest-100">
    {{-- Top help row --}}
    <div class="border-b border-white/10">
        <div class="container-x grid gap-6 py-8 sm:grid-cols-2">
            <div class="flex items-center gap-4">
                <span class="icon-badge bg-primary-500 text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.51A9 9 0 105.49 20.25"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"/></svg>
                </span>
                <div>
                    <p class="font-display text-lg font-bold text-white">Need help with your garden project?</p>
                    <a href="tel:+8801777539790" class="text-sm text-primary-300 hover:text-primary-200">Call us: +880 1777-539790 / 1864-984616</a>
                </div>
            </div>
            <div class="flex items-center gap-3 sm:justify-end">
                <a href="{{ route('contact') }}" class="btn-primary">Book a Free Consultation</a>
            </div>
        </div>
    </div>

    {{-- Main footer --}}
    <div class="container-x grid gap-10 py-16 sm:grid-cols-2 lg:grid-cols-4">
        <div class="sm:col-span-2 lg:col-span-1">
            <div class="flex items-center gap-2.5">
                <img src="{{ asset('images/brand/logo-mark.png') }}" alt="Landscaping BD" class="h-11 w-11 object-contain">
                <span class="font-display text-lg font-extrabold leading-none">
                    <span class="text-white">LANDSCAPING</span> <span class="text-primary-400">BD</span>
                </span>
            </div>
            <p class="mt-4 text-sm leading-relaxed text-white/55">
                Professional landscaping, rooftop gardens, vertical gardening, natural grass installation,
                garden design, tree plantation, landscape maintenance &amp; industrial support services across Bangladesh.
            </p>
            <p class="mt-4 text-xs font-semibold uppercase tracking-wider text-primary-400">Enhancing Nature. Elevating Spaces.</p>
        </div>

        <div>
            <h3 class="font-display text-sm font-bold uppercase tracking-wider text-white">Quick Links</h3>
            <ul class="mt-4 space-y-2.5 text-sm text-white/55">
                @foreach ($footerLinks as [$label, $url])
                    <li><a href="{{ $url }}" class="transition-colors hover:text-primary-400">{{ $label }}</a></li>
                @endforeach
            </ul>
        </div>

        <div>
            <h3 class="font-display text-sm font-bold uppercase tracking-wider text-white">Main Services</h3>
            <ul class="mt-4 space-y-2.5 text-sm text-white/55">
                @foreach ($footerServices as $label)
                    <li><a href="{{ route('landscaping-services') }}" class="transition-colors hover:text-primary-400">{{ $label }}</a></li>
                @endforeach
            </ul>
        </div>

        <div>
            <h3 class="font-display text-sm font-bold uppercase tracking-wider text-white">Get in Touch</h3>
            <ul class="mt-4 space-y-3 text-sm text-white/55">
                <li class="flex gap-3">
                    <svg class="mt-0.5 h-5 w-5 shrink-0 text-primary-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                    <span>67/9, Kakrail, Eastern Mansion,<br>Room No. 3/2, Ramna, Dhaka-1000</span>
                </li>
                <li class="flex gap-3">
                    <svg class="mt-0.5 h-5 w-5 shrink-0 text-primary-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                    <span><a href="tel:+8801777539790" class="hover:text-primary-400">+880 1777-539790</a><br><a href="tel:+8801864984616" class="hover:text-primary-400">+880 1864-984616</a></span>
                </li>
                <li class="flex gap-3">
                    <svg class="mt-0.5 h-5 w-5 shrink-0 text-primary-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                    <a href="mailto:info@landscapingbd.com" class="hover:text-primary-400">info@landscapingbd.com</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="border-t border-white/10">
        <div class="container-x flex flex-col items-center justify-between gap-2 py-5 text-sm text-white/45 sm:flex-row">
            <p>&copy; {{ date('Y') }} Landscaping BD. All Rights Reserved.</p>
            <p>Service Area: All Bangladesh &middot; Sat–Thu 9:00 AM – 6:00 PM</p>
        </div>
    </div>
</footer>
