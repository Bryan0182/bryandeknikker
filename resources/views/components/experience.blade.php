<div class="container my-5">
    <h2 class="text-center mb-4">{{ $title }}</h2>
    <div class="timeline">
        @foreach($experiences as $experience)
            <div class="timeline-item">
                <div class="timeline-icon">
                    <img src="{{ asset('output/images/' . $experience['iconSrc']) }}" alt="{{ $experience['iconAlt'] }}"
                         width="30" height="30">
                </div>
                <div class="timeline-content">
                    <h4>{{ $experience['position'] }}</h4>
                    <span class="">{{ $experience['period'] }}
                        @if(!empty($experience['company']))
                            | {{ $experience['company'] }}
                        @endif
                    </span>
                    <p>{{ $experience['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
