// Lokasi file: public/js/animations.js
// 7/9/10/13/18/21. Scroll animations, hero entrance, terminal typing, count-up, timeline/workflow lines.

(function () {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---------------------------------------------------------------
       Scroll-reveal via IntersectionObserver — fade-up/left/right/scale
       and stagger groups, applied through [data-animate] (see CSS).
    --------------------------------------------------------------- */
    const revealTargets = document.querySelectorAll('[data-animate]');

    if (prefersReducedMotion || !('IntersectionObserver' in window)) {
        revealTargets.forEach((el) => el.classList.add('is-inview'));
    } else {
        const revealObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-inview');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.15, rootMargin: '0px 0px -60px 0px' }
        );
        revealTargets.forEach((el) => revealObserver.observe(el));
    }

    /* ---------------------------------------------------------------
       9. HERO ENTRANCE — staggered on load (0.4–1s total)
    --------------------------------------------------------------- */
    window.addEventListener('load', () => {
        const heroItems = document.querySelectorAll('.hero [data-animate]');
        heroItems.forEach((el, i) => {
            el.style.transitionDelay = prefersReducedMotion ? '0s' : `${0.08 * i}s`;
            requestAnimationFrame(() => el.classList.add('is-inview'));
        });
    });

    /* ---------------------------------------------------------------
       46. INTERACTIVE TERMINAL — typing effect (visual only, no exec)
    --------------------------------------------------------------- */
    const terminalBody = document.getElementById('hero-terminal-body');
    if (terminalBody) {
        const lines = [
            { prompt: '$ whoami', output: 'Muniff Agustiansah' },
            { prompt: '$ role', output: 'Web Developer' },
            { prompt: '$ stack', output: 'Laravel · PHP · MySQL' },
            { prompt: '$ status', output: 'Available for opportunities' },
        ];

        if (prefersReducedMotion) {
            terminalBody.innerHTML = lines
                .map((l) => `<div><span class="t-prompt">${l.prompt}</span></div><div>${l.output}</div>`)
                .join('');
        } else {
            let lineIndex = 0;

            function typeLine() {
                if (lineIndex >= lines.length) {
                    const caret = document.createElement('span');
                    caret.className = 't-caret';
                    terminalBody.appendChild(caret);
                    return;
                }
                const { prompt, output } = lines[lineIndex];
                const promptEl = document.createElement('div');
                const promptSpan = document.createElement('span');
                promptSpan.className = 't-prompt';
                promptEl.appendChild(promptSpan);
                terminalBody.appendChild(promptEl);

                let charIndex = 0;
                const typeInterval = setInterval(() => {
                    promptSpan.textContent = prompt.slice(0, charIndex + 1);
                    charIndex++;
                    if (charIndex >= prompt.length) {
                        clearInterval(typeInterval);
                        setTimeout(() => {
                            const outputEl = document.createElement('div');
                            outputEl.textContent = output;
                            terminalBody.appendChild(outputEl);
                            lineIndex++;
                            setTimeout(typeLine, 260);
                        }, 180);
                    }
                }, 28);
            }

            setTimeout(typeLine, 500);
        }
    }

    /* ---------------------------------------------------------------
       10. COUNT-UP STATS — triggers once when the About stats enter view
    --------------------------------------------------------------- */
    const statNumbers = document.querySelectorAll('.stat-number[data-count-to]');
    if (statNumbers.length) {
        const countObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;
                    const el = entry.target;
                    const target = parseInt(el.dataset.countTo, 10) || 0;

                    if (prefersReducedMotion) {
                        el.textContent = target;
                    } else {
                        const duration = 1200;
                        const start = performance.now();
                        function step(now) {
                            const progress = Math.min((now - start) / duration, 1);
                            const eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
                            el.textContent = Math.round(eased * target);
                            if (progress < 1) requestAnimationFrame(step);
                        }
                        requestAnimationFrame(step);
                    }
                    observer.unobserve(el);
                });
            },
            { threshold: 0.5 }
        );
        statNumbers.forEach((el) => countObserver.observe(el));
    }

    /* ---------------------------------------------------------------
       18/21. TIMELINE & WORKFLOW LINE FILL on scroll into view
    --------------------------------------------------------------- */
    function fillLineOnView(containerSelector, fillSelector) {
        const container = document.querySelector(containerSelector);
        const fill = document.querySelector(fillSelector);
        if (!container || !fill) return;

        const observer = new IntersectionObserver(
            (entries, obs) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        fill.style[containerSelector.includes('timeline') ? 'height' : 'width'] = '100%';
                        obs.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.2 }
        );
        observer.observe(container);
    }

    fillLineOnView('.timeline', '.timeline-line-fill');
    fillLineOnView('.workflow-steps', '.workflow-line-fill');

    /* ---------------------------------------------------------------
       50. PROJECT IMAGE REVEAL — image slides up + fades in on view
    --------------------------------------------------------------- */
    const projectImages = document.querySelectorAll('.project-image-wrap');
    if (projectImages.length && !prefersReducedMotion) {
        const imgObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.2 }
        );
        projectImages.forEach((el) => imgObserver.observe(el));
    } else {
        projectImages.forEach((el) => el.classList.add('is-revealed'));
    }
})();
