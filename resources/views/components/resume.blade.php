{{-- Lokasi file: resources/views/components/resume.blade.php --}}
<section class="section resume">
    <div class="section-inner resume-inner">
        <div class="resume-copy" data-animate="fade-up">
            <p class="section-label">07 — RESUME</p>
            <h2>My Resume</h2>
            <p class="section-desc">
                A quick summary of my education, skills, and project experience —
                or download the full CV for the complete picture.
            </p>
            <a href="{{ asset('storage/cv/muniff-agustiansah-cv.pdf') }}" class="btn-primary" download>
                <span>Download CV</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 3v12m0 0 4-4m-4 4-4-4M4 21h16"/></svg>
            </a>
        </div>

        <div class="resume-summary" data-animate="fade-left">
            <div class="resume-block">
                <h3>Education</h3>
                @foreach($educations as $education)
                    <p>{{ $education->degree }} {{ $education->major }} — {{ $education->institution }} ({{ $education->year }})</p>
                @endforeach
            </div>
            <div class="resume-block">
                <h3>Skills</h3>
                <p>{{ $skills->flatten()->pluck('name')->join(', ') }}</p>
            </div>
            <div class="resume-block">
                <h3>Projects</h3>
                <p>{{ $projects->count() }} projects built, including {{ $featuredProject?->title }}.</p>
            </div>
            <div class="resume-block">
                <h3>Experience</h3>
                @foreach($experiences as $experience)
                    <p>{{ $experience->title }} — {{ $experience->organization }} ({{ $experience->year }})</p>
                @endforeach
            </div>
        </div>
    </div>
</section>
