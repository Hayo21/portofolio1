{{-- Lokasi file: resources/views/components/projects.blade.php --}}
<section id="projects" class="section projects">
    <div class="section-inner">
        <p class="section-label" data-animate="fade-up">03 — WORK</p>
        <h2 data-animate="fade-up">Featured Projects</h2>
        <p class="section-desc" data-animate="fade-up">
            A selection of systems and applications I've built, from concept to working product.
        </p>

        @if($featuredProject)
        {{-- 14. FEATURED PROJECT --}}
        <a href="{{ route('projects.show', $featuredProject) }}" class="featured-project" data-animate="fade-up">
            <div class="featured-image-wrap">
                <img src="{{ asset('images/' . $featuredProject->image) }}" alt="{{ $featuredProject->title }} screenshot" loading="lazy">
                <span class="featured-overlay">View Project →</span>
            </div>
            <div class="featured-copy">
                <span class="featured-tag">Featured Project</span>
                <h3>{{ $featuredProject->title }}</h3>
                <p>{{ $featuredProject->short_description }}</p>
                <ul class="tech-tags">
                    @foreach($featuredProject->technologies as $tech)
                        <li>{{ $tech }}</li>
                    @endforeach
                </ul>
            </div>
        </a>
        @endif

        {{-- 16. PROJECT FILTER --}}
        <div class="project-filter" data-animate="fade-up" role="tablist" aria-label="Filter projects">
            @php $categories = $projects->pluck('category')->unique(); @endphp
            <button type="button" class="filter-btn is-active" data-filter="all" role="tab" aria-selected="true">All</button>
            @foreach($categories as $category)
                <button type="button" class="filter-btn" data-filter="{{ $category }}" role="tab" aria-selected="false">{{ $category }}</button>
            @endforeach
        </div>

        <div class="project-grid" data-animate="stagger">
            @foreach($projects as $index => $project)
                @if(!$project->featured)
                <a href="{{ route('projects.show', $project) }}" class="project-card" data-category="{{ $project->category }}">
                    <span class="project-number">{{ sprintf('%02d', $index + 1) }}</span>
                    <div class="project-image-wrap">
                        <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }} screenshot" loading="lazy">
                        <span class="project-overlay">View Project →</span>
                    </div>
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->short_description }}</p>
                    <ul class="tech-tags">
                        @foreach(array_slice($project->technologies, 0, 3) as $tech)
                            <li>{{ $tech }}</li>
                        @endforeach
                    </ul>
                </a>
                @endif
            @endforeach
        </div>
    </div>
</section>
