@extends('layouts.base')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/hero.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/features.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/experience.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/cta.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    @include('components.hero', [
        'title' => 'Meer dan alleen code: mijn passie',
        'description' => "Hoi, ik ben Bryan! Ik ben $leeftijd jaar oud en als hbo-student softwareontwikkeling werk ik dagelijks aan slimme oplossingen en ontdek ik nieuwe technologieën. Mijn passie voor programmeren gaat verder dan alleen het schrijven van code; ik zet ideeën om in tastbare resultaten die echt impact maken. Op deze pagina neem ik je graag mee op mijn reis en vertel ik je meer over wie ik ben, waar ik voor sta, en welke projecten mij uitdagen en inspireren.",
        'first_button' => 'Contact',
        'first_button_url' => '',
        'second_button' => 'Lees meer',
        'second_button_url' => '',
        'imageSrc' => 'about_me_diploma.png',
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => 'rounded-corners'
    ])

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

    @component('components.text', [
        'title' => 'Waar wil ik beter in worden?',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    ])
    @endcomponent

    @component('components.experience', [
    'title' => 'Werkervaring',
    'experiences' => [
        [
            'iconSrc' => 'graduation-cap.svg',
            'iconAlt' => 'Software Development | Hogeschool Rotterdam',
            'position' => 'Software Development',
            'period' => 'Sep 2023 - Heden',
            'company' => 'Hogeschool Rotterdam',
            'description' => 'Bij de Hogeschool Rotterdam vergroot ik mijn kennis van HTML, CSS en JavaScript, terwijl ik tevens met Python als hoofdtaal werk. We maken gebruik van diverse frameworks en voeren opdrachten uit voor echte opdrachtgevers.',
        ],
        [
            'iconSrc' => 'briefcase.svg',
            'iconAlt' => 'Trainee Developer | DoubleWeb',
            'position' => 'Trainee Developer',
            'period' => 'Jun 2023 - Heden',
            'company' => 'DoubleWeb',
            'description' => 'Als Trainee developer ben ik verantwoordelijk voor het helpen bouwen aan verschillende WordPress websites voor klanten. Ik help ook bij het oplossen van tickets bij verschillende klanten, hierdoor krijg ik ervaring in het oplossen van problemen en het implementeren daarvan.',
        ],
        [
            'iconSrc' => 'briefcase.svg',
            'iconAlt' => 'Software Developer | WebPresto',
            'position' => 'Software Developer',
            'period' => 'Sep 2022 - Heden',
            'company' => 'WebPresto',
            'description' => 'Als software developer bij WebPresto ondersteun ik bij het maken van WordPress websites, daarnaast ben ik verantwoordelijk voor het schrijven van de blogs die 2 keer per maand verschijnen op de website.',
        ],
        [
            'iconSrc' => 'briefcase.svg',
            'iconAlt' => 'Stagiair | DoubleSmart',
            'position' => 'Stagiair',
            'period' => 'Jan 2023 - Jun 2023',
            'company' => 'DoubleSmart',
            'description' => 'Bij DoubleSmart heb ik geleerd hoe SEO werkt en hoe je dit het beste kon aanpakken om een zo goed mogelijke score te krijgen op een website. Ik was verantwoordelijk voor het wijzigen van blog websites, deze moesten een moderner uiterlijk krijgen waar ik aan de slag kon met DIVI. Ik heb veel geleerd over hoe DIVI werkt en hoe je met WordPress zo goed mogelijk op SEO kan scoren.',
        ],
        [
            'iconSrc' => 'briefcase.svg',
            'iconAlt' => 'Kassamedewerker B | Albert Heijn',
            'position' => 'Kassamedewerker B',
            'period' => 'Jun 2022 - Jun 2023',
            'company' => 'Albert Heijn',
            'description' => 'Bij deze functie was ik verantwoordelijk voor de verkoopafhandeling in de supermarkt. Ik moest ervoor zorgen dat er steekproeven werden uitgevoerd op het zelfscanplein en ik moest service verlenen achter de servicebalie. Ik vond dit leuk om te doen omdat je veel klanten kon helpen en hun een glimlach kon bezorgen door de goede service.',
        ],
        [
            'iconSrc' => 'briefcase.svg',
            'iconAlt' => 'Vakkenvuller | Albert Heijn',
            'position' => 'Vakkenvuller',
            'period' => 'Okt 2019 - Jun 2022',
            'company' => 'Albert Heijn',
            'description' => 'Als vakkenvuller was ik verantwoordelijk voor het vullen van de schappen. Ik heb gewerkt op de koeling afdeling en op de houdbare afdeling. Ik vond dat erg leuk om te doen, omdat je vaak klantcontact had die vragen stelde over producten.',
        ],
        [
            'iconSrc' => 'briefcase.svg',
            'iconAlt' => 'Stagiair | WebRabbitz',
            'position' => 'Stagiair',
            'period' => 'Aug 2021 - Jan 2022',
            'company' => 'WebRabbitz',
            'description' => 'Bij deze stage heb ik geleerd om samen te werken aan het maken van een website, ik heb meerdere websites ontwikkeld of aanpassingen gedaan aan bestaande websites. Dit was erg leerzaam en leuk om te doen, daarnaast heb ik mijn kennis verbreed over de standaard programmeertalen die er zijn.',
        ],
        [
            'iconSrc' => 'graduation-cap.svg',
            'iconAlt' => 'Software Developer | MboRijnland',
            'position' => 'Software Developer',
            'period' => 'Aug 2020 - Aug 2023',
            'company' => 'MboRijnland',
            'description' => 'Bij mboRijnland ben ik gestart met mijn ontwikkeling als Software Developer. Daar legde ik een stevige basis in HTML, CSS, JavaScript en PHP. Ik leerde er werken met frameworks en kon diverse projecten succesvol afronden.',
        ],
        [
            'iconSrc' => 'briefcase.svg',
            'iconAlt' => 'Stagiair | SolidBE',
            'position' => 'Stagiair',
            'period' => 'Jan 2018 - Jan 2018',
            'company' => 'SolidBE',
            'description' => 'Tijdens mijn stage heb ik mij voornamelijk gericht op het werken met hardware, waarbij switches en routers centraal stonden. Hoewel ik aanvankelijk weinig ervaring had met deze apparatuur, heb ik tijdens mijn stageperiode een basis weten te leggen en waardevolle kennis opgedaan over hun werking en toepassingen.',
        ],
        [
            'iconSrc' => 'graduation-cap.svg',
            'iconAlt' => 'Mavo | Coenecoop College',
            'position' => 'Mavo',
            'period' => 'Aug 2016 - Jul 2020',
            'company' => 'Coenecoop College',
            'description' => 'Bij het Coenecoop College heb ik mijn mavo afgerond en mezelf als individu ontwikkeld. Hier ben ik me gaan toeleggen op de Science keuzestroom, omdat mijn interesse in de wereld van computers al groot was.',
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
