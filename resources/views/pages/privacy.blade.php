@extends('layouts.base')

@section('title', 'Privacy')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    @component('components.declaration', [
        'title' => 'Privacyverklaring',
        'sections' => [
            [
                'subtitle' => 'Wat is een privacyverklaring?',
                'content' => 'Een privacyverklaring beschrijft hoe wij omgaan met persoonsgegevens.'
            ],
            [
                'subtitle' => 'Waarom hebben we het nodig?',
                'content' => 'We hebben deze gegevens nodig om onze diensten te kunnen verlenen.'
            ],
            [
                'subtitle' => 'Welke gegevens verzamelen we?',
                'content' => 'We verzamelen persoonlijke gegevens zoals naam, e-mail en adres.'
            ]
        ]
    ])
    @endcomponent
@endsection
