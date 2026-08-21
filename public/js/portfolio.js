// Lokasi file: public/js/portfolio.js
// 8/28/29/30/48/49. Loading screen, scroll progress, custom cursor (desktop only),
// command palette (Ctrl+K), back-to-top button.

(function () {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isDesktopPointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches
        && window.matchMedia('(min-width: 1024px)').matches;

    /* ---------------------------------------------------------------
       Render Lucide icons (skill/service icons use [data-lucide])
    --------------------------------------------------------------- */
    if (window.lucide) {
        window.lucide.createIcons();
    } else {
        window.addEventListener('load', () => window.lucide?.createIcons());
    }

    /* ---------------------------------------------------------------
       28. LOADING SCREEN — hides shortly after window load
    --------------------------------------------------------------- */
    const loadingScreen = document.getElementById('loading-screen');
    const loadingBarFill = document.getElementById('loading-bar-fill');

    if (loadingBarFill) requestAnimationFrame(() => (loadingBarFill.style.width = '70%'));

    window.addEventListener('load', () => {
        if (loadingBarFill) loadingBarFill.style.width = '100%';
        setTimeout(() => {
            loadingScreen?.classList.add('is-hidden');
        }, 300);
    });

    // Safety net: never let the loading screen block the page for more than 2.5s
    setTimeout(() => loadingScreen?.classList.add('is-hidden'), 2500);

    /* ---------------------------------------------------------------
       29. SCROLL PROGRESS
    --------------------------------------------------------------- */
    const progressBar = document.getElementById('scroll-progress');

    function updateScrollProgress() {
        if (!progressBar) return;
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const percent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        progressBar.style.width = `${percent}%`;
    }
    updateScrollProgress();
    window.addEventListener('scroll', updateScrollProgress, { passive: true });

    /* ---------------------------------------------------------------
       30. BACK TO TOP
    --------------------------------------------------------------- */
    const backToTop = document.getElementById('back-to-top');
    function updateBackToTop() {
        backToTop?.classList.toggle('is-visible', window.scrollY > 600);
    }
    updateBackToTop();
    window.addEventListener('scroll', updateBackToTop, { passive: true });
    backToTop?.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
    });

    /* ---------------------------------------------------------------
       8. CUSTOM CURSOR — desktop pointer devices only (poin PENTING #8)
    --------------------------------------------------------------- */
    if (isDesktopPointer && !prefersReducedMotion) {
        document.body.classList.add('has-custom-cursor');
        const cursor = document.getElementById('custom-cursor');

        window.addEventListener('mousemove', (event) => {
            if (!cursor) return;
            cursor.style.transform = `translate(${event.clientX}px, ${event.clientY}px)`;
        });

        document.querySelectorAll('a, button, .project-card, .skill-card').forEach((el) => {
            el.addEventListener('mouseenter', () => cursor?.classList.add('is-active'));
            el.addEventListener('mouseleave', () => cursor?.classList.remove('is-active'));
        });
    }

    /* ---------------------------------------------------------------
       47. AVAILABLE STATUS pulse is handled purely in CSS (see .status-dot)
    --------------------------------------------------------------- */

    /* ---------------------------------------------------------------
       48/49. COMMAND PALETTE — Ctrl+K / Cmd+K
    --------------------------------------------------------------- */
    const overlay = document.getElementById('command-palette-overlay');
    const paletteInput = document.getElementById('cp-input');
    const paletteList = document.getElementById('cp-list');

    const commands = [
        { label: 'Go to Home', hint: '#home', action: () => scrollToSection('#home') },
        { label: 'Go to About', hint: '#about', action: () => scrollToSection('#about') },
        { label: 'Go to Skills', hint: '#skills', action: () => scrollToSection('#skills') },
        { label: 'Go to Projects', hint: '#projects', action: () => scrollToSection('#projects') },
        { label: 'Go to Experience', hint: '#experience', action: () => scrollToSection('#experience') },
        { label: 'Go to Contact', hint: '#contact', action: () => scrollToSection('#contact') },
        {
            label: 'Download CV',
            hint: 'PDF',
            action: () => {
                const link = document.querySelector('.btn-cv');
                if (link) link.click();
            },
        },
    ];

    function scrollToSection(selector) {
        document.querySelector(selector)?.scrollIntoView({ behavior: prefersReducedMotion ? 'auto' : 'smooth' });
    }

    let selectedIndex = 0;

    function renderCommands(filter = '') {
        if (!paletteList) return;
        const filtered = commands.filter((c) => c.label.toLowerCase().includes(filter.toLowerCase()));
        paletteList.innerHTML = filtered
            .map(
                (c, i) =>
                    `<li role="option" data-index="${i}" aria-selected="${i === selectedIndex}">${c.label}<span>${c.hint}</span></li>`
            )
            .join('') || '<li style="color:var(--muted)">No matching command</li>';
        paletteList._filtered = filtered;
    }

    function openPalette() {
        if (!overlay) return;
        overlay.hidden = false;
        selectedIndex = 0;
        renderCommands();
        paletteInput?.focus();
    }

    function closePalette() {
        if (!overlay) return;
        overlay.hidden = true;
        if (paletteInput) paletteInput.value = '';
    }

    document.addEventListener('keydown', (event) => {
        const isCombo = (event.ctrlKey || event.metaKey) && event.key.toLowerCase() === 'k';
        if (isCombo) {
            event.preventDefault();
            overlay?.hidden ? openPalette() : closePalette();
            return;
        }
        if (event.key === 'Escape' && overlay && !overlay.hidden) {
            closePalette();
        }
    });

    overlay?.addEventListener('click', (event) => {
        if (event.target === overlay) closePalette();
    });

    paletteInput?.addEventListener('input', (event) => {
        selectedIndex = 0;
        renderCommands(event.target.value);
    });

    paletteList?.addEventListener('click', (event) => {
        const li = event.target.closest('li[data-index]');
        if (!li) return;
        const cmd = paletteList._filtered?.[Number(li.dataset.index)];
        cmd?.action();
        closePalette();
    });
})();
