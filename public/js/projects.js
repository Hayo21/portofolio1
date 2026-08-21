// Lokasi file: public/js/projects.js
// 12/16. Filter skills & projects without page reload.

(function () {
    function setupFilter(filterSelector, itemSelector) {
        const filterBar = document.querySelector(filterSelector);
        const items = document.querySelectorAll(itemSelector);
        if (!filterBar || !items.length) return;

        filterBar.addEventListener('click', (event) => {
            const btn = event.target.closest('.filter-btn');
            if (!btn) return;

            filterBar.querySelectorAll('.filter-btn').forEach((b) => {
                b.classList.remove('is-active');
                b.setAttribute('aria-selected', 'false');
            });
            btn.classList.add('is-active');
            btn.setAttribute('aria-selected', 'true');

            const filter = btn.dataset.filter;

            items.forEach((item) => {
                const matches = filter === 'all' || item.dataset.category === filter;
                item.classList.toggle('is-hidden', !matches);
                item.style.display = matches ? '' : 'none';
            });
        });
    }

    setupFilter('.skills-filter', '.skill-card');
    setupFilter('.project-filter', '.project-card');
})();
