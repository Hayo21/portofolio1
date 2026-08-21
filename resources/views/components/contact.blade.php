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

        <form id="contact-form" class="contact-form" data-animate="fade-left" action="{{ route('contact.store') }}" method="POST" novalidate>
            @csrf
            <div class="form-group">
                <label for="contact-name">Name</label>
                <input type="text" id="contact-name" name="name" required>
                <span class="form-error" data-error-for="name"></span>
            </div>
            <div class="form-group">
                <label for="contact-email">Email</label>
                <input type="email" id="contact-email" name="email" required>
                <span class="form-error" data-error-for="email"></span>
            </div>
            <div class="form-group">
                <label for="contact-subject">Subject</label>
                <input type="text" id="contact-subject" name="subject" required>
                <span class="form-error" data-error-for="subject"></span>
            </div>
            <div class="form-group">
                <label for="contact-message">Message</label>
                <textarea id="contact-message" name="message" rows="5" required></textarea>
                <span class="form-error" data-error-for="message"></span>
            </div>

            <button type="submit" class="btn-primary" id="contact-submit">
                <span class="btn-label">Send Message</span>
            </button>

            <div id="form-feedback" role="status" aria-live="polite"></div>
        </form>
    </div>
</section>
