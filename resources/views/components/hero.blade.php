<div class="container hero-container col-12">
    <div class="row align-items-center hero-row">
        <div class="col-lg-6">
            <h1 class="fw-bold lh-1">{{ $title }}</h1>
            <p class="description-paragraph">{{ $description }}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start button-hero-row">
                <a href="{{ $first_button_url }}" class="btn btn-outline-primary btn-lg px-4 me-md-2 contact-hero-button">{{ $first_button }}</a>
                <a href="{{ $second_button_url }}"  class="btn btn-primary btn-lg px-4 align-items-center d-flex read-more-hero-button">{{ $second_button }}</a>
            </div>
        </div>
        <div class="col-12 col-lg-6 mt-tablet image-column">
            <img src="{{ $imageSrc }}" class="d-block mx-auto ms-md-auto me-lg-0 img-fluid" alt="{{ $altText }}" width="{{ $width }}" height="{{ $height }}" loading="eager">
        </div>
    </div>
</div>
