{{-- Lokasi file: resources/views/components/experience.blade.php --}}
<section id="experience" class="section experience">
    <div class="section-inner">
        <p class="section-label" data-animate="fade-up">04 — JOURNEY</p>
        <h2 data-animate="fade-up">Experience & Education</h2>

        <div class="timeline" data-animate="fade-up">
            <div class="timeline-line" aria-hidden="true"><span class="timeline-line-fill"></span></div>

            @foreach($experiences as $experience)
                <div class="timeline-item">
                    <span class="timeline-year">{{ $experience->year }}</span>
                    <div class="timeline-dot" aria-hidden="true"></div>
                    <div class="timeline-content">
                        <h3>{{ $experience->title }}</h3>
                        <p class="timeline-org">{{ $experience->organization }}</p>
                        @if($experience->description)
                            <p class="timeline-desc">{{ $experience->description }}</p>
                        @endif
                    </div>
                </div>
            @endforeach

            @foreach($educations as $education)
                <div class="timeline-item">
                    <span class="timeline-year">{{ $education->year }}</span>
                    <div class="timeline-dot" aria-hidden="true"></div>
                    <div class="timeline-content">
                        <h3>{{ $education->degree }} {{ $education->major }}</h3>
                        <p class="timeline-org">{{ $education->institution }}</p>
                        @if($education->description)
                            <p class="timeline-desc">{{ $education->description }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
