{{-- Lokasi file: resources/views/components/about.blade.php --}}
<section id="about" class="section about">
    <div class="section-inner about-grid">
        <div class="about-visual" data-animate="fade-right">
            <div class="about-frame">
                <img src="{{ asset('images/profile/muniff.jpg') }}" alt="Portrait of Muniff Agustiansah" loading="lazy" width="480" height="560">
            </div>
        </div>

        <div class="about-copy">
            <p class="section-label" data-animate="fade-up">01 — ABOUT</p>
            <h2 data-animate="fade-up">About Me</h2>
            <p class="about-text" data-animate="fade-up">
                I'm a Computer Science graduate who enjoys building web applications, solving technical
                problems, and turning ideas into functional digital products. My background also includes
                hands-on experience managing operations and data for a family retail business, which shaped
                how I approach systems built around real, everyday business needs.
            </p>

            <div class="about-info-cards" data-animate="fade-up">
                <div class="info-card">
                    <span class="info-label">Education</span>
                    <span class="info-value">S1 Teknik Informatika, Universitas Pamulang</span>
                </div>
                <div class="info-card">
                    <span class="info-label">Focus</span>
                    <span class="info-value">Web Development</span>
                </div>
                <div class="info-card">
                    <span class="info-label">Location</span>
                    <span class="info-value">Bogor, West Java, Indonesia</span>
                </div>
                <div class="info-card">
                    <span class="info-label">Tools</span>
                    <span class="info-value">Laravel · MySQL · Git</span>
                </div>
            </div>

            {{-- count-up stats --}}
            <div class="about-stats" data-animate="fade-up">
                <div class="stat">
                    <span class="stat-number" data-count-to="{{ $projects->count() }}">0</span>
                    <span class="stat-plus">+</span>
                    <span class="stat-label">Projects</span>
                </div>
                <div class="stat">
                    <span class="stat-number" data-count-to="1">0</span>
                    <span class="stat-plus">+</span>
                    <span class="stat-label">Years Learning</span>
                </div>
                <div class="stat">
                    <span class="stat-number" data-count-to="10">0</span>
                    <span class="stat-plus">+</span>
                    <span class="stat-label">Technologies</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 11. PERSONALITY SECTION --}}
<section class="personality" aria-label="Working style">
    <div class="section-inner">
        <p class="personality-lead" data-animate="fade-up">"I don't just write code. I solve problems."</p>
        <ul class="personality-track" aria-hidden="false">
            <li>Curious about technology</li>
            <li>Enjoy solving problems</li>
            <li>Always learning</li>
            <li>Detail oriented</li>
            <li>Interested in web development</li>
        </ul>
    </div>
</section>
