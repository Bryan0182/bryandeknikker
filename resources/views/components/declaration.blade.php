<div class="container declaration-section">
    <div class="row py-5">
        <div class="col-12">
            @if(!empty($title))
                <h2 class="text-center">{{ $title }}</h2>
            @endif

            @foreach($sections as $section)
                @if(!empty($section['subtitle']))
                    <h5>{{ $section['subtitle'] }}</h5>
                @endif

                @if(!empty($section['content']))
                    <p class="text-paragraph">{!! $section['content'] !!}</p>
                @endif
            @endforeach
        </div>
    </div>
</div>
