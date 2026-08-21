// Lokasi file: public/js/theme.js
// 26. DARK MODE — toggle + persist via localStorage, applied before paint elsewhere via inline check.

(function () {
    const root = document.documentElement;
    const toggleBtn = document.getElementById('theme-toggle');
    const STORAGE_KEY = 'portfolio-theme';

    function applyTheme(theme) {
        root.setAttribute('data-theme', theme);
        if (toggleBtn) toggleBtn.setAttribute('aria-pressed', String(theme === 'dark'));
    }

    // Restore saved preference (falls back to system preference, then light)
    const saved = localStorage.getItem(STORAGE_KEY);
    if (saved) {
        applyTheme(saved);
    } else if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
        applyTheme('dark');
    }

    toggleBtn?.addEventListener('click', () => {
        const next = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        applyTheme(next);
        localStorage.setItem(STORAGE_KEY, next);
    });
})();
