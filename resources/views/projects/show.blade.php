{{-- Lokasi file: resources/views/projects/show.blade.php --}}
@extends('layouts.app')

@section('title', $project->title . ' — Muniff Agustiansah')
@section('description', $project->short_description)

@section('content')
<section class="project-detail">
    <div class="section-inner">
        <a href="{{ route('home') }}#projects" class="back-link" data-animate="fade-up">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 12H5M11 18l-6-6 6-6"/></svg>
            Back to Projects
        </a>

        <div class="project-detail-head" data-animate="fade-up">
            @if($project->featured)
                <span class="featured-tag">Featured Project</span>
            @endif
            <h1>{{ $project->title }}</h1>
            <p class="project-detail-lead">{{ $project->short_description }}</p>

            <div class="project-detail-links">
                @if($project->live_url)
                    <a href="{{ $project->live_url }}" class="btn-primary" target="_blank" rel="noopener noreferrer">Live Demo</a>
                @endif
                @if($project->github_url)
                    <a href="{{ $project->github_url }}" class="btn-secondary" target="_blank" rel="noopener noreferrer">GitHub</a>
                @endif
            </div>
        </div>

        <div class="project-detail-image" data-animate="fade-up">
            <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }} screenshot" loading="lazy">
        </div>

        <div class="project-detail-body">
            <div class="project-detail-main">
                <div class="detail-block" data-animate="fade-up">
                    <h2>Description</h2>
                    <p>{{ $project->description }}</p>
                </div>

                @if($project->problem)
                <div class="detail-block" data-animate="fade-up">
                    <h2>Problem</h2>
                    <p>{{ $project->problem }}</p>
                </div>
                @endif

                @if($project->solution)
                <div class="detail-block" data-animate="fade-up">
                    <h2>Solution</h2>
                    <p>{{ $project->solution }}</p>
                </div>
                @endif

                @if($project->features)
                <div class="detail-block" data-animate="fade-up">
                    <h2>Features</h2>
                    <ul class="feature-list">
                        @foreach($project->features as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if($project->challenges)
                <div class="detail-block" data-animate="fade-up">
                    <h2>Challenges</h2>
                    <p>{{ $project->challenges }}</p>
                </div>
                @endif

                @if($project->result)
                <div class="detail-block" data-animate="fade-up">
                    <h2>Result</h2>
                    <p>{{ $project->result }}</p>
                </div>
                @endif

                @if($project->gallery && count($project->gallery))
                <div class="detail-block" data-animate="fade-up">
                    <h2>Screenshots</h2>
                    <div class="gallery-grid">
                        @foreach($project->gallery as $image)
                            <img src="{{ asset('images/' . $image) }}" alt="{{ $project->title }} screenshot" loading="lazy">
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <aside class="project-detail-side" data-animate="fade-left">
                <h2>Technology</h2>
                <ul class="tech-tags">
                    @foreach($project->technologies as $tech)
                        <li>{{ $tech }}</li>
                    @endforeach
                </ul>
            </aside>
        </div>

        @if($relatedProjects->count())
        <div class="related-projects" data-animate="fade-up">
            <h2>More Projects</h2>
            <div class="project-grid">
                @foreach($relatedProjects as $related)
                    <a href="{{ route('projects.show', $related) }}" class="project-card">
                        <div class="project-image-wrap">
                            <img src="{{ asset('images/' . $related->image) }}" alt="{{ $related->title }} screenshot" loading="lazy">
                            <span class="project-overlay">View Project →</span>
                        </div>
                        <h3>{{ $related->title }}</h3>
                        <p>{{ $related->short_description }}</p>
                    </a>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
