// App.js - Alpine.js functionality is now handled inline in the layout template

function easeOutCubic(t) {
    return 1 - Math.pow(1 - t, 3);
}

function formatNumber(num) {
    try {
        return new Intl.NumberFormat('en-US').format(num);
    } catch {
        return String(num);
    }
}

function animateCounter(el, { from, to, durationMs, suffix }) {
    const start = performance.now();
    const fromVal = Number.isFinite(from) ? from : 0;
    const toVal = Number.isFinite(to) ? to : 0;
    const duration = Math.max(200, durationMs || 1400);

    function frame(now) {
        const t = Math.min(1, (now - start) / duration);
        const eased = easeOutCubic(t);
        const current = Math.round(fromVal + (toVal - fromVal) * eased);
        el.textContent = `${formatNumber(current)}${suffix || ''}`;
        if (t < 1) requestAnimationFrame(frame);
    }

    requestAnimationFrame(frame);
}

function initCounters() {
    const counters = Array.from(document.querySelectorAll('.js-counter'));
    if (counters.length === 0) return;

    const observer = new IntersectionObserver(
        (entries) => {
            for (const entry of entries) {
                if (!entry.isIntersecting) continue;
                const el = entry.target;
                if (el.dataset.animated === 'true') continue;
                el.dataset.animated = 'true';

                const from = parseInt(el.getAttribute('data-from') || '0', 10);
                const to = parseInt(el.getAttribute('data-to') || '0', 10);
                const suffix = el.getAttribute('data-suffix') || '';
                animateCounter(el, { from, to, durationMs: 1400, suffix });
            }
        },
        { threshold: 0.4 }
    );

    counters.forEach((el) => observer.observe(el));
}

function initSmoothScroll() {
    document.addEventListener('click', (e) => {
        const anchor = e.target.closest('a[href^="#"]');
        if (!anchor) return;

        const href = anchor.getAttribute('href');
        if (!href || href === '#') return;

        const id = href.slice(1);
        const target = document.getElementById(id);
        if (!target) return;

        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        history.pushState(null, '', href);
    });
}

function initMobileMenu() {
    const btn = document.querySelector('[data-mobile-menu-button]');
    const menu = document.querySelector('[data-mobile-menu]');
    if (!btn || !menu) return;

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initSmoothScroll();
    initMobileMenu();
    initCounters();
});
