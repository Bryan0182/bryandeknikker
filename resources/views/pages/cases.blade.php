@extends('layouts.base')

@section('title', 'Cases')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/cta.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    @component('components.cta', [
        'title' => 'Ontdek mijn portfolio',
        'description' => 'Ontdek mijn portfolio cases en zie mijn ontwikkelvaardigheden in actie',
        'first_button' => 'Cases',
        'first_button_url' => '',
        'second_button' => 'Bekijk mijn laatste case',
        'second_button_url' => ''
    ])
    @endcomponent

@endsection
