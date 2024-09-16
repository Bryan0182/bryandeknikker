<div class="container-fluid align-items-center d-flex flex-column py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 align-items-center d-flex text-column">
                <div class="row">
                    <div class="col-12 justify-content-center d-flex">
                        <h1 class="text-center mb-3">{{ $title }}</h1>
                    </div>
                    <div class="col-12 d-flex flex-column align-items-center text-center">
                        <p>{!! $description !!}</p>
                        <a href="{{ $error_button_url }}" class="btn btn-primary error-button mt-3">{{ $error_button }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
