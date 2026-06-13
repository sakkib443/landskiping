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

// 0) Brand preloader — count 0 → 100%, then slide up to reveal the site
function initPreloader() {
    const el = document.getElementById('preloader');
    if (!el) return;

    const countEl = document.getElementById('preloader-count');
    const fillEl = document.getElementById('preloader-fill');
    const root = document.documentElement;
    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    root.classList.add('is-loading');

    let done = false;
    const finish = () => {
        if (done) return;
        done = true;
        el.classList.add('is-done');
        root.classList.remove('is-loading');
        setTimeout(() => el.remove(), 1000); // after the slide-up transition
    };

    const render = (pct) => {
        countEl.textContent = pct;
        if (fillEl) fillEl.style.width = pct + '%';
    };

    if (reduced) {
        render(100);
        finish();
        return;
    }

    const duration = 1900;
    // easeInOutCubic — smooth acceleration then settle
    const ease = (t) => (t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2);

    const startedAt = Date.now();
    let loaded = document.readyState === 'complete';
    window.addEventListener('load', () => { loaded = true; });

    // Drive with setInterval + real elapsed time. This stays correct even when
    // requestAnimationFrame is paused (background tab / non-painting context),
    // so the counter always advances and the preloader always dismisses.
    const timer = setInterval(() => {
        const p = Math.min((Date.now() - startedAt) / duration, 1);
        let pct = Math.round(ease(p) * 100);
        if (!loaded && pct > 96) pct = 96; // hold near the end until the page is ready
        render(pct);
        if (pct >= 100) {
            clearInterval(timer);
            setTimeout(finish, 320);
        }
    }, 30);

    // Hard safety net: reveal the site within 5s no matter what.
    setTimeout(() => { clearInterval(timer); finish(); }, 5000);
}

function init() {
    initReveal();
    initCounters();
}

initPreloader();

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
} else {
    init();
}
