@extends('layouts.base')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/hero.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/cta.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    @component('components.hero', [
        'title' => 'Meer dan alleen code: mijn passie',
        'description' => 'Ik ben Bryan de Knikker, een gepassioneerde software developer in opleiding. Op mijn portfolio ervaar je hoe ik creativiteit en techniek combineer om digitale oplossingen tot leven te brengen. Welkom, en laat je inspireren door mijn werk!',
        'first_button' => 'Contact',
        'first_button_url' => '',
        'second_button' => 'Lees meer',
        'second_button_url' => '',
        'imageSrc' => asset('/output/images/about-me.png'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => 'rounded-corners'
    ])
    @endcomponent

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
