<div class="container hero-cta-container col-12">
    <div class="row align-items-center hero-cta-row">
        <div class="col-lg-6">
            <h1 class="fw-bold lh-1">{{ $title }}</h1>
            <p class="description-paragraph">{{ $description }}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start button-hero-cta-row">
                @if (!empty($first_button) && !empty($first_button_url))
                    <a href="{{ $first_button_url }}"
                       class="btn btn-outline-primary btn-lg px-4 me-md-2 contact-hero-button">{{ $first_button }}</a>
                @endif

                @if (!empty($second_button) && !empty($second_button_url))
                    <a href="{{ $second_button_url }}"
                       class="btn btn-primary btn-lg px-4 align-items-center d-flex read-more-hero-button">{{ $second_button }}</a>
                @endif
            </div>
        </div>
        <div class="col-12 col-lg-5 offset-lg-1 cta-column">
            <div class="contact-card">
                <h4 class="mb-4 text-center">Vrijblijvend contact opnemen?</h4>
                <p class="text-center">Wil je meer weten over hoe ik je kan helpen? Neem dan gerust contact op voor een vrijblijvend gesprek.</p>

                <!-- Flex-column for small screens and flex-md-row for medium+ screens -->
                <div class="cta-buttons mt-2 d-flex flex-column flex-md-row justify-content-center align-items-center gap-2">
                    @if (!empty($mail_button))
                        <a href="mailto:{{ $mail_button }}"
                           class="btn btn-primary mail-contact-hero-button">{{ $mail_button }}</a>
                    @endif
                    @if (!empty($phone_button) && !empty($phone_button_url))
                        <a href="tel:{{ $phone_button_url }}"
                           class="btn btn-outline-secondary phone-contact-hero-button">{{ $phone_button }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
