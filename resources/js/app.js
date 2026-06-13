// Landscaping BD — front-end interactions (lightweight, no heavy libraries)

// 1) Reveal-on-scroll: smoothly fade/slide elements in as they enter the viewport
function initReveal() {
    const els = document.querySelectorAll('[data-reveal]');
    if (!els.length) return;

    if (!('IntersectionObserver' in window)) {
        els.forEach((el) => el.classList.add('is-visible'));
        return;
    }

    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    els.forEach((el) => io.observe(el));
}

// 2) Animated number counters (stats)
function initCounters() {
    const els = document.querySelectorAll('[data-count]');
    if (!els.length || !('IntersectionObserver' in window)) return;

    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                const el = entry.target;
                const target = parseFloat(el.dataset.count) || 0;
                const suffix = el.dataset.suffix || '';

                if (reduced) {
                    el.textContent = target + suffix;
                    io.unobserve(el);
                    return;
                }

                const duration = 1500;
                let startTime = null;
                const step = (ts) => {
                    if (startTime === null) startTime = ts;
                    const p = Math.min((ts - startTime) / duration, 1);
                    const eased = 1 - Math.pow(1 - p, 3);
                    el.textContent = Math.floor(eased * target) + suffix;
                    if (p < 1) requestAnimationFrame(step);
                    else el.textContent = target + suffix;
                };
                requestAnimationFrame(step);
                io.unobserve(el);
            });
        },
        { threshold: 0.6 }
    );

    els.forEach((el) => io.observe(el));
}

function init() {
    initReveal();
    initCounters();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
} else {
    init();
}
