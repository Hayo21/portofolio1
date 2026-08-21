// Lokasi file: public/js/contact.js
// 23/24. Contact form — fetch/AJAX submit, no reload, success + validation error states.

(function () {
    const form = document.getElementById('contact-form');
    if (!form) return;

    const submitBtn = document.getElementById('contact-submit');
    const submitLabel = submitBtn?.querySelector('.btn-label');
    const feedback = document.getElementById('form-feedback');

    function clearErrors() {
        form.querySelectorAll('.form-group').forEach((group) => group.classList.remove('has-error'));
        form.querySelectorAll('.form-error').forEach((el) => (el.textContent = ''));
    }

    function showValidationErrors(errors) {
        Object.entries(errors).forEach(([field, messages]) => {
            const errorEl = form.querySelector(`[data-error-for="${field}"]`);
            const group = errorEl?.closest('.form-group');
            if (errorEl) errorEl.textContent = messages[0];
            group?.classList.add('has-error');
        });
    }

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        clearErrors();

        if (feedback) {
            feedback.textContent = '';
            feedback.className = '';
        }
        submitBtn?.classList.add('is-sending');
        if (submitLabel) submitLabel.textContent = 'Sending...';

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    Accept: 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]')?.value ?? '',
                },
                body: new FormData(form),
            });

            const data = await response.json();

            if (response.status === 422) {
                showValidationErrors(data.errors);
                if (feedback) {
                    feedback.textContent = 'Please check the fields highlighted below.';
                    feedback.className = 'is-error';
                }
                return;
            }

            if (!response.ok) {
                throw new Error('Request failed');
            }

            if (submitLabel) submitLabel.textContent = 'Message Sent ✓';
            if (feedback) {
                feedback.textContent = data.message || 'Message sent successfully.';
                feedback.className = 'is-success';
            }
            form.reset();
            setTimeout(() => {
                if (submitLabel) submitLabel.textContent = 'Send Message';
            }, 2500);
        } catch (error) {
            if (submitLabel) submitLabel.textContent = 'Send Message';
            if (feedback) {
                feedback.textContent = 'Something went wrong. Please try again.';
                feedback.className = 'is-error';
            }
        } finally {
            submitBtn?.classList.remove('is-sending');
        }
    });
})();
