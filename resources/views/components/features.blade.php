<div class="container px-4 py-5">
    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5">
        <div class="col d-flex flex-column gap-2">
            <h2 class="text-center text-lg-start">{{ $title }}</h2>
            <p class="text-center text-lg-start">{{ $description }}</p>
            @if (!empty($button) && !empty($button_url))
                <a href="{{ $button_url }}" class="btn btn-outline-primary btn-lg px-4 me-md-2 contact-hero-button">{{ $button }}</a>
            @endif
        </div>

        <div class="col">
            <div class="row row-cols-1 row-cols-sm-2 g-4">
                @foreach($features as $feature)
                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center feature-icon">
                            <img src="{{ asset('output/images/' . $feature['iconSrc']) }}"
                                 alt="{{ $feature['iconAlt'] }}" width="35" height="40">
                        </div>
                        <h5 class="fw-semibold mb-0 text-center">{{ $feature['title'] }}</h5>
                        <p class="text-center">{{ $feature['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
