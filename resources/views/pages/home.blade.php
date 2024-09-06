@extends('layouts.base')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/recent_blogs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skills.css') }}">
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

    @component('components.skills', [
        'frontend' => [
            'languages' => [
                ['name' => 'HTML', 'icon' => 'html5-logo.svg'],
                ['name' => 'CSS', 'icon' => 'css3-logo.svg'],
                ['name' => 'Sass', 'icon' => 'sass-logo.svg'],
                ['name' => 'JS', 'icon' => 'js-logo.svg'],
            ],
            'frameworks' => [
                ['name' => 'Bootstrap', 'icon' => 'bootstrap-logo.svg'],
                ['name' => 'React', 'icon' => 'react-logo.svg'],
                ['name' => 'JQuery', 'icon' => 'jquery-logo.svg'],
            ],
        ],
        'backend' => [
            'languages' => [
                ['name' => 'PHP', 'icon' => 'php-logo.svg'],
                ['name' => 'Python', 'icon' => 'python-logo.svg'],
            ],
            'frameworks' => [
                ['name' => 'Laravel', 'icon' => 'laravel-logo.svg'],
                ['name' => 'Symfony', 'icon' => 'symfony-logo.svg'],
                ['name' => 'Django', 'icon' => 'django-logo.svg'],
                ['name' => 'Flask', 'icon' => 'flask-logo.svg'],
            ],
        ]
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Mijn passie voor software development',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
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
