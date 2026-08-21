// Lokasi file: public/js/navbar.js
// 5. NAVBAR — transparent at top, blurred/shadowed on scroll. Mobile hamburger.

(function () {
    const navbar = document.getElementById('site-navbar');
    const navToggle = document.getElementById('nav-toggle');
    const mobilePanel = document.getElementById('nav-mobile-panel');

    function updateNavbarState() {
        if (!navbar) return;
        navbar.dataset.state = window.scrollY > 24 ? 'scrolled' : 'top';
    }

    updateNavbarState();
    window.addEventListener('scroll', updateNavbarState, { passive: true });

    navToggle?.addEventListener('click', () => {
        const isOpen = navToggle.getAttribute('aria-expanded') === 'true';
        navToggle.setAttribute('aria-expanded', String(!isOpen));
        navToggle.setAttribute('aria-label', isOpen ? 'Open menu' : 'Close menu');
        mobilePanel?.classList.toggle('is-open', !isOpen);
    });

    // Close mobile menu after tapping a link
    mobilePanel?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            navToggle?.setAttribute('aria-expanded', 'false');
            mobilePanel.classList.remove('is-open');
        });
    });
})();
