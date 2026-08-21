{{-- Lokasi file: resources/views/components/hero.blade.php --}}
<section id="home" class="hero">
    <div class="hero-grid-bg" aria-hidden="true"></div>

    <div class="hero-inner">
        <div class="hero-copy">
            <p class="hero-status" data-animate="fade-up">
                <span class="status-dot"></span> Available for opportunities
            </p>

            <p class="hero-eyebrow" data-animate="fade-up">HELLO, I'M</p>

            <h1 class="hero-name" data-animate="fade-up">Muniff Agustiansah</h1>

            <p class="hero-tagline" data-animate="fade-up">
                I build digital experiences<br>that solve real problems.
            </p>

            <div class="hero-actions" data-animate="fade-up">
                <a href="#projects" class="btn-primary">
                    <span>View My Work</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </a>
                <a href="{{ asset('storage/cv/muniff-agustiansah-cv.pdf') }}" class="btn-secondary" download>Download CV</a>
            </div>
        </div>

        <div class="hero-visual" data-animate="fade-left">
            {{-- 46. INTERACTIVE TERMINAL --}}
            <div class="hero-terminal" role="img" aria-label="Terminal window showing developer identity">
                <div class="terminal-bar">
                    <span class="dot red"></span><span class="dot yellow"></span><span class="dot green"></span>
                </div>
                <div class="terminal-body" id="hero-terminal-body">
                    {{-- filled by animations.js (typing effect) --}}
                </div>
            </div>

            {{-- floating tech badges --}}
            <ul class="hero-badges" aria-hidden="true">
                <li style="--d:0">Laravel</li>
                <li style="--d:1">PHP</li>
                <li style="--d:2">MySQL</li>
                <li style="--d:3">JavaScript</li>
                <li style="--d:4">Git</li>
                <li style="--d:5">REST API</li>
            </ul>
        </div>
    </div>

    <div class="hero-scroll-cue" aria-hidden="true">
        <span></span>
    </div>
</section>
