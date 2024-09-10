<div class="container-fluid cta-container-fluid">
    <div class="container cta-section">
        <div class="row text-center g-5 py-5">
            <div class="col-12">
                <h2 class="cta-title">{{ $title }}</h2>
                <p class="cta-text">{{ $description }}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-center button-cta-row">
                    <a href="{{ $first_button_url }}"
                       class="btn btn-outline-primary btn-lg px-4 me-md-2 contact-hero-button">{{ $first_button }}</a>

                    @if(!empty($second_button))
                        <a href="{{ $second_button_url }}"
                           class="btn btn-primary btn-lg px-4 align-items-center d-flex read-more-hero-button">{{ $second_button }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
