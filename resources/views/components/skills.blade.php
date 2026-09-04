{{-- Lokasi file: resources/views/components/skills.blade.php --}}

<section id="skills" class="section skills">
    <div class="section-inner">
        <p class="section-label" data-animate="fade-up">02 — SKILLS</p>
        <h2 data-animate="fade-up">What I Work With</h2>
        <p class="section-desc" data-animate="fade-up">
            Tools and technologies I use to design, build, and ship web applications.
        </p>

        <div class="skills-filter" data-animate="fade-up" role="tablist" aria-label="Filter skills">
            <button type="button" class="filter-btn is-active" data-filter="all" role="tab"
                aria-selected="true">All</button>
            @foreach (array_keys($skills->toArray()) as $category)
                <button type="button" class="filter-btn" data-filter="{{ $category }}" role="tab"
                    aria-selected="false">{{ $category }}</button>
            @endforeach
        </div>

        <div class="skills-grid" data-animate="stagger">
            @foreach ($skills as $category => $items)
                @foreach ($items as $skill)
                    <div class="skill-card" data-category="{{ $category }}">
                        <span class="skill-icon" data-lucide="{{ $skill->icon ?? 'code' }}" aria-hidden="true"></span>
                        <span class="skill-name">{{ $skill->name }}</span>
                        <span class="skill-category">{{ $category }}</span>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>

    {{-- 13. TECHNOLOGY MARQUEE --}}
    <div class="tech-marquee" aria-hidden="true">
        <div class="marquee-track">

            <!-- SET 1 -->
            <div class="marquee-content">
                <!-- Copy 3x agar sangat panjang untuk monitor PC -->
                <span>Laravel</span><span>·</span><span>PHP</span><span>·</span><span>MySQL</span><span>·</span><span>JavaScript</span><span>·</span><span>Bootstrap</span><span>·</span><span>Git</span><span>·</span><span>GitHub</span><span>·</span>
                <span>Laravel</span><span>·</span><span>PHP</span><span>·</span><span>MySQL</span><span>·</span><span>JavaScript</span><span>·</span><span>Bootstrap</span><span>·</span><span>Git</span><span>·</span><span>GitHub</span><span>·</span>
                <span>Laravel</span><span>·</span><span>PHP</span><span>·</span><span>MySQL</span><span>·</span><span>JavaScript</span><span>·</span><span>Bootstrap</span><span>·</span><span>Git</span><span>·</span><span>GitHub</span><span>·</span>
            </div>

            <!-- SET 2 (Sama persis dengan SET 1) -->
            <div class="marquee-content" aria-hidden="true">
                <span>Laravel</span><span>·</span><span>PHP</span><span>·</span><span>MySQL</span><span>·</span><span>JavaScript</span><span>·</span><span>Bootstrap</span><span>·</span><span>Git</span><span>·</span><span>GitHub</span><span>·</span>
                <span>Laravel</span><span>·</span><span>PHP</span><span>·</span><span>MySQL</span><span>·</span><span>JavaScript</span><span>·</span><span>Bootstrap</span><span>·</span><span>Git</span><span>·</span><span>GitHub</span><span>·</span>
                <span>Laravel</span><span>·</span><span>PHP</span><span>·</span><span>MySQL</span><span>·</span><span>JavaScript</span><span>·</span><span>Bootstrap</span><span>·</span><span>Git</span><span>·</span><span>GitHub</span><span>·</span>
            </div>

        </div>
    </div>
</section>
