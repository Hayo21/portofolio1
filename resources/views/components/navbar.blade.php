{{-- Lokasi file: resources/views/components/navbar.blade.php --}}
<header id="site-navbar" data-state="top">
    <div class="nav-inner">
        <a href="{{ route('home') }}" class="nav-logo" aria-label="Muniff Agustiansah — Home">MUNIFF<span>.</span></a>

        <nav class="nav-links" aria-label="Primary">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#experience">Experience</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="nav-actions">
            <button id="theme-toggle" type="button" aria-label="Toggle dark mode" aria-pressed="false">
                <svg class="icon-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
                <svg class="icon-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8Z"/></svg>
            </button>
            <a href="{{ asset('storage/cv/muniff-agustiansah-cv.pdf') }}" class="btn-cv" download>Download CV</a>
            <button id="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="nav-mobile-panel">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>

    <div id="nav-mobile-panel">
        <nav aria-label="Mobile">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#experience">Experience</a>
            <a href="#contact">Contact</a>
            <a href="{{ asset('storage/cv/muniff-agustiansah-cv.pdf') }}" class="btn-cv-mobile" download>Download CV</a>
        </nav>
    </div>
</header>
