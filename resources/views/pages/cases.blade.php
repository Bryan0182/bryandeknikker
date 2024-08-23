@extends('layouts.base')

@section('pageTitle')
    Cases
@endsection

@section('metaDescription')
    Bekijk hier alle cases waar Bryan de Knikker aan heeft gewerkt.
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex">
            <h1 class="cases-title text-center">Cases</h1>
            <div class="col-lg-3 col-md-6 col-sm-12 case-card">
                <div class="card h-100">
                    <img src="{{ asset('/images/accessibility.webp') }}" class="card-img-top img-fluid" alt="Logo van Accessibility">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Accessibility Hub</h5>
                        <p class="card-text">Duik mee in het boeiende verhaal van de Accessibility Hub en ontdek hoe ik deze uitdagende case heb aangepakt!</p>
                        <a href="{{ route('accessibility') }}" class="btn btn-primary main-button mt-auto">Bekijk de case</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 case-card">
                <div class="card h-100">
                    <img src="{{ asset('/images/kunstvanelk.webp') }}" class="card-img-top img-fluid" alt="Logo van Kunst van Elk">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Kunst van Elk</h5>
                        <p class="card-text">Ontdek het verhaal van Kunst van Elk en laat je verrassen door de betoverende website die de kunstwereld binnen handbereik brengt!</p>
                        <a href="{{ route('kunstvanelk') }}" class="btn btn-primary main-button mt-auto">Bekijk de case</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 case-card">
                <div class="card h-100">
                    <img src="{{ asset('/images/testcorrect.svg') }}" class="card-img-top img-fluid" alt="Logo van Test-Correct">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Test-Correct</h5>
                        <p class="card-text">Ontdek hoe Test-Correct docenten helpt bij het creëren van toetsvragen met behulp van innovatieve AI-technologie.</p>
                        <a href="{{ route('testcorrect') }}" class="btn btn-primary main-button mt-auto">Bekijk de case</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 case-card">
                <div class="card h-100">
                    <img src="{{ asset('/images/pygame.webp') }}" class="card-img-top img-fluid" alt="Logo van Pygame">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Pixels Gunner</h5>
                        <p class="card-text">Ontdek hoe Pixels Gunner een leuke en verslavende game is die wij in onze eerste periode hebben gemaakt.</p>
                        <a href="{{ route('pixelsgunner') }}" class="btn btn-primary main-button mt-auto">Bekijk de case</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 case-card">
                <div class="card h-100">
                    <img src="{{ asset('/images/glitch.webp') }}" class="card-img-top img-fluid" alt="Logo van Pygame">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Glitch</h5>
                        <p class="card-text">Ontdek hoe het GLITCH-platform de leerervaring opnieuw definieert en hoe deze case is aangepakt om studenten en docenten te ondersteunen in hun educatieve reis!</p>
                        <a href="{{ route('glitch') }}" class="btn btn-primary main-button mt-auto">Bekijk de case</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 case-card">
                <div class="card h-100">
                    <img src="{{ asset('/images/readyfortravelling.webp') }}" class="card-img-top img-fluid" alt="Logo van Ready for Travelling">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Ready for Travelling</h5>
                        <p class="card-text">Bekijk hoe ik een bestaande website heb helpen verbeteren om nog betere informatie te bieden voor de bezoekers en de website een onvergetelijke reis te maken.</p>
                        <a href="{{ route('readyfortravelling') }}" class="btn btn-primary main-button mt-auto">Bekijk de case</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
