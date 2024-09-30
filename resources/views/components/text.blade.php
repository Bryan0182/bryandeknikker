<div class="container text-section">
    <div class="row text-center py-5">
        <div class="col-12">
            @if(!empty($title))
                <h2>{{ $title }}</h2>
            @endif

            @if(!empty($description))
                <p class="text-paragraph">{!! $description !!}</p>
            @endif
        </div>
    </div>
</div>
