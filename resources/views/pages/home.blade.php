@extends('layouts.base')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
@endpush

@section('content')
    @component('components.hero', [
        'title' => 'Ontdek mijn wereld van code',
        'description' => 'Ik ben Bryan de Knikker, een gepassioneerde software developer in opleiding. Op mijn portfolio ervaar je hoe ik creativiteit en techniek combineer om digitale oplossingen tot leven te brengen. Welkom, en laat je inspireren door mijn werk!',
        'first_button' => 'Contact',
        'second_button' => 'Lees meer',
        'imageSrc' => asset('/images/blob-profielfoto-transparent.png'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300
    ])
    @endcomponent
@endsection
