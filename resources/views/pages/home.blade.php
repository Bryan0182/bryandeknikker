@extends('layouts.base')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/recent_blogs.css') }}">
@endpush

@section('content')
    @component('components.hero', [
        'title' => 'Ontdek mijn wereld van code',
        'description' => 'Ik ben Bryan de Knikker, een gepassioneerde software developer in opleiding. Op mijn portfolio ervaar je hoe ik creativiteit en techniek combineer om digitale oplossingen tot leven te brengen. Welkom, en laat je inspireren door mijn werk!',
        'first_button' => 'Contact',
        'first_button_url' => '',
        'second_button' => 'Lees meer',
        'second_button_url' => '',
        'imageSrc' => asset('/images/blob-profielfoto-transparent.png'),
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300
    ])
    @endcomponent

    @include('components.recent_blogs', ['recentBlogs' => $recentBlogs])
@endsection
