@extends('layouts.base')

@section('title', '404')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/404.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    @component('components.404_block', [
        'title' => 'Oeps! Je hebt een bug gevonden…',
        'description' => 'Het lijkt erop dat deze pagina in een oneindige loop is vastgelopen of per ongeluk is weggecodeerd. Maar geen zorgen, de rest van de codebase is nog intact!<br><br>Ga terug naar de homepage of bekijk mijn laatste projecten om te zien wat ik nog meer heb gemaakt.',
        'error_button' => 'Ga terug naar start',
        'error_button_url' => '/'
    ])
    @endcomponent
@endsection
