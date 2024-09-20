@extends('layouts.base')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/hero.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/features.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/cta.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    @component('components.hero', [
        'title' => 'Meer dan alleen code: mijn passie',
        'description' => 'Hoi, ik ben Bryan! Als hbo-student softwareontwikkeling ben ik dagelijks bezig met het creëren van slimme oplossingen en het ontdekken van nieuwe technologieën. Mijn passie voor programmeren gaat verder dan alleen het schrijven van code; ik houd ervan om ideeën om te zetten in iets tastbaars en impact te maken met mijn werk. Op deze pagina neem ik je graag mee in mijn reis en vertel ik meer over wie ik ben, waar ik voor sta en welke projecten mij uitdagen en inspireren.',
        'first_button' => 'Contact',
        'first_button_url' => '',
        'second_button' => 'Lees meer',
        'second_button_url' => '',
        'imageSrc' => 'about_me_diploma.jpg',
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => 'rounded-corners'
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Mijn doel in de development wereld',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    ])
    @endcomponent

    @component('components.features', [
        'title' => 'Ontdek mijn expertise',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'features' => [
            [
                'iconSrc' => 'globe.svg',
                'iconAlt' => 'Website icon',
                'title' => 'Website',
                'description' => 'Een website die werkt én indruk maakt? Ik help je om jouw ideeën om te zetten in een moderne, gebruiksvriendelijke site die opvalt!',
            ],
            [
                'iconSrc' => 'magnifying-glass.svg',
                'iconAlt' => 'SEO icon',
                'title' => 'SEO',
                'description' => 'Hoger in Google? Ik optimaliseer jouw website voor betere vindbaarheid en meer online zichtbaarheid!',
            ],
            [
                'iconSrc' => 'webdesign.svg',
                'iconAlt' => 'Webdesign icon',
                'title' => 'Webdesign',
                'description' => 'Een uniek design dat jouw merk laat stralen! Ik creëer websites die niet alleen mooi zijn, maar ook perfect aansluiten bij jouw identiteit en de bezoeker aanspreken.',
            ],
            [
                'iconSrc' => 'server.svg',
                'iconAlt' => 'Webhosting icon',
                'title' => 'Webhosting',
                'description' => 'Snel, veilig en betrouwbaar: ik zorg voor hosting die jouw website online en up-to-date houdt, zodat jij je nergens zorgen over hoeft te maken.',
            ],
        ]
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
