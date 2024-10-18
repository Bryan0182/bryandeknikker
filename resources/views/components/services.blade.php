<div class="container services-section py-5">
    <div class="text-center mb-5">
        <h2 class="section-title">{{ $title }}</h2>
        <p class="section-subtitle">{{ $description }}</p>
    </div>
    <div class="row">
        @foreach ($services as $service)
            <div class="col-md-4 mb-4">
                <a href="{{ $service['url'] }}">
                    <div class="card h-100 text-center services-card">
                        <div class="card-image d-flex justify-content-center">
                            <img src="{{ asset('/output/images/' . $service['image']) }}"
                                 data-dark-src="{{ asset('/output/images/' . $service['image-dark']) }}"
                                 class="card-img-top theme-image"
                                 alt="{{ $service['title'] }}" width="50" height="50">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $service['title'] }}</h5>
                            <p class="card-text">{{ $service['description'] }}</p>
                        </div>
                        <div class="card-button">
                            <a href="{{ $service['url'] }}"
                               class="btn btn-primary align-items-center d-flex justify-content-center read-more-services-button">Lees
                                meer</a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
