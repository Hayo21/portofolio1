{{-- Lokasi file: resources/views/components/contact.blade.php --}}
<section id="contact" class="section contact">
    <div class="section-inner contact-inner">
        <div class="contact-copy" data-animate="fade-up">
            <p class="section-label">08 — CONTACT</p>
            <h2>Let's build something<br>useful together.</h2>
            <p class="section-desc">
                Have a project in mind or an opportunity to discuss? I'd love to hear from you.
            </p>

            <ul class="contact-links">
                @foreach($socialLinks as $link)
                    <li>
                        <span class="contact-link-label">{{ $link->label }}</span>
                        @if(in_array($link->platform, ['GitHub', 'LinkedIn']))
                            <a href="{{ $link->value }}" target="_blank" rel="noopener noreferrer">{{ $link->value }}</a>
                        @elseif($link->platform === 'Email')
                            <a href="mailto:{{ $link->value }}">{{ $link->value }}</a>
                        @elseif($link->platform === 'WhatsApp')
                            <a href="https://wa.me/{{ preg_replace('/\D/', '', $link->value) }}" target="_blank" rel="noopener noreferrer">{{ $link->value }}</a>
                        @else
                            <span>{{ $link->value }}</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
