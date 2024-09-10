<div class="container slider-section">
    <div class="row py-5">
        <div class="col-12">
            <div class="slider-images">
                @foreach ($images as $image)
                    <div>
                        <img src="{{ Storage::url($image) }}" alt="Slider Image" class="img-fluid"/>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
