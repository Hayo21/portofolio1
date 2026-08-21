{{-- Lokasi file: resources/views/components/services.blade.php --}}
<section id="services" class="section services">
    <div class="section-inner">
        <p class="section-label" data-animate="fade-up">05 — SERVICES</p>
        <h2 data-animate="fade-up">What I Can Do</h2>

        <div class="services-grid" data-animate="stagger">
            @foreach($services as $service)
                <div class="service-card">
                    <span class="service-icon" data-lucide="{{ $service->icon ?? 'code' }}" aria-hidden="true"></span>
                    <h3>{{ $service->title }}</h3>
                    <p>{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
