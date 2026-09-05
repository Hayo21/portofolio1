{{-- Lokasi file: resources/views/components/resume.blade.php --}}
<section class="section resume">
    <div class="section-inner resume-inner">
        <div class="resume-copy" data-animate="fade-up">
            <p class="section-label">07 — RESUME</p>
            <h2>My Resume</h2>
            <p class="section-desc">
                A quick summary of my education, skills, and project experience.
            </p>
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
