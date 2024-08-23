@extends('layouts.base')

@section('pageTitle')
    404
@endsection

@section('metaDescription')
    Oops, dat ging even mis!
@endsection

@section('opengraphMetaTitle')
    404 - Bryan de Knikker
@endsection
@section('opengraphMetaDescription')
    Oops, dat ging even mis!
@endsection
@section('opengraphMetaUrl')
    https://www.bryandeknikker.nl
@endsection
@section('opengraphMetaImage')
    {{ asset('images/profielfoto.webp') }}
@endsection

@section('content')
    <div class="container-fluid align-items-center d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-12 align-items-center d-flex text-column">
                    <div class="row">
                        <div class="col-12 justify-content-center d-flex">
                            <h1 class="text-center">Oeps! Je hebt een bug gevonden…</h1>
                        </div>
                        <div class="col-12 d-flex flex-column align-items-center text-center">
                            <p>Het lijkt erop dat deze pagina in een oneindige loop is vastgelopen of per ongeluk is weggecodeerd. Maar geen zorgen, de rest van de codebase is nog intact!</p>
                            <p>Ga terug naar de homepage of bekijk mijn laatste projecten om te zien wat ik nog meer heb gemaakt.</p>
                            <a href="{{ route('home') }}" class="btn btn-primary main-button mt-3">Ga terug naar start</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
