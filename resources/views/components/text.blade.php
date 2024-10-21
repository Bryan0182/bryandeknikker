<div class="container text-section">
    <div class="row justify-content-center py-5">
        <div class="col-lg-8 col-12">
            @if(!empty($title))
                <h2>{{ $title }}</h2>
            @endif

            @if(!empty($description))
                <p class="text-paragraph">{!! $description !!}</p>
            @endif
        </div>
    </div>
</div>
