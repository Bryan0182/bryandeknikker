<section class="accordion-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">{{ $title }}</h2>
                <p class="text-center text-paragraph">{{ $description }}</p>
                <div class="accordion" id="accordionExample">
                    @foreach($accordionItems as $index => $item)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                                    {{ $item['title'] }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ $item['description'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
